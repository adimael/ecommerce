<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit138b50bc9532adbedaa35ae3f6f965d3
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'F' => 
        array (
            'Fincorp\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Fincorp\\' => 
        array (
            0 => __DIR__ . '/..' . '/fincorp/php-classes/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit138b50bc9532adbedaa35ae3f6f965d3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit138b50bc9532adbedaa35ae3f6f965d3::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit138b50bc9532adbedaa35ae3f6f965d3::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
