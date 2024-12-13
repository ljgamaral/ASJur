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
    "steps": [
      {
        "name": "Cookie",
        "module": "core",
        "action": "removecookie",
        "options": {}
      },
      {
        "name": "api",
        "module": "api",
        "action": "send",
        "options": {
          "url": "https://darkgoldenrod-dugong-239956.hostingersite.com/api/user/logoff",
          "method": "POST",
          "headers": {
            "Cookie": "{{$_COOKIE.Cookie}}"
          }
        },
        "output": true
      }
    ]
  }
}
JSON
);
?>