<?php

namespace Werd\Ivona\ExceptionHandler;

use Exception;
use Werd\Ivona\ExceptionHandler;

class PropagateHandler implements ExceptionHandler
{
    public function handle(Exception $exception)
    {
        throw $exception;
    }

}