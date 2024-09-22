<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit91f93e36bb7f89350ee0b56cab0e0971
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Spatie\\IcalendarGenerator\\' => 26,
            'Spatie\\Enum\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Spatie\\IcalendarGenerator\\' => 
        array (
            0 => __DIR__ . '/..' . '/spatie/icalendar-generator/src',
        ),
        'Spatie\\Enum\\' => 
        array (
            0 => __DIR__ . '/..' . '/spatie/enum/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit91f93e36bb7f89350ee0b56cab0e0971::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit91f93e36bb7f89350ee0b56cab0e0971::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit91f93e36bb7f89350ee0b56cab0e0971::$classMap;

        }, null, ClassLoader::class);
    }
}
