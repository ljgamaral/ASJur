<?php
require('../../dmxConnectLib/dmxConnect.php');


$app = new \lib\App();

$app->define(<<<'JSON'
{
  "meta": {
    "$_GET": [
      {
        "type": "text",
        "name": "email"
      },
      {
        "type": "text",
        "name": "senha"
      }
    ],
    "$_SESSION": [
      {
        "type": "text",
        "name": "id_user"
      },
      {
        "type": "text",
        "name": "password_user"
      }
    ]
  },
  "exec": {
    "steps": {
      "name": "api",
      "module": "api",
      "action": "send",
      "options": {
        "url": "https://darkgoldenrod-dugong-239956.hostingersite.com/api/user/check-logged",
        "dataType": "x-www-form-urlencoded",
        "data": {
          "email": "{{$_GET.email}}",
          "senha": "{{$_GET.senha}}"
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