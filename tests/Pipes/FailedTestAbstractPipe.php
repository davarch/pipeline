<?php

namespace Zaengle\Pipeline\Tests\Pipes;

use Zaengle\Pipeline\Contracts\AbstractPipe;

/**
 * Class FailedTestPipe.
 */
class FailedTestAbstractPipe implements AbstractPipe
{
    /**
     * {@inheritdoc}
     */
    public function handle($traveler, \Closure $next)
    {
        throw new \Exception('This Pipe Has Failed!!!');

        return $next($traveler);
    }
}
