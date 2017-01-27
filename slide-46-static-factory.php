<?php

class InvalidUrlException extends InvalidArgumentException
{
    private static function create(string $reason)
    {
        return new static($reason);
    }

    public static function blankUrl()
    {
        return static::create('Blank url are invalid!');
    }
}
