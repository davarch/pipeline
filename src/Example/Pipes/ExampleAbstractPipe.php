<?php

namespace Zaengle\Pipeline\Example\Pipes;

use Zaengle\Pipeline\Contracts\AbstractPipe;

/**
 * Class ExamplePipe.
 */
class ExampleAbstractPipe extends AbstractPipe
{
    public function execute(): void
    {
        dump($this->getDemoData());
    }
}
