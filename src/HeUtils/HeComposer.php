<?php


namespace HaveEnjoy;


class HeComposer
{
    function __construct()
    {
        echo __FUNCTION__." => ".__DIR__;
    }

    public static function test()
    {
        echo __FUNCTION__." => ".__DIR__;
        exit;

    }
}
