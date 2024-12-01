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
      "name": "query",
      "module": "dbupdater",
      "action": "custom",
      "options": {
        "connection": "asj",
        "sql": {
          "query": "SELECT \n    COUNT(*) AS total_processos,\n    COUNT(CASE WHEN status = 'em andamento' THEN 1 END) AS processos_em_andamento,\n    COUNT(CASE WHEN status = 'arquivado' THEN 1 END) AS processos_arquivados\nFROM \n    processos;\n",
          "params": []
        }
      },
      "output": true,
      "meta": [
        {
          "name": "total_processos",
          "type": "text"
        },
        {
          "name": "processos_em_andamento",
          "type": "text"
        },
        {
          "name": "processos_arquivados",
          "type": "text"
        }
      ],
      "type": "dbcustom_query"
    }
  }
}
JSON
);
?>