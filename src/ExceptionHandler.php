<?php

namespace Werd\Ivona;

interface ExceptionHandler
{
    public function handle(\Exception $exception);

}