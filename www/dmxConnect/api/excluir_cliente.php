<?php
require('../../dmxConnectLib/dmxConnect.php');


$app = new \lib\App();

$app->define(<<<'JSON'
{
  "meta": {
    "$_GET": [
      {
        "type": "text",
        "name": "id_cliente"
      }
    ]
  },
  "exec": {
    "steps": {
      "name": "delete",
      "module": "dbupdater",
      "action": "delete",
      "options": {
        "connection": "asj",
        "sql": {
          "type": "delete",
          "table": "clientes",
          "wheres": {
            "condition": "AND",
            "rules": [
              {
                "id": "id",
                "field": "id",
                "type": "string",
                "operator": "equal",
                "value": "{{$_GET.id_cliente}}",
                "data": {
                  "column": "id"
                },
                "operation": "="
              }
            ],
            "conditional": null,
            "valid": true
          },
          "returning": "id",
          "query": "delete from `clientes` where `id` = ?",
          "params": [
            {
              "operator": "equal",
              "type": "expression",
              "name": ":P1",
              "value": "{{$_GET.id_cliente}}",
              "test": ""
            }
          ]
        }
      },
      "meta": [
        {
          "name": "affected",
          "type": "number"
        }
      ]
    }
  }
}
JSON
);
?>