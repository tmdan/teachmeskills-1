<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4b0f0aca2cb1eca3fb414ad4f887acf7
{
    public static $files = array (
        '88a25909256ec432e232967858f5e4ba' => __DIR__ . '/../..' . '/helpers/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4b0f0aca2cb1eca3fb414ad4f887acf7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4b0f0aca2cb1eca3fb414ad4f887acf7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4b0f0aca2cb1eca3fb414ad4f887acf7::$classMap;

        }, null, ClassLoader::class);
    }
}