<?php
function dd(mixed $data)
{
    echo "<div style='background: black; color: chartreuse'>";
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    echo "</div>";
    die();
}

function dump(mixed $data)
{
    echo "<div style='background: black; color: chartreuse'>";
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    echo "</div>";
}

function myHandler($error, $msg, $file, $line)
{
        $error_file = '../storage/error.log';
        if (!is_dir(dirname($error_file))) mkdir(dirname($error_file), 0777, true);
        if (!file_exists($error_file)) file_put_contents($error_file, 'OPEN FILE' . PHP_EOL);
        error_log($msg . PHP_EOL, 3, $error_file);
}

function sizeofvar($var) {
    $start_memory = memory_get_usage();
    $tmp = unserialize(serialize($var));
    return memory_get_usage() - $start_memory;
}