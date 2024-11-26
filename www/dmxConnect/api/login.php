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
            "type": "array",
            "name": "data"
          },
          {
            "type": "object",
            "name": "headers"
          }
        ]
      },
      "output": true,
      "meta": [
        {
          "type": "array",
          "name": "data"
        },
        {
          "type": "object",
          "name": "headers"
        }
      ],
      "outputType": "object"
    }
  }
}
JSON
);
?>