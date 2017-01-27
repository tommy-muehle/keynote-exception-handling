<?php

try {
    // Code that may throw an Exception or Error.
} catch (Throwable $exception) {
    // Executed only in PHP 7,
    // will not match in PHP 5.x
} catch (Exception $exception) {
    // Executed only in PHP 5.x,
    // will not be reached in PHP 7
}
