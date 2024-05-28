<?php
class validator
{

    public static function string($value,$min=1,$max=INF)
    {
         strlen(trim($value))===0;

         return strlen($value)>= $min && strlen($value)<=$max;
    }
}