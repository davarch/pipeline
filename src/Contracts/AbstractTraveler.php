<?php

namespace Zaengle\Pipeline\Contracts;

use Exception;

/**
 * Class AbstractTraveler.
 */
abstract class AbstractTraveler implements TravelerContract
{
    public const TRAVELER_SUCCESS = 'ok';

    public const TRAVELER_FAIL = 'fail';

    /**
     * @var string
     */
    protected string $status = 'ok';

    /**
     * @var string
     */
    protected string $message = 'Traveler passed successfully.';

    /**
     * @var Exception
     */
    protected Exception $exception;

    /**
     * @param  mixed  $status
     * @return AbstractTraveler
     */
    public function setStatus($status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param  string  $message
     * @return AbstractTraveler
     */
    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param  Exception  $exception
     * @return self
     */
    public function setException(Exception $exception): self
    {
        $this->exception = $exception;

        return $this;
    }

    /**
     * @return Exception
     */
    public function getException(): Exception
    {
        return $this->exception;
    }

    /**
     * @return bool
     */
    public function passed(): bool
    {
        return $this->getStatus() === self::TRAVELER_SUCCESS;
    }
}
