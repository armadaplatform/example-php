# example-php

`example-php` is a very simple service that can be used to test various Armada features.
It is written using PHP and can serve as an example service for that platform.


It demonstrates how easy it is to alter service configuration (in this case the welcome message) depending on
the enviroment (`--env`). If no environment is supplied it defaults to `dev`.


# Building and running the service.

    armada build example-php
    armada run example-php


# Using the service.

Example usage:

    armada run example-php --env dev/john

Using the IP address and port shown by `armada run` we can make an HTTP request to the service.
We should get output simliar to the one below:

    Welcome to development version of example-php!

    Microservice environment variables:
    MICROSERVICE_NAME: "example-php"
    MICROSERVICE_ENV: "dev/john"
    MICROSERVICE_APP_ID: ""
    CONFIG_PATH: ""
