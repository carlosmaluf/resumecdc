<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite399dfee12227730743a5a2f17bebde9
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite399dfee12227730743a5a2f17bebde9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite399dfee12227730743a5a2f17bebde9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}