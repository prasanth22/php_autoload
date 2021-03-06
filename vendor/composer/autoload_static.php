<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd6d5daa1bdc32360a91f87b8869bad81
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MyApp\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MyApp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'MyApp\\Data\\Database' => __DIR__ . '/../..' . '/src/data/Database.php',
        'MyApp\\Game\\GameController' => __DIR__ . '/../..' . '/src/game/GameController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd6d5daa1bdc32360a91f87b8869bad81::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd6d5daa1bdc32360a91f87b8869bad81::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd6d5daa1bdc32360a91f87b8869bad81::$classMap;

        }, null, ClassLoader::class);
    }
}
