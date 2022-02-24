<?php

set_error_handler(function ($err_severity, $err_msg, $err_file, $err_line, array $err_context) {
    if (0 === error_reporting()) {
        return false;
    }
    throw new ErrorException("A $err_severity had occurred: $err_msg");
});

function error()
{
    header('HTTP/1.1 500 Internal Server Error');
    echo '{"error": "true"}';
    exit();
}
