<?php
require('../../dmxConnectLib/dmxConnect.php');


$app = new \lib\App();

$app->define(<<<'JSON'
{
  "meta": {
    "$_GET": [
      {
        "type": "text",
        "name": "sort"
      },
      {
        "type": "text",
        "name": "dir"
      }
    ]
  },
  "exec": {
    "steps": {
      "name": "listar_clientes_clientes_novos",
      "module": "dbupdater",
      "action": "custom",
      "options": {
        "connection": "asj",
        "sql": {
          "query": "WITH Clientes_Meses AS (\n    SELECT \n        COUNT(*) AS total_clientes_mes,\n        COUNT(CASE WHEN DATE(criado_em) >= CURDATE() - INTERVAL 30 DAY THEN 1 END) AS novos_clientes_mes,  -- Clientes criados no mês atual\n        MONTH(criado_em) AS mes,\n        YEAR(criado_em) AS ano\n    FROM clientes\n    GROUP BY YEAR(criado_em), MONTH(criado_em)\n),\nClientes_Semanas AS (\n    SELECT\n        COUNT(*) AS total_clientes_semana,\n        COUNT(CASE WHEN DATE(criado_em) >= CURDATE() - INTERVAL 7 DAY THEN 1 END) AS novos_clientes_semana,  -- Clientes criados na última semana\n        WEEK(criado_em) AS semana,\n        YEAR(criado_em) AS ano\n    FROM clientes\n    GROUP BY YEAR(criado_em), WEEK(criado_em)\n),\nComparacao AS (\n    SELECT \n        (SELECT COUNT(*) FROM clientes) AS total_clientes,  -- Total de clientes em toda a base\n        c1.novos_clientes_mes AS novos_clientes,\n        c2.novos_clientes_mes AS novos_clientes_mes_passado,\n        c3.novos_clientes_semana AS novos_clientes_semana_atual,\n        c4.novos_clientes_semana AS novos_clientes_semana_passada\n    FROM Clientes_Meses c1\n    LEFT JOIN Clientes_Meses c2 ON c1.mes = c2.mes + 1 AND c1.ano = c2.ano  -- Mes anterior\n    LEFT JOIN Clientes_Semanas c3 ON c1.ano = c3.ano AND c1.mes = MONTH(DATE_ADD(CURRENT_DATE, INTERVAL 1 WEEK))  -- Semana atual\n    LEFT JOIN Clientes_Semanas c4 ON c3.semana = c4.semana + 1 AND c3.ano = c4.ano  -- Semana passada\n)\nSELECT \n    total_clientes,\n    novos_clientes,\n    CASE \n        WHEN novos_clientes_mes_passado = 0 THEN 'Não houve clientes no mês passado.'  -- Se não houver dados do mês passado\n        WHEN novos_clientes > novos_clientes_mes_passado THEN CONCAT('O número de novos clientes aumentou em ', ROUND((novos_clientes - novos_clientes_mes_passado) * 100.0 / novos_clientes_mes_passado, 2), '% em relação ao mês passado.')\n        WHEN novos_clientes < novos_clientes_mes_passado THEN CONCAT('O número de novos clientes diminuiu em ', ROUND((novos_clientes_mes_passado - novos_clientes) * 100.0 / novos_clientes_mes_passado, 2), '% em relação ao mês passado.')\n        ELSE 'O número de novos clientes se manteve igual ao mês passado.'\n    END AS mensagem_percentual_clientes_novos,\n    CASE \n        WHEN novos_clientes_semana_passada = 0 THEN 'Não houve clientes na semana passada.'  -- Se não houver dados da semana passada\n        WHEN novos_clientes_semana_atual > novos_clientes_semana_passada THEN CONCAT('O número de novos clientes aumentou em ', ROUND((novos_clientes_semana_atual - novos_clientes_semana_passada) * 100.0 / novos_clientes_semana_passada, 2), '% em relação à semana passada.')\n        WHEN novos_clientes_semana_atual < novos_clientes_semana_passada THEN CONCAT('O número de novos clientes diminuiu em ', ROUND((novos_clientes_semana_passada - novos_clientes_semana_atual) * 100.0 / novos_clientes_semana_passada, 2), '% em relação à semana passada.')\n        ELSE 'O número de novos clientes se manteve igual à semana passada.'\n    END AS mensagem_percentual_clientes_novos_semana\nFROM Comparacao;\n",
          "params": []
        }
      },
      "output": true,
      "meta": [
        {
          "name": "total_clientes",
          "type": "text"
        },
        {
          "name": "novos_clientes",
          "type": "text"
        },
        {
          "name": "mensagem_percentual_clientes_novos",
          "type": "text"
        },
        {
          "name": "mensagem_percentual_clientes_novos_semana",
          "type": "text"
        }
      ],
      "type": "dbcustom_query"
    }
  }
}
JSON
);
?>