<?php
include "../database.php";
include "../error.php";

try {
    echo json_encode(all(sql("select table1.data1 as `t1.data1`, table1.data2 as `t1.data2`, table2.data1 as `t2.data1`, table2.data2 as `t2.data2` from table1 join table2 on table1.data3 = table2.id;")));
} catch (Throwable $t) {
    error();
}
