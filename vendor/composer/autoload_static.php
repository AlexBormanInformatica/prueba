<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit751c6c4dd5b4e2d5948b266c1b08cf98
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit751c6c4dd5b4e2d5948b266c1b08cf98::$classMap;

        }, null, ClassLoader::class);
    }
}
