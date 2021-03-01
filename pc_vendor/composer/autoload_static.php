<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3b3807b0c3cb8d8845db3699b3947523
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PinkCrab\\WP\\Locations\\' => 22,
            'PinkCrab\\Locations\\Tests\\' => 25,
            'PinkCrab\\Locations\\' => 19,
            'PcLocations_001\\eftec\\bladeonehtml\\' => 35,
            'PcLocations_001\\eftec\\bladeone\\' => 31,
            'PcLocations_001\\Psr\\SimpleCache\\' => 32,
            'PcLocations_001\\Psr\\Http\\Message\\' => 33,
            'PcLocations_001\\Psr\\Container\\' => 30,
            'PcLocations_001\\PinkCrab\\WP_PSR16_Cache\\' => 40,
            'PcLocations_001\\PinkCrab\\Registerables\\' => 39,
            'PcLocations_001\\PinkCrab\\HTTP\\' => 30,
            'PcLocations_001\\PinkCrab\\Enqueue\\' => 33,
            'PcLocations_001\\PinkCrab\\Core\\' => 30,
            'PcLocations_001\\PinkCrab\\BladeOne\\' => 34,
            'PcLocations_001\\Nyholm\\Psr7\\' => 28,
            'PcLocations_001\\Nyholm\\Psr7Server\\' => 34,
            'PcLocations_001\\Http\\Message\\' => 29,
            'PcLocations_001\\Dice\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PinkCrab\\WP\\Locations\\' => 
        array (
            0 => __DIR__ . '/../..' . '/wp',
        ),
        'PinkCrab\\Locations\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'PinkCrab\\Locations\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'PcLocations_001\\eftec\\bladeonehtml\\' => 
        array (
            0 => __DIR__ . '/..' . '/eftec/bladeonehtml/lib',
        ),
        'PcLocations_001\\eftec\\bladeone\\' => 
        array (
            0 => __DIR__ . '/..' . '/eftec/bladeone/lib',
        ),
        'PcLocations_001\\Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'PcLocations_001\\Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-factory/src',
            1 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'PcLocations_001\\Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'PcLocations_001\\PinkCrab\\WP_PSR16_Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/pinkcrab/wp-psr16-cache/src',
        ),
        'PcLocations_001\\PinkCrab\\Registerables\\' => 
        array (
            0 => __DIR__ . '/..' . '/pinkcrab/registerables/src',
        ),
        'PcLocations_001\\PinkCrab\\HTTP\\' => 
        array (
            0 => __DIR__ . '/..' . '/pinkcrab/http/src',
        ),
        'PcLocations_001\\PinkCrab\\Enqueue\\' => 
        array (
            0 => __DIR__ . '/..' . '/pinkcrab/enqueue/src',
        ),
        'PcLocations_001\\PinkCrab\\Core\\' => 
        array (
            0 => __DIR__ . '/..' . '/pinkcrab/plugin-framework/src',
        ),
        'PcLocations_001\\PinkCrab\\BladeOne\\' => 
        array (
            0 => __DIR__ . '/..' . '/pinkcrab/bladeone-provider/src',
        ),
        'PcLocations_001\\Nyholm\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/nyholm/psr7/src',
        ),
        'PcLocations_001\\Nyholm\\Psr7Server\\' => 
        array (
            0 => __DIR__ . '/..' . '/nyholm/psr7-server/src',
        ),
        'PcLocations_001\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-http/message-factory/src',
        ),
        'PcLocations_001\\Dice\\' => 
        array (
            0 => __DIR__ . '/..' . '/level-2/dice',
        ),
    );

    public static $classMap = array (
        'PcLocations_001\\Dice\\Dice' => __DIR__ . '/..' . '/level-2/dice/Dice.php',
        'PcLocations_001\\Dice\\Extra\\RuleValidator' => __DIR__ . '/..' . '/level-2/dice/Extra/RuleValidator.php',
        'PcLocations_001\\Dice\\Loader\\Xml' => __DIR__ . '/..' . '/level-2/dice/Loader/Xml.php',
        'PcLocations_001\\Http\\Message\\MessageFactory' => __DIR__ . '/..' . '/php-http/message-factory/src/MessageFactory.php',
        'PcLocations_001\\Http\\Message\\RequestFactory' => __DIR__ . '/..' . '/php-http/message-factory/src/RequestFactory.php',
        'PcLocations_001\\Http\\Message\\ResponseFactory' => __DIR__ . '/..' . '/php-http/message-factory/src/ResponseFactory.php',
        'PcLocations_001\\Http\\Message\\StreamFactory' => __DIR__ . '/..' . '/php-http/message-factory/src/StreamFactory.php',
        'PcLocations_001\\Http\\Message\\UriFactory' => __DIR__ . '/..' . '/php-http/message-factory/src/UriFactory.php',
        'PcLocations_001\\Nyholm\\Psr7Server\\ServerRequestCreator' => __DIR__ . '/..' . '/nyholm/psr7-server/src/ServerRequestCreator.php',
        'PcLocations_001\\Nyholm\\Psr7Server\\ServerRequestCreatorInterface' => __DIR__ . '/..' . '/nyholm/psr7-server/src/ServerRequestCreatorInterface.php',
        'PcLocations_001\\Nyholm\\Psr7\\Factory\\HttplugFactory' => __DIR__ . '/..' . '/nyholm/psr7/src/Factory/HttplugFactory.php',
        'PcLocations_001\\Nyholm\\Psr7\\Factory\\Psr17Factory' => __DIR__ . '/..' . '/nyholm/psr7/src/Factory/Psr17Factory.php',
        'PcLocations_001\\Nyholm\\Psr7\\MessageTrait' => __DIR__ . '/..' . '/nyholm/psr7/src/MessageTrait.php',
        'PcLocations_001\\Nyholm\\Psr7\\Request' => __DIR__ . '/..' . '/nyholm/psr7/src/Request.php',
        'PcLocations_001\\Nyholm\\Psr7\\RequestTrait' => __DIR__ . '/..' . '/nyholm/psr7/src/RequestTrait.php',
        'PcLocations_001\\Nyholm\\Psr7\\Response' => __DIR__ . '/..' . '/nyholm/psr7/src/Response.php',
        'PcLocations_001\\Nyholm\\Psr7\\ServerRequest' => __DIR__ . '/..' . '/nyholm/psr7/src/ServerRequest.php',
        'PcLocations_001\\Nyholm\\Psr7\\Stream' => __DIR__ . '/..' . '/nyholm/psr7/src/Stream.php',
        'PcLocations_001\\Nyholm\\Psr7\\UploadedFile' => __DIR__ . '/..' . '/nyholm/psr7/src/UploadedFile.php',
        'PcLocations_001\\Nyholm\\Psr7\\Uri' => __DIR__ . '/..' . '/nyholm/psr7/src/Uri.php',
        'PcLocations_001\\PinkCrab\\BladeOne\\BladeOne_Provider' => __DIR__ . '/..' . '/pinkcrab/bladeone-provider/src/BladeOne_Provider.php',
        'PcLocations_001\\PinkCrab\\Core\\Application\\App' => __DIR__ . '/..' . '/pinkcrab/plugin-framework/src/Application/App.php',
        'PcLocations_001\\PinkCrab\\Core\\Application\\App_Config' => __DIR__ . '/..' . '/pinkcrab/plugin-framework/src/Application/App_Config.php',
        'PcLocations_001\\PinkCrab\\Core\\Application\\Config' => __DIR__ . '/..' . '/pinkcrab/plugin-framework/src/Application/Config.php',
        'PcLocations_001\\PinkCrab\\Core\\Collection\\Collection' => __DIR__ . '/..' . '/pinkcrab/plugin-framework/src/Collection/Collection.php',
        'PcLocations_001\\PinkCrab\\Core\\Collection\\Traits\\Indexed' => __DIR__ . '/..' . '/pinkcrab/plugin-framework/src/Collection/Traits/Indexed.php',
        'PcLocations_001\\PinkCrab\\Core\\Collection\\Traits\\JsonSerialize' => __DIR__ . '/..' . '/pinkcrab/plugin-framework/src/Collection/Traits/JsonSerialize.php',
        'PcLocations_001\\PinkCrab\\Core\\Collection\\Traits\\Sequence' => __DIR__ . '/..' . '/pinkcrab/plugin-framework/src/Collection/Traits/Sequence.php',
        'PcLocations_001\\PinkCrab\\Core\\Interfaces\\Registerable' => __DIR__ . '/..' . '/pinkcrab/plugin-framework/src/Interfaces/Registerable.php',
        'PcLocations_001\\PinkCrab\\Core\\Interfaces\\Renderable' => __DIR__ . '/..' . '/pinkcrab/plugin-framework/src/Interfaces/Renderable.php',
        'PcLocations_001\\PinkCrab\\Core\\Interfaces\\Service_Container' => __DIR__ . '/..' . '/pinkcrab/plugin-framework/src/Interfaces/Service_Container.php',
        'PcLocations_001\\PinkCrab\\Core\\Services\\Dice\\WP_Dice' => __DIR__ . '/..' . '/pinkcrab/plugin-framework/src/Services/Dice/WP_Dice.php',
        'PcLocations_001\\PinkCrab\\Core\\Services\\Registration\\Hook_Removal' => __DIR__ . '/..' . '/pinkcrab/plugin-framework/src/Services/Registration/Hook_Removal.php',
        'PcLocations_001\\PinkCrab\\Core\\Services\\Registration\\Loader' => __DIR__ . '/..' . '/pinkcrab/plugin-framework/src/Services/Registration/Loader.php',
        'PcLocations_001\\PinkCrab\\Core\\Services\\Registration\\Register_Loader' => __DIR__ . '/..' . '/pinkcrab/plugin-framework/src/Services/Registration/Register_Loader.php',
        'PcLocations_001\\PinkCrab\\Core\\Services\\ServiceContainer\\Container' => __DIR__ . '/..' . '/pinkcrab/plugin-framework/src/Services/ServiceContainer/Container.php',
        'PcLocations_001\\PinkCrab\\Core\\Services\\ServiceContainer\\ServiceNotRegisteredException' => __DIR__ . '/..' . '/pinkcrab/plugin-framework/src/Services/ServiceContainer/ServiceNotRegisteredException.php',
        'PcLocations_001\\PinkCrab\\Core\\Services\\View\\PHP_Engine' => __DIR__ . '/..' . '/pinkcrab/plugin-framework/src/Services/View/PHP_Engine.php',
        'PcLocations_001\\PinkCrab\\Core\\Services\\View\\View' => __DIR__ . '/..' . '/pinkcrab/plugin-framework/src/Services/View/View.php',
        'PcLocations_001\\PinkCrab\\Enqueue\\Enqueue' => __DIR__ . '/..' . '/pinkcrab/enqueue/src/Enqueue.php',
        'PcLocations_001\\PinkCrab\\HTTP\\HTTP' => __DIR__ . '/..' . '/pinkcrab/http/src/HTTP.php',
        'PcLocations_001\\PinkCrab\\HTTP\\HTTP_Helper' => __DIR__ . '/..' . '/pinkcrab/http/src/HTTP_Helper.php',
        'PcLocations_001\\PinkCrab\\Registerables\\Ajax' => __DIR__ . '/..' . '/pinkcrab/registerables/src/Ajax.php',
        'PcLocations_001\\PinkCrab\\Registerables\\MetaBox' => __DIR__ . '/..' . '/pinkcrab/registerables/src/MetaBox.php',
        'PcLocations_001\\PinkCrab\\Registerables\\Post_Type' => __DIR__ . '/..' . '/pinkcrab/registerables/src/Post_Type.php',
        'PcLocations_001\\PinkCrab\\Registerables\\Taxonomy' => __DIR__ . '/..' . '/pinkcrab/registerables/src/Taxonomy.php',
        'PcLocations_001\\PinkCrab\\WP_PSR16_Cache\\CacheInterface_Trait' => __DIR__ . '/..' . '/pinkcrab/wp-psr16-cache/src/CacheInterface_Trait.php',
        'PcLocations_001\\PinkCrab\\WP_PSR16_Cache\\Cache_Item' => __DIR__ . '/..' . '/pinkcrab/wp-psr16-cache/src/Cache_Item.php',
        'PcLocations_001\\PinkCrab\\WP_PSR16_Cache\\File_Cache' => __DIR__ . '/..' . '/pinkcrab/wp-psr16-cache/src/File_Cache.php',
        'PcLocations_001\\PinkCrab\\WP_PSR16_Cache\\Transient_Cache' => __DIR__ . '/..' . '/pinkcrab/wp-psr16-cache/src/Transient_Cache.php',
        'PcLocations_001\\Psr\\Container\\ContainerExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerExceptionInterface.php',
        'PcLocations_001\\Psr\\Container\\ContainerInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerInterface.php',
        'PcLocations_001\\Psr\\Container\\NotFoundExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/NotFoundExceptionInterface.php',
        'PcLocations_001\\Psr\\Http\\Message\\MessageInterface' => __DIR__ . '/..' . '/psr/http-message/src/MessageInterface.php',
        'PcLocations_001\\Psr\\Http\\Message\\RequestFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/RequestFactoryInterface.php',
        'PcLocations_001\\Psr\\Http\\Message\\RequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/RequestInterface.php',
        'PcLocations_001\\Psr\\Http\\Message\\ResponseFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/ResponseFactoryInterface.php',
        'PcLocations_001\\Psr\\Http\\Message\\ResponseInterface' => __DIR__ . '/..' . '/psr/http-message/src/ResponseInterface.php',
        'PcLocations_001\\Psr\\Http\\Message\\ServerRequestFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/ServerRequestFactoryInterface.php',
        'PcLocations_001\\Psr\\Http\\Message\\ServerRequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/ServerRequestInterface.php',
        'PcLocations_001\\Psr\\Http\\Message\\StreamFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/StreamFactoryInterface.php',
        'PcLocations_001\\Psr\\Http\\Message\\StreamInterface' => __DIR__ . '/..' . '/psr/http-message/src/StreamInterface.php',
        'PcLocations_001\\Psr\\Http\\Message\\UploadedFileFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/UploadedFileFactoryInterface.php',
        'PcLocations_001\\Psr\\Http\\Message\\UploadedFileInterface' => __DIR__ . '/..' . '/psr/http-message/src/UploadedFileInterface.php',
        'PcLocations_001\\Psr\\Http\\Message\\UriFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/UriFactoryInterface.php',
        'PcLocations_001\\Psr\\Http\\Message\\UriInterface' => __DIR__ . '/..' . '/psr/http-message/src/UriInterface.php',
        'PcLocations_001\\Psr\\SimpleCache\\CacheException' => __DIR__ . '/..' . '/psr/simple-cache/src/CacheException.php',
        'PcLocations_001\\Psr\\SimpleCache\\CacheInterface' => __DIR__ . '/..' . '/psr/simple-cache/src/CacheInterface.php',
        'PcLocations_001\\Psr\\SimpleCache\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/simple-cache/src/InvalidArgumentException.php',
        'PcLocations_001\\eftec\\bladeone\\BladeOne' => __DIR__ . '/..' . '/eftec/bladeone/lib/BladeOne.php',
        'PcLocations_001\\eftec\\bladeone\\BladeOneCache' => __DIR__ . '/..' . '/eftec/bladeone/lib/BladeOneCache.php',
        'PcLocations_001\\eftec\\bladeone\\BladeOneCacheRedis' => __DIR__ . '/..' . '/eftec/bladeone/lib/BladeOneCacheRedis.php',
        'PcLocations_001\\eftec\\bladeone\\BladeOneCustom' => __DIR__ . '/..' . '/eftec/bladeone/lib/BladeOneCustom.php',
        'PcLocations_001\\eftec\\bladeone\\BladeOneHtml' => __DIR__ . '/..' . '/eftec/bladeone/lib/BladeOneHtml.php',
        'PcLocations_001\\eftec\\bladeone\\BladeOneHtmlBootstrap' => __DIR__ . '/..' . '/eftec/bladeone/lib/BladeOneHtmlBootstrap.php',
        'PcLocations_001\\eftec\\bladeone\\BladeOneLang' => __DIR__ . '/..' . '/eftec/bladeone/lib/BladeOneLang.php',
        'PcLocations_001\\eftec\\bladeonehtml\\BladeOneHtml' => __DIR__ . '/..' . '/eftec/bladeonehtml/lib/BladeOneHtml.php',
        'PinkCrab\\WP\\Locations\\Activation' => __DIR__ . '/../..' . '/wp/Activation.php',
        'PinkCrab\\WP\\Locations\\Deactivation' => __DIR__ . '/../..' . '/wp/Deactivation.php',
        'PinkCrab\\WP\\Locations\\Uninstalled' => __DIR__ . '/../..' . '/wp/Uninstalled.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3b3807b0c3cb8d8845db3699b3947523::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3b3807b0c3cb8d8845db3699b3947523::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3b3807b0c3cb8d8845db3699b3947523::$classMap;

        }, null, ClassLoader::class);
    }
}
