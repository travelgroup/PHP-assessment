<?php

namespace Core;

class Logging 
{
    public static function logDbErrorAndExit($error)
    { 
        die('An Error Occurred: ' . $error); 
    }
    //--------------------------------------------------------------------------
}