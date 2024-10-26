<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit305cb4643d6be265d0c6885b27d9a78f
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit305cb4643d6be265d0c6885b27d9a78f::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit305cb4643d6be265d0c6885b27d9a78f::$classMap;

        }, null, ClassLoader::class);
    }
}
