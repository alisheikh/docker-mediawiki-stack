<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfcf67d6ee371d1e9909ec61739bc3fc1
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Process\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfcf67d6ee371d1e9909ec61739bc3fc1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfcf67d6ee371d1e9909ec61739bc3fc1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
