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
      "name": "conta_tarefas_pendentes",
      "module": "dbupdater",
      "action": "custom",
      "options": {
        "connection": "asj",
        "sql": {
          "query": "WITH Meses AS (\n    SELECT \n        DATE_FORMAT(criado_em, '%Y-%m') AS mes, -- Extrai o ano e o mês\n        COUNT(*) AS total_tarefas, -- Total de tarefas no mês\n        SUM(CASE WHEN status = 'pendente' THEN 1 ELSE 0 END) AS tarefas_pendentes -- Contagem de tarefas pendentes\n    FROM \n        tarefas\n    GROUP BY \n        DATE_FORMAT(criado_em, '%Y-%m')\n),\nComparacao AS (\n    SELECT \n        mes,\n        total_tarefas,\n        tarefas_pendentes,\n        LAG(total_tarefas) OVER (ORDER BY mes) AS total_tarefas_mes_passado,\n        LAG(tarefas_pendentes) OVER (ORDER BY mes) AS tarefas_pendentes_mes_passado\n    FROM \n        Meses\n)\nSELECT \n    mes,\n    total_tarefas,\n    tarefas_pendentes,\n    total_tarefas_mes_passado,\n    tarefas_pendentes_mes_passado,\n    -- Cálculo de variação percentual para total de tarefas\n    CASE \n        WHEN total_tarefas_mes_passado = 0 THEN NULL\n        WHEN total_tarefas_mes_passado IS NULL THEN NULL\n        ELSE ROUND(\n            (total_tarefas - total_tarefas_mes_passado) * 100.0 / total_tarefas_mes_passado, \n            2\n        )\n    END AS variacao_total_tarefas_percentual,\n    -- Cálculo de variação percentual para tarefas pendentes\n    CASE \n        WHEN tarefas_pendentes_mes_passado = 0 THEN NULL\n        WHEN tarefas_pendentes_mes_passado IS NULL THEN NULL\n        ELSE ROUND(\n            (tarefas_pendentes - tarefas_pendentes_mes_passado) * 100.0 / tarefas_pendentes_mes_passado, \n            2\n        )\n    END AS variacao_tarefas_pendentes_percentual,\n    -- Mensagem para o percentual de variação do total de tarefas\n    CASE \n        WHEN total_tarefas_mes_passado IS NULL THEN 'Sem dados do mês passado para comparação.'\n        WHEN total_tarefas_mes_passado = 0 THEN 'Nenhuma tarefa no mês passado para comparar.'\n        WHEN (total_tarefas - total_tarefas_mes_passado) * 100.0 / total_tarefas_mes_passado > 0 \n        THEN CONCAT('+', ROUND((total_tarefas - total_tarefas_mes_passado) * 100.0 / total_tarefas_mes_passado, 2), '% de aumento no total de tarefas.')\n        WHEN (total_tarefas - total_tarefas_mes_passado) * 100.0 / total_tarefas_mes_passado < 0\n        THEN CONCAT(ROUND((total_tarefas - total_tarefas_mes_passado) * 100.0 / total_tarefas_mes_passado, 2), '% de redução no total de tarefas.')\n        ELSE 'Nenhuma variação no total de tarefas.'\n    END AS mensagem_total_tarefas,\n    -- Mensagem para o percentual de variação das tarefas pendentes\n    CASE \n        WHEN tarefas_pendentes_mes_passado IS NULL THEN 'Sem dados do mês passado'\n        WHEN tarefas_pendentes_mes_passado = 0 THEN 'Nenhuma tarefa pendente no mês passado'\n        WHEN (tarefas_pendentes - tarefas_pendentes_mes_passado) * 100.0 / tarefas_pendentes_mes_passado > 0 \n        THEN CONCAT('+', ROUND((tarefas_pendentes - tarefas_pendentes_mes_passado) * 100.0 / tarefas_pendentes_mes_passado, 2), '% de aumento nas tarefas pendentes')\n        WHEN (tarefas_pendentes - tarefas_pendentes_mes_passado) * 100.0 / tarefas_pendentes_mes_passado < 0\n        THEN CONCAT(ROUND((tarefas_pendentes - tarefas_pendentes_mes_passado) * 100.0 / tarefas_pendentes_mes_passado, 2), '% de redução nas tarefas pendentes')\n        ELSE 'Nenhuma variação nas tarefas pendentes'\n    END AS mensagem_tarefas_pendentes\nFROM \n    Comparacao\nORDER BY \n    mes DESC\nLIMIT 1;\n",
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
          "name": "total_tarefas",
          "type": "text"
        },
        {
          "name": "tarefas_pendentes",
          "type": "text"
        },
        {
          "name": "total_tarefas_mes_passado",
          "type": "text"
        },
        {
          "name": "tarefas_pendentes_mes_passado",
          "type": "text"
        },
        {
          "name": "variacao_total_tarefas_percentual",
          "type": "text"
        },
        {
          "name": "variacao_tarefas_pendentes_percentual",
          "type": "text"
        },
        {
          "name": "mensagem_total_tarefas",
          "type": "text"
        },
        {
          "name": "mensagem_tarefas_pendentes",
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