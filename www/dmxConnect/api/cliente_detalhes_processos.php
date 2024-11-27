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
        "name": "id_cliente"
      }
    ]
  },
  "exec": {
    "steps": {
      "name": "cliente_detalhes_processos",
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
              "column": "id_cliente"
            },
            {
              "table": "processos",
              "column": "slug"
            },
            {
              "table": "processos",
              "column": "descricao"
            },
            {
              "table": "processos",
              "column": "status"
            },
            {
              "table": "processos",
              "column": "ultimo_andamento"
            },
            {
              "table": "processos",
              "column": "autor"
            },
            {
              "table": "processos",
              "column": "id_clickup"
            }
          ],
          "params": [
            {
              "operator": "equal",
              "type": "expression",
              "name": ":P1",
              "value": "{{$_GET.id_cliente}}",
              "test": "1"
            }
          ],
          "table": {
            "name": "processos"
          },
          "primary": "id",
          "joins": [],
          "wheres": {
            "condition": "AND",
            "rules": [
              {
                "id": "processos.id_cliente",
                "field": "processos.id_cliente",
                "type": "double",
                "operator": "equal",
                "value": "{{$_GET.id_cliente}}",
                "data": {
                  "table": "processos",
                  "column": "id_cliente",
                  "type": "number",
                  "columnObj": {
                    "type": "bigInteger",
                    "primary": false,
                    "nullable": false,
                    "name": "id_cliente"
                  }
                },
                "operation": "="
              }
            ],
            "conditional": null,
            "valid": true
          },
          "query": "select `id`, `id_cliente`, `slug`, `descricao`, `status`, `ultimo_andamento`, `autor`, `id_clickup` from `processos` where `processos`.`id_cliente` = ?"
        }
      },
      "output": true,
      "meta": [
        {
          "type": "text",
          "name": "id"
        },
        {
          "type": "number",
          "name": "id_cliente"
        },
        {
          "type": "text",
          "name": "slug"
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
          "name": "ultimo_andamento"
        },
        {
          "type": "text",
          "name": "autor"
        },
        {
          "type": "number",
          "name": "id_clickup"
        }
      ],
      "outputType": "array"
    }
  }
}
JSON
);
?>