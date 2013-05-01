<?php
require_once('./DateModule.php');
require_once('./ConvertDate.php');

function main()
{
    $opt = getopt("d:");
    $date = isset($opt['d']) ? $opt['d'] : null;
    $date_module = new DateModule;
    if (is_null($date) || $date_module->valiableDate($date) === false) {
        error('Not valiable Option');
    }

    $conv = new ConvertDate;
    $msg = $conv->test(); // test module
    echo "$msg\n";
}

function error($msg)
{
    echo sprintf("%s!!\n", $msg);
    exit(-1);
}

main();
exit(0);
