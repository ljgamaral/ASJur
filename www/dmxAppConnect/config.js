dmx.config({
  "Início": {
    "data_detail1": {
      "meta": [
        {
          "type": "text",
          "name": "id"
        },
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
      ],
      "outputType": "array"
    }
  },
  "clientedetalhes": {
    "repeat1": {
      "meta": [
        {
          "type": "text",
          "name": "id"
        },
        {
          "type": "text",
          "name": "slug"
        },
        {
          "type": "number",
          "name": "id_cliente"
        },
        {
          "type": "number",
          "name": "id_processo"
        },
        {
          "type": "text",
          "name": "descricao"
        },
        {
          "type": "datetime",
          "name": "criado_em"
        }
      ],
      "outputType": "array"
    }
  },
  "LoginASJurdico": {
    "data_detail1": {
      "meta": null,
      "outputType": "text"
    }
  },
  "processos": {
    "repeat1": {
      "meta": [
        {
          "name": "$index",
          "type": "number"
        },
        {
          "name": "$key",
          "type": "text"
        },
        {
          "name": "$value",
          "type": "object"
        },
        {
          "type": "text",
          "name": "id"
        },
        {
          "type": "text",
          "name": "slug"
        },
        {
          "type": "text",
          "name": "processo"
        },
        {
          "type": "text",
          "name": "ultimo_andamento"
        },
        {
          "type": "text",
          "name": "justica"
        },
        {
          "type": "text",
          "name": "status"
        }
      ],
      "outputType": "array"
    },
    "repeat2": {
      "meta": [
        {
          "name": "$index",
          "type": "number"
        },
        {
          "name": "$key",
          "type": "text"
        },
        {
          "name": "$value",
          "type": "object"
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
      "outputType": "text"
    },
    "data_detail1": {
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
      "outputType": "array"
    }
  },
  "clientes": {
    "repeat1": {
      "meta": [
        {
          "type": "text",
          "name": "id"
        },
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
      ],
      "outputType": "array"
    },
    "cookies": [
      {
        "type": "text",
        "name": "email_user"
      },
      {
        "type": "text",
        "name": "password_user"
      }
    ],
    "data_detail1": {
      "meta": [
        {
          "type": "text",
          "name": "id"
        },
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
      ],
      "outputType": "array"
    },
    "repeat2": {
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
      "outputType": "text"
    },
    "repeat3": {
      "meta": [
        {
          "name": "quantidade_processos_ativos",
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
      "outputType": "text"
    },
    "repeat4": {
      "meta": [
        {
          "type": "text",
          "name": "id"
        },
        {
          "type": "text",
          "name": "slug"
        },
        {
          "type": "number",
          "name": "id_processo"
        },
        {
          "type": "number",
          "name": "id_subprocesso"
        },
        {
          "type": "text",
          "name": "descricao"
        },
        {
          "type": "number",
          "name": "valor"
        },
        {
          "type": "date",
          "name": "data_vencimento"
        },
        {
          "type": "date",
          "name": "data_pagamento"
        },
        {
          "type": "text",
          "name": "status"
        },
        {
          "type": "datetime",
          "name": "criado_em"
        },
        {
          "type": "datetime",
          "name": "atualizado_em"
        }
      ],
      "outputType": "array"
    },
    "repeat6": {
      "meta": [
        {
          "type": "text",
          "name": "id"
        },
        {
          "type": "text",
          "name": "slug"
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
          "type": "number",
          "name": "id_subprocesso"
        },
        {
          "type": "text",
          "name": "andamento"
        },
        {
          "type": "text",
          "name": "descricao"
        },
        {
          "type": "text",
          "name": "data"
        },
        {
          "type": "text",
          "name": "status"
        },
        {
          "type": "datetime",
          "name": "criado_em"
        }
      ],
      "outputType": "array"
    },
    "repeat9": {
      "meta": [
        {
          "type": "text",
          "name": "id"
        },
        {
          "type": "text",
          "name": "slug"
        },
        {
          "type": "number",
          "name": "id_cliente"
        },
        {
          "type": "number",
          "name": "id_processo"
        },
        {
          "type": "text",
          "name": "nome"
        },
        {
          "type": "text",
          "name": "tipo"
        },
        {
          "type": "text",
          "name": "descricao"
        },
        {
          "type": "text",
          "name": "arquivo"
        },
        {
          "type": "datetime",
          "name": "criado_em"
        }
      ],
      "outputType": "array"
    },
    "repeat11": {
      "meta": [
        {
          "type": "text",
          "name": "id"
        },
        {
          "type": "text",
          "name": "slug"
        },
        {
          "type": "number",
          "name": "id_processo"
        },
        {
          "type": "number",
          "name": "id_subprocesso"
        },
        {
          "type": "text",
          "name": "descricao"
        },
        {
          "type": "number",
          "name": "valor"
        },
        {
          "type": "date",
          "name": "data_vencimento"
        },
        {
          "type": "date",
          "name": "data_pagamento"
        },
        {
          "type": "text",
          "name": "status"
        },
        {
          "type": "datetime",
          "name": "criado_em"
        },
        {
          "type": "datetime",
          "name": "atualizado_em"
        }
      ],
      "outputType": "array"
    }
  }
});
