<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbec2c3aa8f9c783bd0d80a0f37dd2fb8
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tailieuweb\\Mypackage\\' => 21,
        ),
        'L' => 
        array (
            'Lytatloizz\\Mypackage\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tailieuweb\\Mypackage\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Lytatloizz\\Mypackage\\' => 
        array (
            0 => __DIR__ . '/..' . '/lytatloizz/mypackage/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbec2c3aa8f9c783bd0d80a0f37dd2fb8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbec2c3aa8f9c783bd0d80a0f37dd2fb8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbec2c3aa8f9c783bd0d80a0f37dd2fb8::$classMap;

        }, null, ClassLoader::class);
    }
}
