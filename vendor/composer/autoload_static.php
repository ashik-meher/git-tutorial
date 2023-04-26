<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitefb9640ac1f07fc28c4c5c1307d8c05f
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'AshikMeher\\Els\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'AshikMeher\\Els\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitefb9640ac1f07fc28c4c5c1307d8c05f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitefb9640ac1f07fc28c4c5c1307d8c05f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitefb9640ac1f07fc28c4c5c1307d8c05f::$classMap;

        }, null, ClassLoader::class);
    }
}
