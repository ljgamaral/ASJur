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
      },
      {
        "type": "text",
        "name": "status"
      }
    ]
  },
  "exec": {
    "steps": {
      "name": "listar_processos",
      "module": "dbconnector",
      "action": "select",
      "options": {
        "connection": "asj",
        "sql": {
          "type": "select",
          "columns": [
            {
              "table": "processos",
              "column": "id"
            },
            {
              "table": "processos",
              "column": "slug"
            },
            {
              "table": "processos",
              "column": "processo"
            },
            {
              "table": "processos",
              "column": "ultimo_andamento"
            },
            {
              "table": "processos",
              "column": "justica"
            },
            {
              "table": "processos",
              "column": "status"
            }
          ],
          "params": [
            {
              "operator": "contains",
              "type": "expression",
              "name": ":P1",
              "value": "{{$_GET.status}}",
              "test": ""
            }
          ],
          "table": {
            "name": "processos"
          },
          "primary": "id",
          "joins": [],
          "query": "select `id`, `slug`, `processo`, `ultimo_andamento`, `justica`, `status` from `processos` where `processos`.`status` like ?",
          "wheres": {
            "condition": "AND",
            "rules": [
              {
                "id": "processos.status",
                "field": "processos.status",
                "type": "string",
                "operator": "contains",
                "value": "{{$_GET.status}}",
                "data": {
                  "table": "processos",
                  "column": "status",
                  "type": "text",
                  "columnObj": {
                    "type": "string",
                    "maxLength": 16,
                    "primary": false,
                    "nullable": true,
                    "name": "status"
                  }
                },
                "operation": "LIKE",
                "table": "processos"
              }
            ],
            "conditional": null,
            "valid": true
          },
          "orders": []
        }
      },
      "output": true,
      "meta": [
        {
          "type": "text",
          "name": "id"
        },
        {
          "type": "text",
          "name": "slug"
        },
        {
          "type": "text",
          "name": "processo"
        },
        {
          "type": "text",
          "name": "ultimo_andamento"
        },
        {
          "type": "text",
          "name": "justica"
        },
        {
          "type": "text",
          "name": "status"
        }
      ],
      "outputType": "array"
    }
  }
}
JSON
);
?>