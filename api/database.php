<?php
function sql($sql)
{
    $db = mysqli_connect("localhost", "root", "", "beadando", 3306);
    return mysqli_query($db, $sql);
}

function all($result)
{
    $arr = [];
    while ($obj = mysqli_fetch_object($result)) {
        array_push($arr, $obj);
    }
    return $arr;
}
