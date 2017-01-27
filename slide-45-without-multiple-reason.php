<?php

$url = 'unreachable.tld';

if ('' === $url) {
    throw new InvalidUrlException('Blank url are invalid!');
}

if ('' === parse_url($url, PHP_URL_SCHEME)) {
    $message = sprintf('The url %s has no scheme!', $url);
    throw new InvalidUrlException($message);
}

// ...
