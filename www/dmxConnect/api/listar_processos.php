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
      },
      {
        "type": "text",
        "name": "pesquisa"
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
          "query": "SELECT \n    p.*, \n    (SELECT COUNT(*) \n     FROM processos p2\n     WHERE \n        (:status = '' OR (p2.status = '' AND p2.status IS NULL) OR p2.status = :status)\n        AND (\n            p2.processo LIKE CONCAT('%', :pesquisa, '%')   \n            OR p2.justica LIKE CONCAT('%', :pesquisa, '%')    \n            OR p2.ultimo_andamento LIKE CONCAT('%', :pesquisa, '%')\n            OR p2.status LIKE CONCAT('%', :pesquisa, '%')\n        )\n    ) AS total\nFROM processos p\nWHERE \n    (:status = '' OR (p.status = '' AND p.status IS NULL) OR p.status = :status)\n    AND (\n        p.processo LIKE CONCAT('%', :pesquisa, '%')   \n        OR p.justica LIKE CONCAT('%', :pesquisa, '%')    \n        OR p.ultimo_andamento LIKE CONCAT('%', :pesquisa, '%')\n        OR p.status LIKE CONCAT('%', :pesquisa, '%')\n    )\nLIMIT :limit OFFSET :offset;",
          "params": [
            {
              "name": ":status",
              "value": "{{$_GET.status}}",
              "test": ""
            },
            {
              "name": ":limit",
              "value": "{{$_GET.limit}}",
              "test": ""
            },
            {
              "name": ":offset",
              "value": "{{$_GET.offset}}"
            },
            {
              "name": ":pesquisa",
              "value": "{{$_GET.pesquisa}}"
            },
            {
              "name": ":sort",
              "value": "{{$_GET.sort}}",
              "test": "processo"
            },
            {
              "name": ":dir",
              "value": "{{$_GET.dir}}",
              "test": "asc"
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
      "type": "dbcustom_query",
      "outputType": "array"
    }
  }
}
JSON
);
?>