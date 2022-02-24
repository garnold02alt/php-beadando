<?php
include "../database.php";
include "../request.php";
include "../error.php";

try {
    $body = body();
    $sets = "";

    if (isset($body->data1)) {
        $sets .= "data1 = \"{$body->data1}\"";
    }

    if (isset($body->data2)) {
        $sets .= "data2 = \"{$body->data2}\"";
    }

    if (isset($body->data3)) {
        $sets .= "data3 = \"{$body->data3}\"";
    }

    sql("update table1 set {$sets} where id = {$body->id}");
} catch (Throwable $t) {
    error();
}
