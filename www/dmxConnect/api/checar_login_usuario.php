<?php
require('../../dmxConnectLib/dmxConnect.php');


$app = new \lib\App();

$app->define(<<<'JSON'
{
  "meta": {
    "$_COOKIE": [
      {
        "type": "text",
        "name": "Cookie"
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
        "throwErrors": true,
        "headers": {
          "Cookie": "{{$_COOKIE.Cookie}}"
        }
      },
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
      "outputType": "object",
      "output": true
    }
  }
}
JSON
);
?>