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
      "name": "calcula_percentual_mensal_clientes",
      "module": "dbupdater",
      "action": "custom",
      "options": {
        "connection": "asj",
        "sql": {
          "query": "WITH Meses AS (\n    SELECT \n        DATE_FORMAT(criado_em, '%Y-%m-01') AS mes,\n        COUNT(*) AS total_clientes\n    FROM \n        clientes\n    GROUP BY \n        DATE_FORMAT(criado_em, '%Y-%m-01')\n),\nComparacao AS (\n    SELECT \n        mes,\n        total_clientes,\n        LAG(total_clientes) OVER (ORDER BY mes) AS clientes_mes_anterior\n    FROM \n        Meses\n)\nSELECT \n    mes,\n    total_clientes,\n    clientes_mes_anterior,\n    CASE \n        WHEN clientes_mes_anterior = 0 THEN NULL\n        WHEN clientes_mes_anterior IS NULL THEN NULL\n        ELSE ROUND(\n            (total_clientes - clientes_mes_anterior) * 100.0 / clientes_mes_anterior, \n            2\n        )\n    END AS variacao_percentual,\n    CASE \n        WHEN clientes_mes_anterior = 0 THEN 'Sem base para comparação (0 clientes no mês anterior)'\n        WHEN clientes_mes_anterior IS NULL THEN 'Sem dados do mês anterior'\n        WHEN total_clientes > clientes_mes_anterior THEN CONCAT('+', ROUND((total_clientes - clientes_mes_anterior) * 100.0 / clientes_mes_anterior, 2), '% de aumento')\n        WHEN total_clientes < clientes_mes_anterior THEN CONCAT(ROUND((total_clientes - clientes_mes_anterior) * 100.0 / clientes_mes_anterior, 2), '% de redução')\n        ELSE 'Sem variação'\n    END AS mensagem\nFROM \n    Comparacao\nORDER BY \n    mes DESC\nLIMIT 1;\n",
          "params": []
        }
      },
      "output": true,
      "meta": [
        {
          "name": "mes",
          "type": "text"
        },
        {
          "name": "total_clientes",
          "type": "text"
        },
        {
          "name": "clientes_mes_anterior",
          "type": "text"
        },
        {
          "name": "variacao_percentual",
          "type": "text"
        },
        {
          "name": "mensagem",
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