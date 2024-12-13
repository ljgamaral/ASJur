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
    ]
  },
  "exec": {
    "steps": {
      "name": "api",
      "module": "api",
      "action": "send",
      "options": {
        "url": "https://darkgoldenrod-dugong-239956.hostingersite.com/api/user/check-logged",
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