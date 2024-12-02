<?php
require('../../dmxConnectLib/dmxConnect.php');


$app = new \lib\App();

$app->define(<<<'JSON'
{
  "meta": {
    "$_POST": [
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
      },
      {
        "type": "text",
        "name": "id"
      }
    ]
  },
  "exec": {
    "steps": {
      "name": "update",
      "module": "dbupdater",
      "action": "update",
      "options": {
        "connection": "asj",
        "sql": {
          "type": "update",
          "values": [
            {
              "table": "processos",
              "column": "slug",
              "type": "text",
              "value": "{{$_POST.slug}}"
            },
            {
              "table": "processos",
              "column": "arquivo_importacao",
              "type": "text",
              "value": "{{$_POST.arquivo_importacao}}"
            },
            {
              "table": "processos",
              "column": "id_cliente",
              "type": "number",
              "value": "{{$_POST.id_cliente}}"
            },
            {
              "table": "processos",
              "column": "processo",
              "type": "text",
              "value": "{{$_POST.processo}}"
            },
            {
              "table": "processos",
              "column": "descricao",
              "type": "text",
              "value": "{{$_POST.descricao}}"
            },
            {
              "table": "processos",
              "column": "status",
              "type": "text",
              "value": "{{$_POST.status}}"
            },
            {
              "table": "processos",
              "column": "data_distribuicao",
              "type": "text",
              "value": "{{$_POST.data_distribuicao}}"
            },
            {
              "table": "processos",
              "column": "data_conclusao",
              "type": "text",
              "value": "{{$_POST.data_conclusao}}"
            },
            {
              "table": "processos",
              "column": "ultimo_andamento",
              "type": "text",
              "value": "{{$_POST.ultimo_andamento}}"
            },
            {
              "table": "processos",
              "column": "penultimo_andamento",
              "type": "text",
              "value": "{{$_POST.penultimo_andamento}}"
            },
            {
              "table": "processos",
              "column": "justica",
              "type": "text",
              "value": "{{$_POST.justica}}"
            },
            {
              "table": "processos",
              "column": "comarca",
              "type": "text",
              "value": "{{$_POST.comarca}}"
            },
            {
              "table": "processos",
              "column": "vara",
              "type": "text",
              "value": "{{$_POST.vara}}"
            },
            {
              "table": "processos",
              "column": "tese",
              "type": "text",
              "value": "{{$_POST.tese}}"
            },
            {
              "table": "processos",
              "column": "autor",
              "type": "text",
              "value": "{{$_POST.autor}}"
            },
            {
              "table": "processos",
              "column": "reu",
              "type": "text",
              "value": "{{$_POST.reu}}"
            },
            {
              "table": "processos",
              "column": "id_clickup",
              "type": "number",
              "value": "{{$_POST.id_clickup}}"
            },
            {
              "table": "processos",
              "column": "url",
              "type": "text",
              "value": "{{$_POST.url}}"
            },
            {
              "table": "processos",
              "column": "criado_em",
              "type": "datetime",
              "value": "{{$_POST.criado_em}}"
            }
          ],
          "table": "processos",
          "wheres": {
            "condition": "AND",
            "rules": [
              {
                "id": "id",
                "type": "string",
                "operator": "equal",
                "value": "{{$_POST.id}}",
                "data": {
                  "column": "id"
                },
                "operation": "="
              }
            ]
          },
          "returning": "id",
          "query": "update `processos` set `slug` = ?, `arquivo_importacao` = ?, `id_cliente` = ?, `processo` = ?, `descricao` = ?, `status` = ?, `data_distribuicao` = ?, `data_conclusao` = ?, `ultimo_andamento` = ?, `penultimo_andamento` = ?, `justica` = ?, `comarca` = ?, `vara` = ?, `tese` = ?, `autor` = ?, `reu` = ?, `id_clickup` = ?, `url` = ?, `criado_em` = ? where `id` = ?",
          "params": [
            {
              "name": ":P1",
              "type": "expression",
              "value": "{{$_POST.slug}}",
              "test": ""
            },
            {
              "name": ":P2",
              "type": "expression",
              "value": "{{$_POST.arquivo_importacao}}",
              "test": ""
            },
            {
              "name": ":P3",
              "type": "expression",
              "value": "{{$_POST.id_cliente}}",
              "test": ""
            },
            {
              "name": ":P4",
              "type": "expression",
              "value": "{{$_POST.processo}}",
              "test": ""
            },
            {
              "name": ":P5",
              "type": "expression",
              "value": "{{$_POST.descricao}}",
              "test": ""
            },
            {
              "name": ":P6",
              "type": "expression",
              "value": "{{$_POST.status}}",
              "test": ""
            },
            {
              "name": ":P7",
              "type": "expression",
              "value": "{{$_POST.data_distribuicao}}",
              "test": ""
            },
            {
              "name": ":P8",
              "type": "expression",
              "value": "{{$_POST.data_conclusao}}",
              "test": ""
            },
            {
              "name": ":P9",
              "type": "expression",
              "value": "{{$_POST.ultimo_andamento}}",
              "test": ""
            },
            {
              "name": ":P10",
              "type": "expression",
              "value": "{{$_POST.penultimo_andamento}}",
              "test": ""
            },
            {
              "name": ":P11",
              "type": "expression",
              "value": "{{$_POST.justica}}",
              "test": ""
            },
            {
              "name": ":P12",
              "type": "expression",
              "value": "{{$_POST.comarca}}",
              "test": ""
            },
            {
              "name": ":P13",
              "type": "expression",
              "value": "{{$_POST.vara}}",
              "test": ""
            },
            {
              "name": ":P14",
              "type": "expression",
              "value": "{{$_POST.tese}}",
              "test": ""
            },
            {
              "name": ":P15",
              "type": "expression",
              "value": "{{$_POST.autor}}",
              "test": ""
            },
            {
              "name": ":P16",
              "type": "expression",
              "value": "{{$_POST.reu}}",
              "test": ""
            },
            {
              "name": ":P17",
              "type": "expression",
              "value": "{{$_POST.id_clickup}}",
              "test": ""
            },
            {
              "name": ":P18",
              "type": "expression",
              "value": "{{$_POST.url}}",
              "test": ""
            },
            {
              "name": ":P19",
              "type": "expression",
              "value": "{{$_POST.criado_em}}",
              "test": ""
            },
            {
              "operator": "equal",
              "type": "expression",
              "name": ":P20",
              "value": "{{$_POST.id}}",
              "test": ""
            }
          ]
        }
      },
      "meta": [
        {
          "name": "affected",
          "type": "number"
        }
      ]
    }
  }
}
JSON
);
?>