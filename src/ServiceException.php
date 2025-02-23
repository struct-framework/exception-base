<?php

declare(strict_types=1);

namespace Exception;

use LogicException;
use Throwable;

abstract class ServiceException extends \Exception
{
    public function __construct(int $code, string $message = '', ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
