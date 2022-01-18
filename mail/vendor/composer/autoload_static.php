<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb04fcb53e45ef2a32e4231c865d66204
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb04fcb53e45ef2a32e4231c865d66204::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb04fcb53e45ef2a32e4231c865d66204::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb04fcb53e45ef2a32e4231c865d66204::$classMap;

        }, null, ClassLoader::class);
    }
}
