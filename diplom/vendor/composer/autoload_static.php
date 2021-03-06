<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit95e7cbf88e6e67bed36437f38b1634f0
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Olgagarma\\Diplom\\' => 17,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Olgagarma\\Diplom\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit95e7cbf88e6e67bed36437f38b1634f0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit95e7cbf88e6e67bed36437f38b1634f0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
