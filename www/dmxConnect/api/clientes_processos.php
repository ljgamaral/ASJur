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
      "name": "clientes_totais_processos",
      "module": "dbupdater",
      "action": "custom",
      "options": {
        "connection": "asj",
        "sql": {
          "query": "SELECT \n    COUNT(DISTINCT c.id) AS total_clientes,\n    COUNT(DISTINCT CASE WHEN a.status = 'ativo' THEN c.id END) AS clientes_com_processo_ativo\nFROM \n    clientes c\nLEFT JOIN \n    andamentos a ON c.id = a.id_cliente;\n",
          "params": []
        }
      },
      "output": true,
      "meta": [
        {
          "name": "total_clientes",
          "type": "number"
        },
        {
          "name": "clientes_com_processo_ativo",
          "type": "number"
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