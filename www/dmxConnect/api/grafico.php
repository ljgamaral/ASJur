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
          "query": "SELECT \n    DATE_FORMAT(criado_em, '%Y-%m') AS mes,\n    COUNT(CASE WHEN tabela = 'clientes' THEN 1 END) AS clientes_novos,\n    COUNT(CASE WHEN tabela = 'andamentos' THEN 1 END) AS andamentos_novos\nFROM (\n    SELECT 'clientes' AS tabela, criado_em FROM clientes\n    UNION ALL\n    SELECT 'andamentos' AS tabela, criado_em FROM andamentos\n) dados\nWHERE criado_em >= DATE_SUB(CURDATE(), INTERVAL 1 YEAR)\nGROUP BY mes\nORDER BY mes;\n",
          "params": []
        }
      },
      "output": true,
      "meta": [
        {
          "name": "mes",
          "type": "date"
        },
        {
          "name": "clientes_novos",
          "type": "number"
        },
        {
          "name": "andamentos_novos",
          "type": "number"
        }
      ],
      "type": "dbcustom_query"
    }
  }
}
JSON
);
?>