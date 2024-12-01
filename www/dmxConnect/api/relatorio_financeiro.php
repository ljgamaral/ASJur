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
          "params": [],
          "table": {
            "name": "financeiro"
          },
          "primary": "id",
          "joins": [],
          "query": "select * from `financeiro`"
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