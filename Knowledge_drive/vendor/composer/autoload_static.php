<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit338191ecd239e483c9c61a892e3b4f77
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Http\\Forms\\' => 11,
        ),
        'C' => 
        array (
            'Core\\Middleware\\' => 16,
            'Core\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Http\\Forms\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Http/Forms',
        ),
        'Core\\Middleware\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Core/Middleware',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit338191ecd239e483c9c61a892e3b4f77::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit338191ecd239e483c9c61a892e3b4f77::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit338191ecd239e483c9c61a892e3b4f77::$classMap;

        }, null, ClassLoader::class);
    }
}
