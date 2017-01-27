<?php

$url = 'unreachable.tld';

if ('' === $url) {
    throw InvalidUrlException::blankUrl();
}

if ('' === parse_url($url, PHP_URL_SCHEME)) {
    throw InvalidUrlException::noScheme($url);
}

// ...
