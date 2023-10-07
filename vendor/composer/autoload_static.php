<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitad4672adf8e6509dd04fc28b49aadf1d
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hasokeyk\\Trendyol\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hasokeyk\\Trendyol\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/trendyol',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitad4672adf8e6509dd04fc28b49aadf1d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitad4672adf8e6509dd04fc28b49aadf1d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitad4672adf8e6509dd04fc28b49aadf1d::$classMap;

        }, null, ClassLoader::class);
    }
}
