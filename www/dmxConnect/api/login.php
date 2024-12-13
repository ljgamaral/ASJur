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
    "steps": [
      {
        "name": "api",
        "module": "api",
        "action": "send",
        "options": {
          "url": "https://darkgoldenrod-dugong-239956.hostingersite.com/api/login",
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
          ],
          "throwErrors": true
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
      },
      {
        "name": "Cookie",
        "module": "core",
        "action": "setcookie",
        "options": {
          "value": "{{api.headers['set-cookie'].toString()}}",
          "expires": 7
        }
      }
    ]
  }
}
JSON
);
?>