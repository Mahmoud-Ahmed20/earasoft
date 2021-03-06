<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd3e4fd576cfa118d56ecf9cdc314bc7c
{
    public static $files = array (
        '38090334f6af783616613695dae9f3a5' => __DIR__ . '/../..' . '/src/core/helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Islam\\Eraamvc\\' => 14,
        ),
        'E' => 
        array (
            'Eraasoft\\Mvc\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Islam\\Eraamvc\\' => 
        array (
            0 => __DIR__ . '/..' . '/islam/eraamvc/src',
        ),
        'Eraasoft\\Mvc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd3e4fd576cfa118d56ecf9cdc314bc7c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd3e4fd576cfa118d56ecf9cdc314bc7c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd3e4fd576cfa118d56ecf9cdc314bc7c::$classMap;

        }, null, ClassLoader::class);
    }
}
