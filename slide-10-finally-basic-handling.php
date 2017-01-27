<?php

/* @var $connection \Doctrine\DBAL\Connection */
$connection->beginTransaction();

try {
    // ...
    $connection->commit();
} catch (\Exception $exception) {
    $connection->rollBack();
    throw $exception;
} finally {
    /* @var $logger \Monolog\Logger */
    $logger->info('...');
}
