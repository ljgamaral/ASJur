<?php
// Database Type : "MySQL"
// Database Adapter : "mysql"
$exports = <<<'JSON'
{
    "name": "asj",
    "module": "dbconnector",
    "action": "connect",
    "options": {
        "server": "mysql",
        "connectionString": "mysql:host=127.0.0.1;port=23002;dbname=asj;user=admin;password=root",
        "meta"  : {}
    }
}
JSON;
?>