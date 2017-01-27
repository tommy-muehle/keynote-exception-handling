<?php

/* @var $connection \Doctrine\DBAL\Connection */
$connection->beginTransaction();

try {
    // ...
    $connection->commit();
} catch (Doctrine\DBAL\DBALException $exception) {
    $connection->rollBack();
} catch (\Exception $exception) {
    // ...

    throw $exception;
}
