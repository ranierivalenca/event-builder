<?php
    require "vendor/cakephp/cakephp/src/Core/functions.php";
    require "config/paths.php";

    $config = (include 'config/app.php');

    function getConfig($type, $what) {
        global $config;
        if ($type == 'db') {
            $dbConfig = $config['Datasources']['default'];
            return $dbConfig[$what];

        }
    }

    if (count($argv) > 2) {
        echo getConfig($argv[1], $argv[2]);
    }
?>