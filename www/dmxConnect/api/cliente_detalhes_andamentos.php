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
              "test": ""
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
                "operation": "="
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
          "type": "number",
          "name": "id_cliente"
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
          "type": "date",
          "name": "data"
        },
        {
          "type": "text",
          "name": "status"
        },
        {
          "type": "date",
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