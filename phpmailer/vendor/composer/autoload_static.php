<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit61c7189ad50f4a0d07f4135f5fff2d80
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit61c7189ad50f4a0d07f4135f5fff2d80::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit61c7189ad50f4a0d07f4135f5fff2d80::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
