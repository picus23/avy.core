<?php

namespace Avy;
use DI2\DI2;

trait tunel { use DI2;
    function instance(){ return include '/var/www/core/export/core.php'; }
}