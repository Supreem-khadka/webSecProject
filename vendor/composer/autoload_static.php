<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit473f22c7f6b402c61d5029c7fe063038
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Process\\' => 26,
            'Spatie\\TemporaryDirectory\\' => 26,
            'Spatie\\Browsershot\\' => 19,
        ),
        'B' => 
        array (
            'Bombe\\WebSecProject\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Spatie\\TemporaryDirectory\\' => 
        array (
            0 => __DIR__ . '/..' . '/spatie/temporary-directory/src',
        ),
        'Spatie\\Browsershot\\' => 
        array (
            0 => __DIR__ . '/..' . '/spatie/browsershot/src',
        ),
        'Bombe\\WebSecProject\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit473f22c7f6b402c61d5029c7fe063038::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit473f22c7f6b402c61d5029c7fe063038::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit473f22c7f6b402c61d5029c7fe063038::$classMap;

        }, null, ClassLoader::class);
    }
}