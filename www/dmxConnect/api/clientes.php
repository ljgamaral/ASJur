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
        "name": "limit"
      },
      {
        "type": "text",
        "name": "offset"
      }
    ]
  },
  "exec": {
    "steps": {
      "name": "query",
      "module": "dbconnector",
      "action": "paged",
      "options": {
        "connection": "asj",
        "sql": {
          "type": "select",
          "columns": [
            {
              "table": "clientes",
              "column": "*",
              "recid": 1
            }
          ],
          "params": [],
          "table": {
            "name": "clientes"
          },
          "primary": "id",
          "joins": [],
          "query": "select * from `clientes`"
        }
      },
      "output": true,
      "meta": [
        {
          "name": "offset",
          "type": "number"
        },
        {
          "name": "limit",
          "type": "number"
        },
        {
          "name": "total",
          "type": "number"
        },
        {
          "name": "page",
          "type": "object",
          "sub": [
            {
              "name": "offset",
              "type": "object",
              "sub": [
                {
                  "name": "first",
                  "type": "number"
                },
                {
                  "name": "prev",
                  "type": "number"
                },
                {
                  "name": "next",
                  "type": "number"
                },
                {
                  "name": "last",
                  "type": "number"
                }
              ]
            },
            {
              "name": "current",
              "type": "number"
            },
            {
              "name": "total",
              "type": "number"
            }
          ]
        },
        {
          "name": "data",
          "type": "array",
          "sub": [
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
          ]
        }
      ],
      "type": "dbconnector_paged_select",
      "outputType": "object"
    }
  }
}
JSON
);
?>