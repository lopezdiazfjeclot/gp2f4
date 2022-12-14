<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite0655949a37c70eae4a81cad73212dfe
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'IPv4\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'IPv4\\' => 
        array (
            0 => __DIR__ . '/..' . '/markrogoyski/ipv4-subnet-calculator/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite0655949a37c70eae4a81cad73212dfe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite0655949a37c70eae4a81cad73212dfe::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite0655949a37c70eae4a81cad73212dfe::$classMap;

        }, null, ClassLoader::class);
    }
}
