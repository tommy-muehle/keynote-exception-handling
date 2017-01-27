<?php

$sentryClient = new Raven_Client(
    'https://<key>:<secret>@sentry.io/<project>'
);

// or $sentryClient->install();
$error_handler = new Raven_ErrorHandler($sentryClient);
$error_handler->registerExceptionHandler();
$error_handler->registerErrorHandler();
$error_handler->registerShutdownFunction();
