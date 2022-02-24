<?php
function body()
{
    $json = file_get_contents("php://input");
    return json_decode($json);
}
