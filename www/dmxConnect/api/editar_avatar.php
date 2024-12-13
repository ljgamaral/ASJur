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
        "url": "https://darkgoldenrod-dugong-239956.hostingersite.com",
        "method": "POST",
        "dataType": "multipart/form-data",
        "schema": [
          {
            "type": "array",
            "name": "data"
          },
          {
            "type": "object",
            "name": "headers"
          }
        ],
        "headers": {
          "Cookie": "{{$_COOKIE.Cookie}}"
        },
        "data": {
          "avatar": "{{$_FILES.avatar}}"
        }
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