<?php

namespace Zaengle\Pipeline\Contracts;

use Closure;
use Zaengle\Pipeline\Traits\Makeable;

/**
 * Abstract PipeInterface.
 */
abstract class AbstractPipe {

    use Makeable;

    protected TravelerContract $traveler;

    public function __construct(TravelerContract $traveler) {
        $this->traveler = $traveler;
    }

    /**
     * @param TravelerContract $traveler
     * @param Closure $next
     * @return Closure
     */
    public function __invoke(TravelerContract $traveler, Closure $next): Closure {
        static::make($traveler)->execute();

        return $next($traveler);
    }

    public function __call($name, $arguments) {
        if (method_exists($this->traveler, $name)) {
            return $this->traveler->{$name}(...$arguments);
        }
    }

    abstract public function execute();
}
