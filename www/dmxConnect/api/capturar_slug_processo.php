<?php
require('../../dmxConnectLib/dmxConnect.php');


$app = new \lib\App();

$app->define(<<<'JSON'
{
  "meta": {
    "$_GET": [
      {
        "type": "text",
        "name": "slug"
      },
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
      "name": "query",
      "module": "dbconnector",
      "action": "select",
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
              "operator": "equal",
              "type": "expression",
              "name": ":P1",
              "value": "{{$_GET.slug}}",
              "test": "processolean"
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
                "id": "processos.slug",
                "field": "processos.slug",
                "type": "string",
                "operator": "equal",
                "value": "{{$_GET.slug}}",
                "data": {
                  "table": "processos",
                  "column": "slug",
                  "type": "text",
                  "columnObj": {
                    "type": "string",
                    "maxLength": 16,
                    "primary": false,
                    "nullable": false,
                    "name": "slug"
                  }
                },
                "operation": "="
              }
            ],
            "conditional": null,
            "valid": true
          },
          "query": "select * from `processos` where `processos`.`slug` = ?"
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
      ],
      "outputType": "array"
    }
  }
}
JSON
);
?>