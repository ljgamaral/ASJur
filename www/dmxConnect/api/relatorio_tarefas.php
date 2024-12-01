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
      "name": "query_tarefas",
      "module": "dbupdater",
      "action": "custom",
      "options": {
        "connection": "asj",
        "sql": {
          "query": "SELECT \n    (SELECT COUNT(*) FROM tarefas WHERE status = 'pendente') AS quantidade_tarefas_pendentes,\n    tarefas.*\nFROM tarefas;\n",
          "params": []
        }
      },
      "output": true,
      "meta": [
        {
          "name": "quantidade_tarefas_pendentes",
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
          "name": "id_cliente",
          "type": "text"
        },
        {
          "name": "id_processo",
          "type": "text"
        },
        {
          "name": "descricao",
          "type": "file"
        },
        {
          "name": "data",
          "type": "date"
        },
        {
          "name": "status",
          "type": "text"
        },
        {
          "name": "criado_em",
          "type": "date"
        }
      ],
      "type": "dbcustom_query"
    }
  }
}
JSON
);
?>