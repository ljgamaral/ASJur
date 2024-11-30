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
        "name": "email_user",
        "module": "core",
        "action": "setcookie",
        "options": {
          "value": "{{$_POST.email}}",
          "secure": true,
          "expires": 1
        }
      },
      {
        "name": "password_user",
        "module": "core",
        "action": "setcookie",
        "options": {
          "value": "{{$_POST.senha.sha1()}}",
          "secure": true,
          "expires": 1
        }
      },
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
              "type": "object",
              "name": "data",
              "sub": [
                {
                  "type": "boolean",
                  "name": "success"
                },
                {
                  "type": "text",
                  "name": "message"
                }
              ]
            },
            {
              "type": "object",
              "name": "headers",
              "sub": [
                {
                  "type": "text",
                  "name": "cache-control"
                },
                {
                  "type": "text",
                  "name": "content-encoding"
                },
                {
                  "type": "text",
                  "name": "content-security-policy"
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
                  "name": "expires"
                },
                {
                  "type": "text",
                  "name": "panel"
                },
                {
                  "type": "text",
                  "name": "platform"
                },
                {
                  "type": "text",
                  "name": "server"
                },
                {
                  "type": "text",
                  "name": "vary"
                },
                {
                  "type": "text",
                  "name": "x-hcdn-cache-status"
                },
                {
                  "type": "text",
                  "name": "x-hcdn-request-id"
                },
                {
                  "type": "text",
                  "name": "x-hcdn-upstream-rt"
                },
                {
                  "type": "text",
                  "name": "x-powered-by"
                }
              ]
            }
          ]
        },
        "output": true,
        "meta": [
          {
            "type": "object",
            "name": "data",
            "sub": [
              {
                "type": "boolean",
                "name": "success"
              },
              {
                "type": "text",
                "name": "message"
              }
            ]
          },
          {
            "type": "object",
            "name": "headers",
            "sub": [
              {
                "type": "text",
                "name": "cache-control"
              },
              {
                "type": "text",
                "name": "content-encoding"
              },
              {
                "type": "text",
                "name": "content-security-policy"
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
                "name": "expires"
              },
              {
                "type": "text",
                "name": "panel"
              },
              {
                "type": "text",
                "name": "platform"
              },
              {
                "type": "text",
                "name": "server"
              },
              {
                "type": "text",
                "name": "vary"
              },
              {
                "type": "text",
                "name": "x-hcdn-cache-status"
              },
              {
                "type": "text",
                "name": "x-hcdn-request-id"
              },
              {
                "type": "text",
                "name": "x-hcdn-upstream-rt"
              },
              {
                "type": "text",
                "name": "x-powered-by"
              }
            ]
          }
        ],
        "outputType": "object"
      }
    ]
  }
}
JSON
);
?>