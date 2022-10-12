<?php

namespace Zaengle\Pipeline\Tests\Pipes;

use Zaengle\Pipeline\Contracts\AbstractPipe;

/**
 * Class TestPipe.
 */
class TestAbstractPipe implements AbstractPipe
{
    /**
     * {@inheritdoc}
     */
    public function handle($traveler, \Closure $next)
    {
        return $next($traveler);
    }
}
