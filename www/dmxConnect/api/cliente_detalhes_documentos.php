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
      "name": "cliente_detalhes_documentos",
      "module": "dbconnector",
      "action": "select",
      "options": {
        "connection": "asj",
        "sql": {
          "type": "select",
          "columns": [
            {
              "table": "documentos",
              "column": "*"
            }
          ],
          "params": [
            {
              "operator": "equal",
              "type": "expression",
              "name": ":P1",
              "value": "{{$_GET.id_cliente}}",
              "test": ""
            }
          ],
          "table": {
            "name": "documentos"
          },
          "primary": "id",
          "joins": [],
          "query": "select * from `documentos` where `documentos`.`id_cliente` = ?",
          "wheres": {
            "condition": "AND",
            "rules": [
              {
                "id": "documentos.id_cliente",
                "field": "documentos.id_cliente",
                "type": "double",
                "operator": "equal",
                "value": "{{$_GET.id_cliente}}",
                "data": {
                  "table": "documentos",
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
          }
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
          "type": "number",
          "name": "id_cliente"
        },
        {
          "type": "number",
          "name": "id_processo"
        },
        {
          "type": "text",
          "name": "nome"
        },
        {
          "type": "text",
          "name": "tipo"
        },
        {
          "type": "text",
          "name": "descricao"
        },
        {
          "type": "text",
          "name": "arquivo"
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