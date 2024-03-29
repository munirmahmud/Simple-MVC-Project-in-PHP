<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8caaed8342078bc924d16b4d5499fafb
{
    public static $classMap = array (
        'App\\controllers\\PagesController' => __DIR__ . '/../..' . '/app/controllers/PagesController.php',
        'App\\controllers\\UserController' => __DIR__ . '/../..' . '/app/controllers/UserController.php',
        'App\\core\\App' => __DIR__ . '/../..' . '/app/core/App.php',
        'App\\core\\Request' => __DIR__ . '/../..' . '/app/core/Request.php',
        'App\\core\\Router' => __DIR__ . '/../..' . '/app/core/Router.php',
        'ComposerAutoloaderInit8caaed8342078bc924d16b4d5499fafb' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit8caaed8342078bc924d16b4d5499fafb' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/app/core/database/Connection.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/app/core/database/QueryBuilder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit8caaed8342078bc924d16b4d5499fafb::$classMap;

        }, null, ClassLoader::class);
    }
}
