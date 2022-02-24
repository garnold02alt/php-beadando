<?php
include "../request.php";
include "../database.php";
include "../error.php";

try {
    $body = body();
    $hash = all(sql("select passwd from users where email = '{$body->email}'"))[0]->passwd;

    if (hash_equals($body->passwd, $hash)) {
        echo "success";
        // TODO: JWT
    } else {
        echo "failure";
    }
} catch (Throwable $t) {
    error();
}
