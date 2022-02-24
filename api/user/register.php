<?php
include "../request.php";
include "../database.php";

$body = body();
sql("insert into users (username, email, passwd) values ('{$body->name}', '{$body->email}', '{$body->passwd}');");
