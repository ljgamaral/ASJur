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
          "query": "SELECT \n    COUNT(*) AS total_clientes, \n    COUNT(CASE \n              WHEN DATE(criado_em) >= CURDATE() - INTERVAL 7 DAY THEN 1 \n          END) AS novos_clientes \nFROM clientes;\n",
          "params": []
        }
      },
      "output": true,
      "meta": [
        {
          "name": "total_clientes",
          "type": "number"
        },
        {
          "name": "novos_clientes",
          "type": "number"
        }
      ],
      "outputType": "array",
      "type": "dbcustom_query"
    }
  }
}
JSON
);
?>