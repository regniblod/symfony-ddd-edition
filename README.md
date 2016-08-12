Symfony Standard DDD Edition
============================
Welcome to the Symfony Standard DDD Edition - a fully-functional Symfony application with DDD architecture that you can use as the skeleton for your new applications.

For details on how to download and get started with Symfony, see the Installation chapter of the Symfony Documentation.

## Installing the Symfony Standard DDD Edition
When it comes to installing the Symfony Standard DDD Edition, you have the following options.

### Use Composer (*recommended*)
As Symfony uses [Composer][2] to manage its dependencies, the recommended wayto create a new project is to use it.

If you don't have Composer yet, download it following the instructions on http://getcomposer.org/ or just run the following command:

    curl -s http://getcomposer.org/installer | php

Then, use the `create-project` command to generate a new Symfony application:

    php composer.phar create-project regniblod/symfony-standard-ddd --stability=dev path/to/install

Composer will install Symfony and all its dependencies under the `path/to/install` directory.

### Download an Archive File
To quickly test Symfony, you can also download an [archive][3] of the Standard DDD Edition and unpack it somewhere under your web server root directory.

If you downloaded an archive "without vendors", you also need to install allthe necessary dependencies. Download composer (see above) and run thefollowing command:

    php composer.phar install

## Checking your System Configuration
Before starting coding, make sure that your local system is properly configured for Symfony.

Execute the `check.php` script from the command line:

    php bin/symfony_requirements

Access the `config.php` script from a browser:

    http://localhost/path/to/symfony/config.php

If you get any warnings or recommendations, fix them before moving on.

## Getting started with Symfony
This distribution is meant to be the starting point for your Symfony applications.

A great way to start learning Symfony is via the [Quick Tour][4], which will take you through all the basic features of Symfony2.

Once you're feeling good, you can move onto reading the official [Symfony2 book][5].

A default bundle, `YourNamespaceProjectModuleBundle`, shows you Symfony2 DDD architecture in action. After playing with it, you can remove it by following these steps:
* remove the routing entries referencing YourNamespaceProjectModuleBundle in `app/config/routing.yml`.
* remove the YourNamespaceProjectModuleBundle from the registered bundles in `app/AppKernel.php`.
* rename `src/YourNamespace/Project/Module` directory to fit your needs.
* Remove all the `.gitkeep` files: `find . -name .git -prune -o -type d -empty -exec touch {}/.gitkeep \;`

## How to add a new module
1. Copy folder structure from `Module` directory.
2. Add the configuration to this files, changing the path and the bundle name in each case:

`app/config.yml`:
```yaml
doctrine:
    orm:
        mappings:
            YourNamespaceProjectModuleBundle:
                type: yml
                dir: '%kernel.root_dir%/../src/YourNamespace/Project/Module/Infrastructure/Mapping/Doctrine/ORM'
                prefix: YourNamespace\Project\Module\Domain\Model
                alias: YourNamespaceProjectModuleBundle
                is_bundle: false
```

`app/routing.yml`:
```yaml
yournamespace_project_module_modulebundle:
    resource: "@YourNamespaceProjectModuleBundle/Controller/"
    type:     annotation
```

`app/AppKernel.php`:
```php
<?php

public function registerBundles()
{
    $bundles = [
        new YourNamespace\Project\Module\Application\ModuleBundle\YourNamespaceProjectModuleBundle(),
    ];
}
```

## What's inside?
The Symfony Standard DDD Edition is configured with the following defaults:
* A YourNamespaceProjectModuleBundle you can use to start coding.
* Twig as the only configured template engine.
* Doctrine ORM/DBAL.
* Swiftmailer.
* Annotations enabled for everything.

It comes pre-configured with the following bundles:
* **FrameworkBundle** - The core Symfony framework bundle
* [**SensioFrameworkExtraBundle**][6] - Adds several enhancements, including template and routing annotation capability
* [**DoctrineBundle**][7] - Adds support for the Doctrine ORM
* [**TwigBundle**][8] - Adds support for the Twig templating engine
* [**SecurityBundle**][9] - Adds security by integrating Symfony's security component
* [**SwiftmailerBundle**][10] - Adds support for Swiftmailer, a library for sending emails
* [**MonologBundle**][11] - Adds support for Monolog, a logging library
* **WebProfilerBundle** (in dev/test env) - Adds profiling functionality and the web debug toolbar
* **SensioDistributionBundle** (in dev/test env) - Adds functionality for configuring and working with Symfony distributions
* [**SensioGeneratorBundle**][13] (in dev/test env) - Adds code generation capabilities
* **DebugBundle** (in dev/test env) - Adds Debug and VarDumper component integration

All libraries and bundles included in the Symfony Standard Edition are released under the MIT or BSD license.

## Architecture
Explain different layers.

## Folder structure
```
src
└── YourNamespace
    └── Project
        └── Module
            ├── Application
            │   └── ModuleBundle
            │       ├── Controller
            │       ├── DependencyInjection
            │       │   └── Compiler
            │       └── Resources
            │           ├── config
            │           └── views
            │               └── default
            ├── Domain
            │   ├── Component
            │   ├── Event
            │   ├── Exception
            │   ├── Model
            │   ├── Repository
            │   ├── Service
            │   └── Value
            ├── Infrastructure
            │   ├── Mapping
            │   │   └── Doctrine
            │   │       └── ORM
            │   ├── Migrations
            │   │   └── Doctrine
            │   ├── Repository
            │   │   └── Doctrine
            │   │       └── ORM
            │   └── Service
            └── Tests
                ├── Domain
                │   ├── Component
                │   ├── Event
                │   ├── Model
                │   ├── Service
                │   └── Value
                └── Infrastructure
                    └── Service
```

## Inspiration
- [@moein](https://github.com/moein) and our work at trivago.
- https://github.com/PhpFriendsOfDdd/state-of-the-union

## Other implementations:
- https://github.com/josecelano/ddd-symfony-sample
- https://github.com/tyx/ddd-sample-symfony
- https://github.com/leopro/trip-planner
- https://github.com/tyx/cqrs-php-sandbox
- https://github.com/dddinphp/ddd
- https://github.com/codeliner/php-ddd-cargo-sample
- https://github.com/qandidate-labs/broadway
- https://github.com/jgimeno/taskreporter
- https://github.com/ddd-php/ddd-components

## ToDo
- Create command to generate automagically a new module.


[1]:  https://symfony.com/doc/3.0/book/installation.html
[2]:  http://getcomposer.org/
[3]:  https://github.com/regniblod/symfony-standard-ddd/archive/master.zip
[4]:  http://symfony.com/doc/2.7/quick_tour/the_big_picture.html
[5]:  http://symfony.com/doc/2.7/index.html
[6]:  https://symfony.com/doc/current/bundles/SensioFrameworkExtraBundle/index.html
[7]:  https://symfony.com/doc/3.0/book/doctrine.html
[8]:  https://symfony.com/doc/3.0/book/templating.html
[9]:  https://symfony.com/doc/3.0/book/security.html
[10]: https://symfony.com/doc/3.0/cookbook/email.html
[11]: https://symfony.com/doc/3.0/cookbook/logging/monolog.html
[13]: https://symfony.com/doc/3.0/bundles/SensioGeneratorBundle/index.html
