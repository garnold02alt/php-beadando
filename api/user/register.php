<?php
include "../request.php";
include "../database.php";
include "../error.php";

try {
    $body = body();
    sql("insert into users (username, email, passwd) values ('{$body->name}', '{$body->email}', '{$body->passwd}');");
} catch (Throwable $t) {
    error();
}
