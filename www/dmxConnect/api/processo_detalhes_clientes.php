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
              "table": "clientes",
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
            "name": "clientes"
          },
          "primary": "id",
          "joins": [],
          "wheres": {
            "condition": "AND",
            "rules": [
              {
                "id": "clientes.id",
                "field": "clientes.id",
                "type": "string",
                "operator": "equal",
                "value": "{{$_GET.id_cliente}}",
                "data": {
                  "table": "clientes",
                  "column": "id",
                  "type": "text",
                  "columnObj": {
                    "type": "bigIncrements",
                    "primary": true,
                    "nullable": false,
                    "name": "id"
                  }
                },
                "operation": "="
              }
            ],
            "conditional": null,
            "valid": true
          },
          "query": "select * from `clientes` where `clientes`.`id` = ?"
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
          "name": "id_crm"
        },
        {
          "type": "text",
          "name": "tipo"
        },
        {
          "type": "text",
          "name": "nome"
        },
        {
          "type": "text",
          "name": "responsavel"
        },
        {
          "type": "text",
          "name": "endereco"
        },
        {
          "type": "text",
          "name": "bairro"
        },
        {
          "type": "number",
          "name": "cep"
        },
        {
          "type": "text",
          "name": "cidade"
        },
        {
          "type": "text",
          "name": "uf"
        },
        {
          "type": "text",
          "name": "departamento"
        },
        {
          "type": "date",
          "name": "data_nascimento"
        },
        {
          "type": "text",
          "name": "rg"
        },
        {
          "type": "text",
          "name": "cpf"
        },
        {
          "type": "text",
          "name": "estado_civil"
        },
        {
          "type": "text",
          "name": "profissao"
        },
        {
          "type": "text",
          "name": "sexo"
        },
        {
          "type": "text",
          "name": "filiacao"
        },
        {
          "type": "text",
          "name": "celular"
        },
        {
          "type": "text",
          "name": "origem"
        },
        {
          "type": "text",
          "name": "captador"
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