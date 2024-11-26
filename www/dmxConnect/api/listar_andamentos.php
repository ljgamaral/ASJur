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
      "name": "listar_andamentos",
      "module": "dbupdater",
      "action": "custom",
      "options": {
        "connection": "asj",
        "sql": {
          "query": "SELECT \n    COUNT(*) AS total_andamentos, \n    COUNT(CASE \n              WHEN DATE(criado_em) >= CURDATE() - INTERVAL 7 DAY THEN 1 \n          END) AS andamentos_recentes\nFROM andamentos;\n",
          "params": []
        }
      },
      "output": true,
      "meta": [
        {
          "name": "total_andamentos",
          "type": "number"
        },
        {
          "name": "andamentos_recentes",
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