<?php

// v1.0.9
namespace Avy;

class Core {
    use tunel;

    function __call($name, $arguments){
        if (!empty($arguments) && array_values($arguments) === $arguments)
            return $this->instance->{$name}(...$arguments);
        else
            return $this->instance->{$name}($arguments);
    }
}