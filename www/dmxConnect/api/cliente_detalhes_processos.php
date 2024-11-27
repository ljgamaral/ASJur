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
                "operation": "=",
                "table": "processos"
              }
            ],
            "conditional": null,
            "valid": true
          },
          "query": "select * from `processos` where `processos`.`id_cliente` = ?"
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