<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit32d48918260b0e708bff4fcc8bc30541
{
    public static $files = array (
        '4153e535db06b3996f918f3fc16ce5f6' => __DIR__ . '/../..' . '/app/Base/custom_functions.php',
        'ebe9ee1ec4b228b79475c85a8b1f3320' => __DIR__ . '/../..' . '/app/Helpers/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pecee\\' => 6,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pecee\\' => 
        array (
            0 => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Base\\Controller' => __DIR__ . '/../..' . '/app/Base/Controller.php',
        'App\\Controllers\\SalesTrackerController' => __DIR__ . '/../..' . '/app/Controllers/SalesTrackerController.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Pecee\\Controllers\\IResourceController' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/Controllers/IResourceController.php',
        'Pecee\\Exceptions\\InvalidArgumentException' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/Exceptions/InvalidArgumentException.php',
        'Pecee\\Http\\Exceptions\\MalformedUrlException' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/Http/Exceptions/MalformedUrlException.php',
        'Pecee\\Http\\Input\\IInputItem' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/Http/Input/IInputItem.php',
        'Pecee\\Http\\Input\\InputFile' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/Http/Input/InputFile.php',
        'Pecee\\Http\\Input\\InputHandler' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/Http/Input/InputHandler.php',
        'Pecee\\Http\\Input\\InputItem' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/Http/Input/InputItem.php',
        'Pecee\\Http\\Middleware\\BaseCsrfVerifier' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/Http/Middleware/BaseCsrfVerifier.php',
        'Pecee\\Http\\Middleware\\Exceptions\\TokenMismatchException' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/Http/Middleware/Exceptions/TokenMismatchException.php',
        'Pecee\\Http\\Middleware\\IMiddleware' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/Http/Middleware/IMiddleware.php',
        'Pecee\\Http\\Middleware\\IpRestrictAccess' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/Http/Middleware/IpRestrictAccess.php',
        'Pecee\\Http\\Request' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/Http/Request.php',
        'Pecee\\Http\\Response' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/Http/Response.php',
        'Pecee\\Http\\Security\\CookieTokenProvider' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/Http/Security/CookieTokenProvider.php',
        'Pecee\\Http\\Security\\Exceptions\\SecurityException' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/Http/Security/Exceptions/SecurityException.php',
        'Pecee\\Http\\Security\\ITokenProvider' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/Http/Security/ITokenProvider.php',
        'Pecee\\Http\\Url' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/Http/Url.php',
        'Pecee\\SimpleRouter\\ClassLoader\\ClassLoader' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/SimpleRouter/ClassLoader/ClassLoader.php',
        'Pecee\\SimpleRouter\\ClassLoader\\IClassLoader' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/SimpleRouter/ClassLoader/IClassLoader.php',
        'Pecee\\SimpleRouter\\Event\\EventArgument' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/SimpleRouter/Event/EventArgument.php',
        'Pecee\\SimpleRouter\\Event\\IEventArgument' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/SimpleRouter/Event/IEventArgument.php',
        'Pecee\\SimpleRouter\\Exceptions\\ClassNotFoundHttpException' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/SimpleRouter/Exceptions/ClassNotFoundHttpException.php',
        'Pecee\\SimpleRouter\\Exceptions\\HttpException' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/SimpleRouter/Exceptions/HttpException.php',
        'Pecee\\SimpleRouter\\Exceptions\\NotFoundHttpException' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/SimpleRouter/Exceptions/NotFoundHttpException.php',
        'Pecee\\SimpleRouter\\Handlers\\CallbackExceptionHandler' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/SimpleRouter/Handlers/CallbackExceptionHandler.php',
        'Pecee\\SimpleRouter\\Handlers\\DebugEventHandler' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/SimpleRouter/Handlers/DebugEventHandler.php',
        'Pecee\\SimpleRouter\\Handlers\\EventHandler' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/SimpleRouter/Handlers/EventHandler.php',
        'Pecee\\SimpleRouter\\Handlers\\IEventHandler' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/SimpleRouter/Handlers/IEventHandler.php',
        'Pecee\\SimpleRouter\\Handlers\\IExceptionHandler' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/SimpleRouter/Handlers/IExceptionHandler.php',
        'Pecee\\SimpleRouter\\IRouterBootManager' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/SimpleRouter/IRouterBootManager.php',
        'Pecee\\SimpleRouter\\Route\\IControllerRoute' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/SimpleRouter/Route/IControllerRoute.php',
        'Pecee\\SimpleRouter\\Route\\IGroupRoute' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/SimpleRouter/Route/IGroupRoute.php',
        'Pecee\\SimpleRouter\\Route\\ILoadableRoute' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/SimpleRouter/Route/ILoadableRoute.php',
        'Pecee\\SimpleRouter\\Route\\IPartialGroupRoute' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/SimpleRouter/Route/IPartialGroupRoute.php',
        'Pecee\\SimpleRouter\\Route\\IRoute' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/SimpleRouter/Route/IRoute.php',
        'Pecee\\SimpleRouter\\Route\\LoadableRoute' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/SimpleRouter/Route/LoadableRoute.php',
        'Pecee\\SimpleRouter\\Route\\Route' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/SimpleRouter/Route/Route.php',
        'Pecee\\SimpleRouter\\Route\\RouteController' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/SimpleRouter/Route/RouteController.php',
        'Pecee\\SimpleRouter\\Route\\RouteGroup' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/SimpleRouter/Route/RouteGroup.php',
        'Pecee\\SimpleRouter\\Route\\RoutePartialGroup' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/SimpleRouter/Route/RoutePartialGroup.php',
        'Pecee\\SimpleRouter\\Route\\RouteResource' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/SimpleRouter/Route/RouteResource.php',
        'Pecee\\SimpleRouter\\Route\\RouteUrl' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/SimpleRouter/Route/RouteUrl.php',
        'Pecee\\SimpleRouter\\Router' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/SimpleRouter/Router.php',
        'Pecee\\SimpleRouter\\SimpleRouter' => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee/SimpleRouter/SimpleRouter.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit32d48918260b0e708bff4fcc8bc30541::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit32d48918260b0e708bff4fcc8bc30541::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit32d48918260b0e708bff4fcc8bc30541::$classMap;

        }, null, ClassLoader::class);
    }
}
