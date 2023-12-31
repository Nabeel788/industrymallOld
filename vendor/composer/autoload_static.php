<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit53b6ef243a97f47d554e61e9f32d0942
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit53b6ef243a97f47d554e61e9f32d0942::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit53b6ef243a97f47d554e61e9f32d0942::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit53b6ef243a97f47d554e61e9f32d0942::$classMap;

        }, null, ClassLoader::class);
    }
}
