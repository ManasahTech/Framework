<?php

namespace ManasahTech\Framework;


use ManasahTech\Contracts\Container\Container;
use ManasahTech\Contracts\Framework\Bootstrap;
use ManasahTech\Contracts\Framework\Application as ApplicationContract;

class Application implements ApplicationContract
{

    //
    private static Bootstrap $_bootstrap;
    //
    private static Container $_container;

    private function __construct(private Container $container, private Bootstrap $bootstrap )
    {
        self::$_bootstrap = $bootstrap;
        self::$_container = $container;
    }

    public static function create()
    {

    }

    public function run()
    {

    }

}