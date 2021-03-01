# PinkCrab Location Example Plugin #

This pugin uses php-scoper for saner use of composer with WordPress plugins.

To install depenendices and setup the autoloader run 
``` bash build.sh ```
This will isntall all production dependencies, run through php-scoper and setup the "vendor" in pc_vendor

To run tests, phpstan etc. You can just run ``` composer install ``` and access all testing and development tools. Just ensure all your depenedencies are used via the escaped namespace.

To add new dependencies, just include as normal ``` composer require namespace/package ``` and run ``` bash build.sh ``` afterwards to escape all namespaces.



