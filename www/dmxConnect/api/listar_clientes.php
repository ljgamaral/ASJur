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
          "query": "WITH Clientes_Meses AS (\n    SELECT \n        COUNT(*) AS total_clientes_mes_atual -- Total de clientes no mês atual\n    FROM clientes\n    WHERE MONTH(criado_em) = MONTH(CURDATE()) AND YEAR(criado_em) = YEAR(CURDATE())\n),\nClientes_Meses_Passados AS (\n    SELECT \n        COUNT(*) AS total_clientes_mes_passado -- Total de clientes no mês passado\n    FROM clientes\n    WHERE MONTH(criado_em) = MONTH(CURDATE() - INTERVAL 1 MONTH) AND YEAR(criado_em) = YEAR(CURDATE() - INTERVAL 1 MONTH)\n),\nClientes_Semanas AS (\n    SELECT \n        COUNT(*) AS total_clientes_semana_atual -- Total de clientes na semana atual\n    FROM clientes\n    WHERE WEEK(criado_em, 1) = WEEK(CURDATE(), 1) AND YEAR(criado_em) = YEAR(CURDATE())\n),\nClientes_Semanas_Passadas AS (\n    SELECT \n        COUNT(*) AS total_clientes_semana_passada -- Total de clientes na semana passada\n    FROM clientes\n    WHERE WEEK(criado_em, 1) = WEEK(CURDATE() - INTERVAL 7 DAY, 1) AND YEAR(criado_em) = YEAR(CURDATE() - INTERVAL 7 DAY)\n)\nSELECT \n    (SELECT COUNT(*) FROM clientes) AS total_clientes, -- Total de clientes no banco\n    (SELECT total_clientes_semana_atual FROM Clientes_Semanas) AS novos_clientes_semana, -- Novos clientes na semana atual\n    CASE \n        WHEN (SELECT total_clientes_mes_passado FROM Clientes_Meses_Passados) = 0 THEN 'Sem dados para comparar'\n        ELSE CONCAT(\n            ROUND(\n                (\n                    (SELECT total_clientes_mes_atual FROM Clientes_Meses) - \n                    (SELECT total_clientes_mes_passado FROM Clientes_Meses_Passados)\n                ) * 100.0 / \n                (SELECT total_clientes_mes_passado FROM Clientes_Meses_Passados),\n                2\n            ),\n            '% este mês'\n        )\n    END AS mensagem_variacao_total_mensal, -- Mensagem sobre a variação total de clientes no mês\n    CASE \n        WHEN (SELECT total_clientes_semana_passada FROM Clientes_Semanas_Passadas) = 0 THEN 'Sem dados para comparar'\n        ELSE CONCAT(\n            ROUND(\n                (\n                    (SELECT total_clientes_semana_atual FROM Clientes_Semanas) - \n                    (SELECT total_clientes_semana_passada FROM Clientes_Semanas_Passadas)\n                ) * 100.0 / \n                (SELECT total_clientes_semana_passada FROM Clientes_Semanas_Passadas),\n                2\n            ),\n            '% esta semana'\n        )\n    END AS mensagem_variacao_clientes_novos_semanal -- Mensagem sobre a variação de novos clientes na semana\n;\n",
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
          "name": "novos_clientes_semana",
          "type": "text"
        },
        {
          "name": "mensagem_variacao_total_mensal",
          "type": "text"
        },
        {
          "name": "mensagem_variacao_clientes_novos_semanal",
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