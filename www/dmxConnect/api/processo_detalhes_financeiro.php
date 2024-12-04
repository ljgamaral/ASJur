<?php
require('../../dmxConnectLib/dmxConnect.php');


$app = new \lib\App();

$app->define(<<<'JSON'
{
  "meta": {
    "$_GET": [
      {
        "type": "text",
        "name": "id_processo"
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
              "table": "financeiro",
              "column": "*"
            }
          ],
          "params": [
            {
              "operator": "equal",
              "type": "expression",
              "name": ":P1",
              "value": "{{$_GET.id_processo}}",
              "test": ""
            }
          ],
          "table": {
            "name": "financeiro"
          },
          "primary": "id",
          "joins": [],
          "wheres": {
            "condition": "AND",
            "rules": [
              {
                "id": "financeiro.id_processo",
                "field": "financeiro.id_processo",
                "type": "double",
                "operator": "equal",
                "value": "{{$_GET.id_processo}}",
                "data": {
                  "table": "financeiro",
                  "column": "id_processo",
                  "type": "number",
                  "columnObj": {
                    "type": "bigInteger",
                    "primary": false,
                    "nullable": false,
                    "name": "id_processo"
                  }
                },
                "operation": "="
              }
            ],
            "conditional": null,
            "valid": true
          },
          "query": "select * from `financeiro` where `financeiro`.`id_processo` = ?"
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
          "name": "id_processo"
        },
        {
          "type": "number",
          "name": "id_subprocesso"
        },
        {
          "type": "text",
          "name": "descricao"
        },
        {
          "type": "number",
          "name": "valor"
        },
        {
          "type": "date",
          "name": "data_vencimento"
        },
        {
          "type": "date",
          "name": "data_pagamento"
        },
        {
          "type": "text",
          "name": "status"
        },
        {
          "type": "datetime",
          "name": "criado_em"
        },
        {
          "type": "datetime",
          "name": "atualizado_em"
        }
      ],
      "outputType": "array"
    }
  }
}
JSON
);
?>