<?php


namespace Avy;

class Core {
    use tunel;

    function __call($name, $arguments){
        return $this->instance->{$name}(...$arguments);
    }
}