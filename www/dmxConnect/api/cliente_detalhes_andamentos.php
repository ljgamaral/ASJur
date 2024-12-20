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
      "name": "query",
      "module": "dbconnector",
      "action": "select",
      "options": {
        "connection": "asj",
        "sql": {
          "type": "select",
          "columns": [
            {
              "table": "andamentos",
              "column": "*"
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
            "name": "andamentos"
          },
          "primary": "id",
          "joins": [],
          "wheres": {
            "condition": "AND",
            "rules": [
              {
                "id": "andamentos.id_cliente",
                "field": "andamentos.id_cliente",
                "type": "double",
                "operator": "equal",
                "value": "{{$_GET.id_cliente}}",
                "data": {
                  "table": "andamentos",
                  "column": "id_cliente",
                  "type": "number",
                  "columnObj": {
                    "type": "bigInteger",
                    "primary": false,
                    "nullable": false,
                    "name": "id_cliente"
                  }
                },
                "operation": "=",
                "table": "andamentos"
              }
            ],
            "conditional": null,
            "valid": true
          },
          "query": "select * from `andamentos` where `andamentos`.`id_cliente` = ?"
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
          "type": "text",
          "name": "processo"
        },
        {
          "type": "number",
          "name": "id_subprocesso"
        },
        {
          "type": "text",
          "name": "andamento"
        },
        {
          "type": "text",
          "name": "descricao"
        },
        {
          "type": "text",
          "name": "data"
        },
        {
          "type": "text",
          "name": "status"
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