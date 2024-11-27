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
            }
          ],
          "params": [],
          "table": {
            "name": "processos"
          },
          "primary": "id",
          "joins": [],
          "query": "select `id`, `slug`, `processo`, `ultimo_andamento`, `justica` from `processos`"
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
        }
      ],
      "outputType": "array"
    }
  }
}
JSON
);
?>