<?php

namespace Elastic\Fecades;
use Illuminate\Support\Fecades\Fecade;

class GerardoTestFecade extends Fecade
{
    protected static function getFecadeAccesor()
    {
        return "HolaMundo";
    }
}
