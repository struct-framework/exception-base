<?php

declare(strict_types=1);

namespace Exception;

use Exception;
use Throwable;

abstract class UserException extends Exception
{
    public function __construct(int $code, string $message = '', ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
