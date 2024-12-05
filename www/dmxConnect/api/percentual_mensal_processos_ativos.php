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
          "query": "WITH Meses AS (\n    SELECT \n        DATE_FORMAT(criado_em, '%Y-%m') AS mes,  -- Extrai o ano e o mês\n        SUM(CASE WHEN status = 'ativo' THEN 1 ELSE 0 END) AS processos_ativos  -- Contagem de processos ativos no mês\n    FROM \n        processos\n    WHERE\n        status = 'ativo'  -- Considera apenas processos com status 'ativo'\n    GROUP BY \n        DATE_FORMAT(criado_em, '%Y-%m')\n),\nComparacao AS (\n    SELECT \n        mes,\n        processos_ativos,\n        LAG(processos_ativos) OVER (ORDER BY mes) AS processos_ativos_mes_passado  -- Obtém o número de processos ativos do mês passado\n    FROM \n        Meses\n)\nSELECT \n    mes,\n    processos_ativos,\n    processos_ativos_mes_passado,\n    -- Cálculo de variação percentual para processos ativos\n    CASE \n        WHEN processos_ativos_mes_passado = 0 THEN NULL  -- Caso o mês anterior não tenha processos ativos\n        WHEN processos_ativos_mes_passado IS NULL THEN NULL  -- Caso não haja dados do mês anterior\n        ELSE ROUND(\n            (processos_ativos - processos_ativos_mes_passado) * 100.0 / processos_ativos_mes_passado, \n            2\n        )\n    END AS variacao_processos_ativos_percentual,\n    -- Mensagem para o percentual de variação de processos ativos\n    CASE \n        WHEN processos_ativos_mes_passado IS NULL THEN 'Sem dados do mês passado'\n        WHEN processos_ativos_mes_passado = 0 THEN 'Nenhum processo ativo no mês passado'\n        WHEN (processos_ativos - processos_ativos_mes_passado) * 100.0 / processos_ativos_mes_passado > 0 \n        THEN CONCAT('+', ROUND((processos_ativos - processos_ativos_mes_passado) * 100.0 / processos_ativos_mes_passado, 2), '% de aumento nos processos ativos')\n        WHEN (processos_ativos - processos_ativos_mes_passado) * 100.0 / processos_ativos_mes_passado < 0\n        THEN CONCAT(ROUND((processos_ativos - processos_ativos_mes_passado) * 100.0 / processos_ativos_mes_passado, 2), '% de redução nos processos ativos')\n        ELSE 'Nenhuma variação'\n    END AS mensagem_processos_ativos\nFROM \n    Comparacao\nORDER BY \n    mes DESC;  -- Ordena os resultados do mais recente para o mais antigo\n",
          "params": []
        }
      },
      "output": true,
      "meta": [
        {
          "name": "mes",
          "type": "text"
        },
        {
          "name": "processos_ativos",
          "type": "text"
        },
        {
          "name": "processos_ativos_mes_passado",
          "type": "text"
        },
        {
          "name": "variacao_processos_ativos_percentual",
          "type": "text"
        },
        {
          "name": "mensagem_processos_ativos",
          "type": "text"
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