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
              "table": "historico",
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
            "name": "historico"
          },
          "primary": "id",
          "joins": [],
          "wheres": {
            "condition": "AND",
            "rules": [
              {
                "id": "historico.id_cliente",
                "field": "historico.id_cliente",
                "type": "double",
                "operator": "equal",
                "value": "{{$_GET.id_cliente}}",
                "data": {
                  "table": "historico",
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
          "query": "select * from `historico` where `historico`.`id_cliente` = ?"
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
          "name": "descricao"
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