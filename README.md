Symfony-Standard DDD Edition
============================

Cool description.


## Architecture

Explain different layers.


## Folder structure
```
src
└── Acme
    └── Foo
        ├── Application
        │   └── FooBundle
        │       ├── Controller
        │       ├── DependencyInjection
        │       │   └── Compiler
        │       └── Resources
        │           ├── config
        │           └── views
        ├── Domain
        │   ├── Component
        │   ├── Event
        │   ├── Exception
        │   ├── Model
        │   ├── Repository
        │   ├── Service
        │   └── Value
        ├── Infrastructure
        │   ├── Mapping
        │   │   └── Doctrine
        │   │       └── ORM
        │   ├── Migrations
        │   │   └── Doctrine
        │   ├── Repository
        │   │   └── Doctrine
        │   │       └── ORM
        │   └── Service
        └── Tests
            ├── Domain
            │   ├── Component
            │   ├── Event
            │   ├── Model
            │   ├── Service
            │   └── Value
            └── Infrastructure
                └── Service
```


## How to use

1. Clone the project:
`git clone https://github.com/regniblod/symfony-ddd.git {your_proyect_folder}`

2. Go to the project folder:
`cd {your_proyect_folder}`

3. Remove all the `.gitkeep` files:
`find . -name .git -prune -o -type d -empty -exec touch {}/.gitkeep \;`

4. Install dependencies:
`composer install`

5. Add a new module using instructions below.


## How to add a new module

1. Copy folder structure from `Foo` module.

2. Add the configuration to this files, changing the path and the bundle name in each case:

`app/config.yml`:
```yaml
imports:
    ...
    - { resource: "@AcmeFooBundle/Resources/config/services.yml" }

...

doctrine:
    ...
    orm:
        ...
        mappings:
            AcmeFooBundle:
                type: yml
                dir: '%kernel.root_dir%/../src/Acme/Foo/Infrastructure/Mapping/Doctrine/ORM'
                prefix: Acme\Foo\Domain\Model
                alias: AcmeFooBundle
                is_bundle: false
```

`app/routing.yml`:
```yaml
foo:
    resource: "@AcmeFooBundle/Controller/"
    type:     annotation
```

`app/AppKernel.php`:
```php
<?php

public function registerBundles()
{
    $bundles = [
        ...
        new Acme\Foo\Application\FooBundle\AcmeFooBundle(),
    ];

    ...

    return $bundles;
}
```


## Inspiration

- Moein Akbarof and our work at trivago.
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
