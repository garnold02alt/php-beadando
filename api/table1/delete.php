<?php
include "../database.php";
include "../request.php";
include "../error.php";

try {
    $body = body();
    sql("delete from table1 where id = {$body->id}");
} catch (Throwable $t) {
    error();
}
