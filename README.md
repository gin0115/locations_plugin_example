# PinkCrab Location Example Plugin #

This pugin uses php-scoper for saner use of composer with WordPress plugins.

When first setting up the plugin, you will need to run the build script. This will create a full dev install of your project, make a few patcher provider files for php-scoper and then run a production build. This production build is then run through php-scoper to renamespace all your dependencies.

To run as basic build type ```bash build.sh```

## Development Build.

You can run a second vendor along side your custome namespaced version. This allows you to run phpunit, phpstan, phpcs and all other composer development libraries while keeping your production build lean.

To reinstall all dev dependencies, just run ``` composer install ``` as normal, or use the ```--dev``` flag with build to do both. 

```bash build.sh --dev```

## Using multiple vendor dir

All of your production code should use the custom namespace. In your plugin.php file ensure the autoloader found in build/vendor is used, but for all tests and other development settings, use the autoloader in vendor.

During install we use a customer prefix on the autoloader for dev, to avoid any collisions with the autloader (yes, that was fun.)

## Adding additional libraries

If you add any additional libraries for the production build, you will need to run build.sh after adding them.

### Config
* You can edit the prefix of the namespace in scoper.inc.php
* Enter your project namespaces in whitelist on scoper.inc.php
* Locaction of the scraped stubs can be changed in scoper.inc.php's $patcherProvider() function.
* Your paths to src and test in composer.json should be written as loaded from build/composer.json. So use '../src' or '../tests' etc
* build.sh has a custom setting for the dev vendors autoloader prefix. This should ideally be set each project to avoid any conflicts with your sandbox sites for dev work.
* build-tools/run.php has a custom list of the stub files that could be used. This isnt ideal, but its ok for now.



