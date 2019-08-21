FPD 3
=====
Forschungsprojektdatenbank 3

Ordnerstruktur
-------------------

    assets/             contains assets definition
    commands/           contains console commands (controllers)
    config/             contains application configurations
    controllers/        contains Web controller classes
    mail/               contains view files for e-mails
    models/             contains model classes
    runtime/            contains files generated during runtime
    **rbac/**           **enthält alle RBAC Regeln und eine Datei aller Rechte**
    tests/              contains various tests for the basic application
    vendor/             contains dependent 3rd-party packages
    views/              contains view files for the Web application
    web/                contains the entry script and Web resources

Coding-Guidlines
----------------
* [Code Codex](docs/coding/code_codex.md)
* [Testen](docs/coding/testing.md)
* [Definition of Done](docs/coding/definition_done.md)


Systemvoraussetzungen
------------

* PHP 7.3
* MySQL 5.7

Konfiguration
-------------

### Datenbank

Datei `config/db.php`

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```
