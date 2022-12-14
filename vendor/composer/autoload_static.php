<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit439db5b67f0262fc8219b16b130402f4
{
    public static $prefixesPsr0 = array (
        'E' => 
        array (
            'Engine\\' => 
            array (
                0 => __DIR__ . '/../..' . '/Engine',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit439db5b67f0262fc8219b16b130402f4::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit439db5b67f0262fc8219b16b130402f4::$classMap;

        }, null, ClassLoader::class);
    }
}
