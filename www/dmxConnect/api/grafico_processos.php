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
          "query": "WITH StatusLista AS (\n    SELECT 'ativo' AS status\n    UNION ALL\n    SELECT 'em andamento'\n    UNION ALL\n    SELECT 'arquivado'\n    UNION ALL\n    SELECT 'pendente'\n    UNION ALL\n    SELECT 'concluído'\n    UNION ALL\n    SELECT 'cancelado'\n)\nSELECT \n    sl.status,\n    COALESCE(COUNT(p.status), 0) AS quantidade\nFROM StatusLista sl\nLEFT JOIN processos p\nON sl.status = p.status\nGROUP BY sl.status\nORDER BY sl.status;\n",
          "params": []
        }
      },
      "output": true,
      "meta": [
        {
          "name": "status",
          "type": "text"
        },
        {
          "name": "quantidade",
          "type": "text"
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