<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit91e5b2c7615fe44d6c7e59374cfac095
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'c3f1208348f5e13db95411d9751a9fbb' => __DIR__ . '/../..' . '/sistema/configuracao.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'sistema\\' => 8,
        ),
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
        'P' => 
        array (
            'Pecee\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'sistema\\' => 
        array (
            0 => __DIR__ . '/../..' . '/sistema',
        ),
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Pecee\\' => 
        array (
            0 => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit91e5b2c7615fe44d6c7e59374cfac095::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit91e5b2c7615fe44d6c7e59374cfac095::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit91e5b2c7615fe44d6c7e59374cfac095::$classMap;

        }, null, ClassLoader::class);
    }
}
