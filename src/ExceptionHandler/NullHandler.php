<?php

namespace Werd\Ivona\ExceptionHandler;

use Exception;
use Werd\Ivona\ExceptionHandler;

class NullHandler implements ExceptionHandler
{
    public function handle(Exception $exception)
    {

    }

}