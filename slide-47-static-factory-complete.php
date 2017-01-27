<?php

class InvalidUrlException extends InvalidArgumentException
{
    // ...

    public static function blankUrl()
    {
        return static::create('Blank url are invalid!');
    }

    public static function noScheme(string $url)
    {
        $reason = sprintf('The url %s has no scheme!', $url);

        return static::create($reason);
    }

    // ...
}
