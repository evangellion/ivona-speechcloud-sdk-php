<?php

namespace Werd\Ivona\ExceptionHandler;

use Exception;
use GuzzleHttp\Exception\ClientException;
use Werd\Ivona\ExceptionHandler;
use Werd\Ivona\SpeechCloudException;

class GuzzleHandler implements ExceptionHandler
{
    public function handle(Exception $exception)
    {
        if($exception instanceof ClientException) {
            $message = $exception->getMessage();
            $message .= ' '.  $exception->getResponse()->getBody()->getContents();
            throw new SpeechCloudException($message, 0, $exception);
        } else {
            throw $exception;
        }
    }

}