<?php

function my_handler($exception)
{
    echo 'Got it: ' . $exception->getMessage();
}

set_exception_handler('my_handler');

throw new Exception('Take this!');
