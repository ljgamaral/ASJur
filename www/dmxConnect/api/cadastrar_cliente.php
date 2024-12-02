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
        "type": "number",
        "name": "id_crm"
      },
      {
        "type": "text",
        "name": "tipo"
      },
      {
        "type": "text",
        "name": "nome"
      },
      {
        "type": "text",
        "name": "responsavel"
      },
      {
        "type": "text",
        "name": "endereco"
      },
      {
        "type": "text",
        "name": "bairro"
      },
      {
        "type": "number",
        "name": "cep"
      },
      {
        "type": "text",
        "name": "cidade"
      },
      {
        "type": "text",
        "name": "uf"
      },
      {
        "type": "text",
        "name": "departamento"
      },
      {
        "type": "date",
        "name": "data_nascimento"
      },
      {
        "type": "text",
        "name": "rg"
      },
      {
        "type": "text",
        "name": "cpf"
      },
      {
        "type": "text",
        "name": "estado_civil"
      },
      {
        "type": "text",
        "name": "profissao"
      },
      {
        "type": "text",
        "name": "sexo"
      },
      {
        "type": "text",
        "name": "filiacao"
      },
      {
        "type": "text",
        "name": "celular"
      },
      {
        "type": "text",
        "name": "origem"
      },
      {
        "type": "text",
        "name": "captador"
      },
      {
        "type": "datetime",
        "name": "criado_em"
      }
    ]
  },
  "exec": {
    "steps": {
      "name": "insert_cliente",
      "module": "dbupdater",
      "action": "insert",
      "options": {
        "connection": "asj",
        "sql": {
          "type": "insert",
          "values": [
            {
              "table": "clientes",
              "column": "slug",
              "type": "text",
              "value": "{{$_POST.slug}}"
            },
            {
              "table": "clientes",
              "column": "id_crm",
              "type": "number",
              "value": "{{$_POST.id_crm}}"
            },
            {
              "table": "clientes",
              "column": "tipo",
              "type": "text",
              "value": "{{$_POST.tipo}}"
            },
            {
              "table": "clientes",
              "column": "nome",
              "type": "text",
              "value": "{{$_POST.nome}}"
            },
            {
              "table": "clientes",
              "column": "responsavel",
              "type": "text",
              "value": "{{$_POST.responsavel}}"
            },
            {
              "table": "clientes",
              "column": "endereco",
              "type": "text",
              "value": "{{$_POST.endereco}}"
            },
            {
              "table": "clientes",
              "column": "bairro",
              "type": "text",
              "value": "{{$_POST.bairro}}"
            },
            {
              "table": "clientes",
              "column": "cep",
              "type": "number",
              "value": "{{$_POST.cep}}"
            },
            {
              "table": "clientes",
              "column": "cidade",
              "type": "text",
              "value": "{{$_POST.cidade}}"
            },
            {
              "table": "clientes",
              "column": "uf",
              "type": "text",
              "value": "{{$_POST.uf}}"
            },
            {
              "table": "clientes",
              "column": "departamento",
              "type": "text",
              "value": "{{$_POST.departamento}}"
            },
            {
              "table": "clientes",
              "column": "data_nascimento",
              "type": "date",
              "value": "{{$_POST.data_nascimento}}"
            },
            {
              "table": "clientes",
              "column": "rg",
              "type": "text",
              "value": "{{$_POST.rg}}"
            },
            {
              "table": "clientes",
              "column": "cpf",
              "type": "text",
              "value": "{{$_POST.cpf}}"
            },
            {
              "table": "clientes",
              "column": "estado_civil",
              "type": "text",
              "value": "{{$_POST.estado_civil}}"
            },
            {
              "table": "clientes",
              "column": "profissao",
              "type": "text",
              "value": "{{$_POST.profissao}}"
            },
            {
              "table": "clientes",
              "column": "sexo",
              "type": "text",
              "value": "{{$_POST.sexo}}"
            },
            {
              "table": "clientes",
              "column": "filiacao",
              "type": "text",
              "value": "{{$_POST.filiacao}}"
            },
            {
              "table": "clientes",
              "column": "celular",
              "type": "text",
              "value": "{{$_POST.celular}}"
            },
            {
              "table": "clientes",
              "column": "origem",
              "type": "text",
              "value": "{{$_POST.origem}}"
            },
            {
              "table": "clientes",
              "column": "captador",
              "type": "text",
              "value": "{{$_POST.captador}}"
            },
            {
              "table": "clientes",
              "column": "criado_em",
              "type": "datetime",
              "value": "{{NOW}}"
            }
          ],
          "table": "clientes",
          "returning": "id",
          "query": "insert into `clientes` (`bairro`, `captador`, `celular`, `cep`, `cidade`, `cpf`, `criado_em`, `data_nascimento`, `departamento`, `endereco`, `estado_civil`, `filiacao`, `id_crm`, `nome`, `origem`, `profissao`, `responsavel`, `rg`, `sexo`, `slug`, `tipo`, `uf`) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)",
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
              "value": "{{$_POST.id_crm}}",
              "test": ""
            },
            {
              "name": ":P3",
              "type": "expression",
              "value": "{{$_POST.tipo}}",
              "test": ""
            },
            {
              "name": ":P4",
              "type": "expression",
              "value": "{{$_POST.nome}}",
              "test": ""
            },
            {
              "name": ":P5",
              "type": "expression",
              "value": "{{$_POST.responsavel}}",
              "test": ""
            },
            {
              "name": ":P6",
              "type": "expression",
              "value": "{{$_POST.endereco}}",
              "test": ""
            },
            {
              "name": ":P7",
              "type": "expression",
              "value": "{{$_POST.bairro}}",
              "test": ""
            },
            {
              "name": ":P8",
              "type": "expression",
              "value": "{{$_POST.cep}}",
              "test": ""
            },
            {
              "name": ":P9",
              "type": "expression",
              "value": "{{$_POST.cidade}}",
              "test": ""
            },
            {
              "name": ":P10",
              "type": "expression",
              "value": "{{$_POST.uf}}",
              "test": ""
            },
            {
              "name": ":P11",
              "type": "expression",
              "value": "{{$_POST.departamento}}",
              "test": ""
            },
            {
              "name": ":P12",
              "type": "expression",
              "value": "{{$_POST.data_nascimento}}",
              "test": ""
            },
            {
              "name": ":P13",
              "type": "expression",
              "value": "{{$_POST.rg}}",
              "test": ""
            },
            {
              "name": ":P14",
              "type": "expression",
              "value": "{{$_POST.cpf}}",
              "test": ""
            },
            {
              "name": ":P15",
              "type": "expression",
              "value": "{{$_POST.estado_civil}}",
              "test": ""
            },
            {
              "name": ":P16",
              "type": "expression",
              "value": "{{$_POST.profissao}}",
              "test": ""
            },
            {
              "name": ":P17",
              "type": "expression",
              "value": "{{$_POST.sexo}}",
              "test": ""
            },
            {
              "name": ":P18",
              "type": "expression",
              "value": "{{$_POST.filiacao}}",
              "test": ""
            },
            {
              "name": ":P19",
              "type": "expression",
              "value": "{{$_POST.celular}}",
              "test": ""
            },
            {
              "name": ":P20",
              "type": "expression",
              "value": "{{$_POST.origem}}",
              "test": ""
            },
            {
              "name": ":P21",
              "type": "expression",
              "value": "{{$_POST.captador}}",
              "test": ""
            },
            {
              "name": ":P22",
              "type": "expression",
              "value": "{{NOW}}",
              "test": ""
            }
          ]
        }
      },
      "meta": [
        {
          "name": "identity",
          "type": "text"
        },
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