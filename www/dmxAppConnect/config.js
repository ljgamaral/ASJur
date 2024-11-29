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
    }
  },
  "clientes": {
    "repeat1": {
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
          "name": "id_crm",
          "type": "number"
        },
        {
          "name": "tipo",
          "type": "text"
        },
        {
          "name": "nome",
          "type": "text"
        },
        {
          "name": "responsavel",
          "type": "text"
        },
        {
          "name": "endereco",
          "type": "text"
        },
        {
          "name": "bairro",
          "type": "text"
        },
        {
          "name": "cep",
          "type": "number"
        },
        {
          "name": "cidade",
          "type": "text"
        },
        {
          "name": "uf",
          "type": "text"
        },
        {
          "name": "departamento",
          "type": "text"
        },
        {
          "name": "data_nascimento",
          "type": "date"
        },
        {
          "name": "rg",
          "type": "text"
        },
        {
          "name": "cpf",
          "type": "text"
        },
        {
          "name": "estado_civil",
          "type": "text"
        },
        {
          "name": "profissao",
          "type": "text"
        },
        {
          "name": "sexo",
          "type": "text"
        },
        {
          "name": "filiacao",
          "type": "file"
        },
        {
          "name": "celular",
          "type": "text"
        },
        {
          "name": "origem",
          "type": "text"
        },
        {
          "name": "captador",
          "type": "text"
        },
        {
          "name": "criado_em",
          "type": "datetime"
        }
      ],
      "outputType": "text"
    }
  }
});
