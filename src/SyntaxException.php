<?php

declare(strict_types=1);

namespace Exception;

use RuntimeException;
use Throwable;

abstract class SyntaxException extends RuntimeException
{
    public function __construct(int $code, string $message = '', ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
