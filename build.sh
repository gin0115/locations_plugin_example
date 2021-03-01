#!/usr/bin/env bash

# Clear all possible vendor directories
rm -rf vendor
rm -rf build 
rm -rf pc_vendor

# Run fresh install of production and run through scoper.
composer install --no-dev
php scoper.phar add-prefix --output-dir=build --force scoper.inc.php

# Move scope cleared vendor, to root vendor and dump the autoloader (rebuild with new namespaces)
rm -rf vendor/*
cp -R build/vendor/* vendor
composer dump-autoload -a

# Now move to final custom vendor
mkdir pc_vendor
mv vendor/* pc_vendor

# Remove temp vendor directories
rm -rf vendor
rm -rf build 
