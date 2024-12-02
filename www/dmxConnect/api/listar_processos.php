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
        "name": "status"
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
      "name": "listar_processos",
      "module": "dbupdater",
      "action": "custom",
      "options": {
        "connection": "asj",
        "sql": {
          "query": "SELECT * \nFROM `processos` \nWHERE \n    (:status = '' AND (`status` = '' OR `status` IS NULL)) \n    OR `status` = :status;\n",
          "params": [
            {
              "name": ":status",
              "value": "{{$_GET.status}}",
              "test": ""
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