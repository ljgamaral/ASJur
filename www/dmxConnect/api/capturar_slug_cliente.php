<?php
require('../../dmxConnectLib/dmxConnect.php');


$app = new \lib\App();

$app->define(<<<'JSON'
{
  "meta": {
    "$_GET": [
      {
        "type": "text",
        "name": "slug"
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
      "module": "dbupdater",
      "action": "custom",
      "options": {
        "connection": "asj",
        "sql": {
          "query": "SELECT * FROM clientes WHERE slug = :slug\n",
          "params": [
            {
              "name": ":slug",
              "value": "{{$_GET.slug}}",
              "test": "teste"
            }
          ]
        }
      },
      "output": true,
      "meta": [
        {
          "name": "id",
          "type": "text"
        },
        {
          "name": "slug",
          "type": "text"
        },
        {
          "name": "id_crm",
          "type": "number"
        },
        {
          "name": "tipo",
          "type": "text"
        },
        {
          "name": "nome",
          "type": "text"
        },
        {
          "name": "responsavel",
          "type": "text"
        },
        {
          "name": "endereco",
          "type": "text"
        },
        {
          "name": "bairro",
          "type": "text"
        },
        {
          "name": "cep",
          "type": "number"
        },
        {
          "name": "cidade",
          "type": "text"
        },
        {
          "name": "uf",
          "type": "text"
        },
        {
          "name": "departamento",
          "type": "text"
        },
        {
          "name": "data_nascimento",
          "type": "date"
        },
        {
          "name": "rg",
          "type": "text"
        },
        {
          "name": "cpf",
          "type": "text"
        },
        {
          "name": "estado_civil",
          "type": "text"
        },
        {
          "name": "profissao",
          "type": "text"
        },
        {
          "name": "sexo",
          "type": "text"
        },
        {
          "name": "filiacao",
          "type": "text"
        },
        {
          "name": "celular",
          "type": "text"
        },
        {
          "name": "origem",
          "type": "text"
        },
        {
          "name": "captador",
          "type": "text"
        },
        {
          "name": "criado_em",
          "type": "datetime"
        }
      ],
      "outputType": "array",
      "type": "dbcustom_query"
    }
  }
}
JSON
);
?>