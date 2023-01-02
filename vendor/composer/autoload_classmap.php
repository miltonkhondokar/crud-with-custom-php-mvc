<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'App\\Base\\Controller' => $baseDir . '/app/Base/Controller.php',
    'App\\Controllers\\SalesTrackerController' => $baseDir . '/app/Controllers/SalesTrackerController.php',
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'Pecee\\Controllers\\IResourceController' => $vendorDir . '/pecee/simple-router/src/Pecee/Controllers/IResourceController.php',
    'Pecee\\Exceptions\\InvalidArgumentException' => $vendorDir . '/pecee/simple-router/src/Pecee/Exceptions/InvalidArgumentException.php',
    'Pecee\\Http\\Exceptions\\MalformedUrlException' => $vendorDir . '/pecee/simple-router/src/Pecee/Http/Exceptions/MalformedUrlException.php',
    'Pecee\\Http\\Input\\IInputItem' => $vendorDir . '/pecee/simple-router/src/Pecee/Http/Input/IInputItem.php',
    'Pecee\\Http\\Input\\InputFile' => $vendorDir . '/pecee/simple-router/src/Pecee/Http/Input/InputFile.php',
    'Pecee\\Http\\Input\\InputHandler' => $vendorDir . '/pecee/simple-router/src/Pecee/Http/Input/InputHandler.php',
    'Pecee\\Http\\Input\\InputItem' => $vendorDir . '/pecee/simple-router/src/Pecee/Http/Input/InputItem.php',
    'Pecee\\Http\\Middleware\\BaseCsrfVerifier' => $vendorDir . '/pecee/simple-router/src/Pecee/Http/Middleware/BaseCsrfVerifier.php',
    'Pecee\\Http\\Middleware\\Exceptions\\TokenMismatchException' => $vendorDir . '/pecee/simple-router/src/Pecee/Http/Middleware/Exceptions/TokenMismatchException.php',
    'Pecee\\Http\\Middleware\\IMiddleware' => $vendorDir . '/pecee/simple-router/src/Pecee/Http/Middleware/IMiddleware.php',
    'Pecee\\Http\\Middleware\\IpRestrictAccess' => $vendorDir . '/pecee/simple-router/src/Pecee/Http/Middleware/IpRestrictAccess.php',
    'Pecee\\Http\\Request' => $vendorDir . '/pecee/simple-router/src/Pecee/Http/Request.php',
    'Pecee\\Http\\Response' => $vendorDir . '/pecee/simple-router/src/Pecee/Http/Response.php',
    'Pecee\\Http\\Security\\CookieTokenProvider' => $vendorDir . '/pecee/simple-router/src/Pecee/Http/Security/CookieTokenProvider.php',
    'Pecee\\Http\\Security\\Exceptions\\SecurityException' => $vendorDir . '/pecee/simple-router/src/Pecee/Http/Security/Exceptions/SecurityException.php',
    'Pecee\\Http\\Security\\ITokenProvider' => $vendorDir . '/pecee/simple-router/src/Pecee/Http/Security/ITokenProvider.php',
    'Pecee\\Http\\Url' => $vendorDir . '/pecee/simple-router/src/Pecee/Http/Url.php',
    'Pecee\\SimpleRouter\\ClassLoader\\ClassLoader' => $vendorDir . '/pecee/simple-router/src/Pecee/SimpleRouter/ClassLoader/ClassLoader.php',
    'Pecee\\SimpleRouter\\ClassLoader\\IClassLoader' => $vendorDir . '/pecee/simple-router/src/Pecee/SimpleRouter/ClassLoader/IClassLoader.php',
    'Pecee\\SimpleRouter\\Event\\EventArgument' => $vendorDir . '/pecee/simple-router/src/Pecee/SimpleRouter/Event/EventArgument.php',
    'Pecee\\SimpleRouter\\Event\\IEventArgument' => $vendorDir . '/pecee/simple-router/src/Pecee/SimpleRouter/Event/IEventArgument.php',
    'Pecee\\SimpleRouter\\Exceptions\\ClassNotFoundHttpException' => $vendorDir . '/pecee/simple-router/src/Pecee/SimpleRouter/Exceptions/ClassNotFoundHttpException.php',
    'Pecee\\SimpleRouter\\Exceptions\\HttpException' => $vendorDir . '/pecee/simple-router/src/Pecee/SimpleRouter/Exceptions/HttpException.php',
    'Pecee\\SimpleRouter\\Exceptions\\NotFoundHttpException' => $vendorDir . '/pecee/simple-router/src/Pecee/SimpleRouter/Exceptions/NotFoundHttpException.php',
    'Pecee\\SimpleRouter\\Handlers\\CallbackExceptionHandler' => $vendorDir . '/pecee/simple-router/src/Pecee/SimpleRouter/Handlers/CallbackExceptionHandler.php',
    'Pecee\\SimpleRouter\\Handlers\\DebugEventHandler' => $vendorDir . '/pecee/simple-router/src/Pecee/SimpleRouter/Handlers/DebugEventHandler.php',
    'Pecee\\SimpleRouter\\Handlers\\EventHandler' => $vendorDir . '/pecee/simple-router/src/Pecee/SimpleRouter/Handlers/EventHandler.php',
    'Pecee\\SimpleRouter\\Handlers\\IEventHandler' => $vendorDir . '/pecee/simple-router/src/Pecee/SimpleRouter/Handlers/IEventHandler.php',
    'Pecee\\SimpleRouter\\Handlers\\IExceptionHandler' => $vendorDir . '/pecee/simple-router/src/Pecee/SimpleRouter/Handlers/IExceptionHandler.php',
    'Pecee\\SimpleRouter\\IRouterBootManager' => $vendorDir . '/pecee/simple-router/src/Pecee/SimpleRouter/IRouterBootManager.php',
    'Pecee\\SimpleRouter\\Route\\IControllerRoute' => $vendorDir . '/pecee/simple-router/src/Pecee/SimpleRouter/Route/IControllerRoute.php',
    'Pecee\\SimpleRouter\\Route\\IGroupRoute' => $vendorDir . '/pecee/simple-router/src/Pecee/SimpleRouter/Route/IGroupRoute.php',
    'Pecee\\SimpleRouter\\Route\\ILoadableRoute' => $vendorDir . '/pecee/simple-router/src/Pecee/SimpleRouter/Route/ILoadableRoute.php',
    'Pecee\\SimpleRouter\\Route\\IPartialGroupRoute' => $vendorDir . '/pecee/simple-router/src/Pecee/SimpleRouter/Route/IPartialGroupRoute.php',
    'Pecee\\SimpleRouter\\Route\\IRoute' => $vendorDir . '/pecee/simple-router/src/Pecee/SimpleRouter/Route/IRoute.php',
    'Pecee\\SimpleRouter\\Route\\LoadableRoute' => $vendorDir . '/pecee/simple-router/src/Pecee/SimpleRouter/Route/LoadableRoute.php',
    'Pecee\\SimpleRouter\\Route\\Route' => $vendorDir . '/pecee/simple-router/src/Pecee/SimpleRouter/Route/Route.php',
    'Pecee\\SimpleRouter\\Route\\RouteController' => $vendorDir . '/pecee/simple-router/src/Pecee/SimpleRouter/Route/RouteController.php',
    'Pecee\\SimpleRouter\\Route\\RouteGroup' => $vendorDir . '/pecee/simple-router/src/Pecee/SimpleRouter/Route/RouteGroup.php',
    'Pecee\\SimpleRouter\\Route\\RoutePartialGroup' => $vendorDir . '/pecee/simple-router/src/Pecee/SimpleRouter/Route/RoutePartialGroup.php',
    'Pecee\\SimpleRouter\\Route\\RouteResource' => $vendorDir . '/pecee/simple-router/src/Pecee/SimpleRouter/Route/RouteResource.php',
    'Pecee\\SimpleRouter\\Route\\RouteUrl' => $vendorDir . '/pecee/simple-router/src/Pecee/SimpleRouter/Route/RouteUrl.php',
    'Pecee\\SimpleRouter\\Router' => $vendorDir . '/pecee/simple-router/src/Pecee/SimpleRouter/Router.php',
    'Pecee\\SimpleRouter\\SimpleRouter' => $vendorDir . '/pecee/simple-router/src/Pecee/SimpleRouter/SimpleRouter.php',
);