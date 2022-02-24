<?php
include "../database.php";
include "../error.php";
include "../error.php";

try {
    echo json_encode(all(sql("select * from table1")));
} catch (Throwable $t) {
    error();
}
