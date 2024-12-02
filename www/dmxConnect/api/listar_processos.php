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
      },
      {
        "type": "text",
        "name": "limit"
      },
      {
        "type": "text",
        "name": "offset"
      }
    ]
  },
  "exec": {
    "steps": {
      "name": "listar_processos",
      "module": "dbconnector",
      "action": "paged",
      "options": {
        "connection": "asj",
        "sql": {
          "type": "select",
          "columns": [
            {
              "table": "processos",
              "column": "*"
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
          "query": "select * from `processos` where `processos`.`status` like ?",
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
                "operation": "LIKE"
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
          "name": "offset",
          "type": "number"
        },
        {
          "name": "limit",
          "type": "number"
        },
        {
          "name": "total",
          "type": "number"
        },
        {
          "name": "page",
          "type": "object",
          "sub": [
            {
              "name": "offset",
              "type": "object",
              "sub": [
                {
                  "name": "first",
                  "type": "number"
                },
                {
                  "name": "prev",
                  "type": "number"
                },
                {
                  "name": "next",
                  "type": "number"
                },
                {
                  "name": "last",
                  "type": "number"
                }
              ]
            },
            {
              "name": "current",
              "type": "number"
            },
            {
              "name": "total",
              "type": "number"
            }
          ]
        },
        {
          "name": "data",
          "type": "array",
          "sub": [
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
              "name": "arquivo_importacao"
            },
            {
              "type": "number",
              "name": "id_cliente"
            },
            {
              "type": "text",
              "name": "processo"
            },
            {
              "type": "text",
              "name": "descricao"
            },
            {
              "type": "text",
              "name": "status"
            },
            {
              "type": "text",
              "name": "data_distribuicao"
            },
            {
              "type": "text",
              "name": "data_conclusao"
            },
            {
              "type": "text",
              "name": "ultimo_andamento"
            },
            {
              "type": "text",
              "name": "penultimo_andamento"
            },
            {
              "type": "text",
              "name": "justica"
            },
            {
              "type": "text",
              "name": "comarca"
            },
            {
              "type": "text",
              "name": "vara"
            },
            {
              "type": "text",
              "name": "tese"
            },
            {
              "type": "text",
              "name": "autor"
            },
            {
              "type": "text",
              "name": "reu"
            },
            {
              "type": "number",
              "name": "id_clickup"
            },
            {
              "type": "text",
              "name": "url"
            },
            {
              "type": "datetime",
              "name": "criado_em"
            }
          ]
        }
      ],
      "outputType": "object",
      "type": "dbconnector_paged_select"
    }
  }
}
JSON
);
?>