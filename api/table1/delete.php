<?php
include "../database.php";
include "../request.php";

$body = body();
sql("delete from table1 where id = {$body->id}");
