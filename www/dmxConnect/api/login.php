<?php
require('../../dmxConnectLib/dmxConnect.php');


$app = new \lib\App();

$app->define(<<<'JSON'
{
  "meta": {
    "$_POST": [
      {
        "type": "text",
        "name": "email"
      },
      {
        "type": "text",
        "name": "senha"
      }
    ],
    "$_SERVER": [
      {
        "type": "text",
        "name": "HTTP_DOMAIN"
      }
    ]
  },
  "exec": {
    "steps": {
      "name": "login",
      "module": "api",
      "action": "send",
      "options": {
        "url": "http://localhost:23000/api/login",
        "method": "POST",
        "dataType": "x-www-form-urlencoded",
        "data": {
          "email": "{{$_POST.email}}",
          "senha": "{{$_POST.senha}}"
        },
        "schema": [
          {
            "type": "text",
            "name": "data"
          },
          {
            "type": "object",
            "name": "headers",
            "sub": [
              {
                "type": "text",
                "name": "connection"
              },
              {
                "type": "text",
                "name": "content-type"
              },
              {
                "type": "text",
                "name": "date"
              },
              {
                "type": "text",
                "name": "server"
              },
              {
                "type": "text",
                "name": "transfer-encoding"
              }
            ]
          }
        ]
      },
      "output": true,
      "meta": [
        {
          "type": "text",
          "name": "data"
        },
        {
          "type": "object",
          "name": "headers",
          "sub": [
            {
              "type": "text",
              "name": "connection"
            },
            {
              "type": "text",
              "name": "content-type"
            },
            {
              "type": "text",
              "name": "date"
            },
            {
              "type": "text",
              "name": "server"
            },
            {
              "type": "text",
              "name": "transfer-encoding"
            }
          ]
        }
      ],
      "outputType": "object"
    }
  }
}
JSON
);
?>