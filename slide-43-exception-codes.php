<?php

class FileNotReadableException extends RuntimeException
{
    public function __construct(string $filename)
    {
        $message = sprintf('Cannot read %s!', $filename);
        $code = 666;

        parent::__construct($message, $code, null);
    }
}
