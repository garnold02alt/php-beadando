<?php
include "../database.php";
include "../request.php";
include "../error.php";

try {
    $body = body();
    $values = "\"{$body->data1}\", \"{$body->data2}\", {$body->data3}";
    sql("insert into table1 (data1, data2, data3) values ({$values});");
} catch (Throwable $t) {
    error();
}
