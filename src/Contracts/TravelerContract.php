<?php

namespace Zaengle\Pipeline\Contracts;

use Exception;

interface TravelerContract {
    /**
     * @param string $message
     * @return self
     */
    public function setMessage(string $message): self;

    /**
     * @return string
     */
    public function getMessage(): string;

    /**
     * @param Exception $exception
     * @return self
     */
    public function setException(Exception $exception): self;

    /**
     * @return Exception|null
     */
    public function getException(): ?Exception;

    /**
     * @param string $status
     * @return self
     */
    public function setStatus(string $status): self;

    /**
     * @return string
     */
    public function getStatus(): string;

    /**
     * @return bool
     */
    public function passed(): bool;
}