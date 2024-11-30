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
      "name": "percentual_andamentos",
      "module": "dbupdater",
      "action": "custom",
      "options": {
        "connection": "asj",
        "sql": {
          "query": "WITH Semanas AS (\n    SELECT \n        YEARWEEK(criado_em, 1) AS semana, -- Agrupa por semanas (ano e semana ISO)\n        COUNT(*) AS total_andamentos\n    FROM \n        andamentos\n    GROUP BY \n        YEARWEEK(criado_em, 1)\n),\nComparacao AS (\n    SELECT \n        semana,\n        total_andamentos,\n        LAG(total_andamentos) OVER (ORDER BY semana) AS andamentos_semana_passada\n    FROM \n        Semanas\n)\nSELECT \n    semana,\n    total_andamentos,\n    andamentos_semana_passada,\n    CASE \n        WHEN andamentos_semana_passada = 0 THEN NULL\n        WHEN andamentos_semana_passada IS NULL THEN NULL\n        ELSE ROUND(\n            (total_andamentos - andamentos_semana_passada) * 100.0 / andamentos_semana_passada, \n            2\n        )\n    END AS variacao_percentual,\n    CASE \n        WHEN andamentos_semana_passada = 0 THEN 'Sem base para comparação (0 andamentos na semana passada)'\n        WHEN andamentos_semana_passada IS NULL THEN 'Sem dados da semana passada'\n        WHEN total_andamentos > andamentos_semana_passada THEN CONCAT('+', ROUND((total_andamentos - andamentos_semana_passada) * 100.0 / andamentos_semana_passada, 2), '% de aumento')\n        WHEN total_andamentos < andamentos_semana_passada THEN CONCAT(ROUND((total_andamentos - andamentos_semana_passada) * 100.0 / andamentos_semana_passada, 2), '% de redução')\n        ELSE 'Sem variação'\n    END AS mensagem\nFROM \n    Comparacao\nORDER BY \n    semana DESC\nLIMIT 1;\n",
          "params": []
        }
      },
      "output": true,
      "meta": [
        {
          "name": "semana",
          "type": "number"
        },
        {
          "name": "total_andamentos",
          "type": "text"
        },
        {
          "name": "andamentos_semana_passada",
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