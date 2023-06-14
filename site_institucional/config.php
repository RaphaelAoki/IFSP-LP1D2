<?php

function baseUrl()
{
    return sprintf(
        "%s://%s%s",
        'http',
        $_SERVER['SERVER_NAME'],
        '/code/site_institucional/'
    );

}
define("BASE_URL", baseUrl());