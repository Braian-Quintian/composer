<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitdcfcdd2201ca6f7186e7a2b2915643e5
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitdcfcdd2201ca6f7186e7a2b2915643e5', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitdcfcdd2201ca6f7186e7a2b2915643e5', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitdcfcdd2201ca6f7186e7a2b2915643e5::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
