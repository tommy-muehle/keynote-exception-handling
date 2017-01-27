<?php

$sentryClient->captureException($exception, [
    'extra' => [
        'php_version' => phpversion(),
        'foo' => 'bar',
        // ...
    ],
    'logger' => 'default',
    'tags' => ['key' => 'value'],

    // group event by
    'fingerprint' => ['{{ default }}', 'other value'],
]);
