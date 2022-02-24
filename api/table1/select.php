<?php
include "../database.php";
echo json_encode(all(sql("select * from table1")));
