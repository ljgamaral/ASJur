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
      "name": "percentual_estados_clientes",
      "module": "dbupdater",
      "action": "custom",
      "options": {
        "connection": "asj",
        "sql": {
          "query": "SELECT \n    total_estados_atual,\n    total_estados_anterior,\n    CASE \n        WHEN total_estados_atual > total_estados_anterior THEN\n            CONCAT('+', total_estados_atual - total_estados_anterior, ' este mês')\n        WHEN total_estados_atual < total_estados_anterior THEN\n            CONCAT('-', total_estados_anterior - total_estados_atual, ' este mês')\n        ELSE\n            CONCAT('Sem variação comparado ao mês passado)')\n    END AS mensagem\nFROM (\n    SELECT \n        (SELECT COUNT(DISTINCT uf) FROM clientes WHERE criado_em >= DATE_FORMAT(NOW() - INTERVAL 1 MONTH, '%Y-%m-01')) AS total_estados_atual,\n        (SELECT COUNT(DISTINCT uf) FROM clientes WHERE criado_em >= DATE_FORMAT(NOW() - INTERVAL 2 MONTH, '%Y-%m-01') \n         AND criado_em < DATE_FORMAT(NOW() - INTERVAL 1 MONTH, '%Y-%m-01')) AS total_estados_anterior\n) AS dados\n",
          "params": []
        }
      },
      "output": true,
      "meta": [
        {
          "name": "total_estados_atual",
          "type": "text"
        },
        {
          "name": "total_estados_anterior",
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