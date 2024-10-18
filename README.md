OOPTIMO Job Application tests — PHP
------------

Solution for Test 1:

- I installed GuzzleHttp for make API calls

- I created a service for using Guzzle here:

services\PostService.php

- I instantiated the PostService class in actionTest1 method of SiteController controller to get post data and passed to the view here:

views\site\test1.php

- I iterated the post array with basic HTML structure and added some styles


INSTALLATION
------------

```shell
composer install
```

DEVELOPMENT
------------
```shell
php yii serve
```
Open browser at `http://localhost:8080/`.


DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources
