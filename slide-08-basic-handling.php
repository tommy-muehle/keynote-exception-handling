<?php

/* @var $connection \Doctrine\DBAL\Connection */
$connection->beginTransaction();

try {
    // ...
    $connection->commit();
} catch (\Exception $exception) {
    $connection->rollBack();
    throw $exception;
}
