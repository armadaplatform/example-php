<?php

header('Content-type: text/plain');

if (file_exists('/opt/microservice_php/src/hermes.php'))
{
    require_once('/opt/microservice_php/src/hermes.php');
    $config = Hermes::require_file('config.php', dirname(__FILE__).'/../config/dev/');
}
else
{
    $config = require('../config/dev/config.php');
}

$env_vars = array(
    'MICROSERVICE_NAME',
    'MICROSERVICE_ENV',
    'MICROSERVICE_APP_ID',
    'CONFIG_PATH',
);

echo $config['welcome'], "\n\n";

echo "Microservice environment variables:\n";

foreach($env_vars as $env_var) {
    $value = getenv($env_var);
    if ($value !== false) {
        echo "$env_var: \"$value\"\n";
    }
}
