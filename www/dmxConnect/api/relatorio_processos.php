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
      "name": "query_processos",
      "module": "dbupdater",
      "action": "custom",
      "options": {
        "connection": "asj",
        "sql": {
          "query": "SELECT \n    (SELECT COUNT(*) FROM processos WHERE status = 'ativo') AS quantidade_processos_ativos,\n    processos.*\nFROM processos;\n",
          "params": []
        }
      },
      "output": true,
      "meta": [
        {
          "name": "quantidade_processos_ativos",
          "type": "text"
        },
        {
          "name": "id",
          "type": "text"
        },
        {
          "name": "slug",
          "type": "text"
        },
        {
          "name": "arquivo_importacao",
          "type": "text"
        },
        {
          "name": "id_cliente",
          "type": "text"
        },
        {
          "name": "processo",
          "type": "text"
        },
        {
          "name": "descricao",
          "type": "file"
        },
        {
          "name": "status",
          "type": "text"
        },
        {
          "name": "data_distribuicao",
          "type": "text"
        },
        {
          "name": "data_conclusao",
          "type": "text"
        },
        {
          "name": "ultimo_andamento",
          "type": "file"
        },
        {
          "name": "penultimo_andamento",
          "type": "file"
        },
        {
          "name": "justica",
          "type": "text"
        },
        {
          "name": "comarca",
          "type": "text"
        },
        {
          "name": "vara",
          "type": "text"
        },
        {
          "name": "tese",
          "type": "file"
        },
        {
          "name": "autor",
          "type": "text"
        },
        {
          "name": "reu",
          "type": "text"
        },
        {
          "name": "id_clickup",
          "type": "text"
        },
        {
          "name": "url",
          "type": "file"
        },
        {
          "name": "criado_em",
          "type": "datetime"
        }
      ],
      "type": "dbcustom_query"
    }
  }
}
JSON
);
?>