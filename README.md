# ZF3 App that Calls ZF2 Services

## ZF2 Project
* Install ZF2
  * Download a ZIP file from: [https://framework.zend.com/downloads/archives](https://framework.zend.com/downloads/archives)
  * Unzip into this directory structure: `ZF2_Project/ZF2`
* The directory structure for `ZF2_Project` should look something like then when you're done:
```
jed@jed:~/Repos/ZF2_Api_ZF3/ZF2_Project$ tree
.
├── autoload_classmap.php
├── composer.json
├── composer.phar
├── config
│   ├── application.config.php
│   └── autoload
│       ├── global.php
│       ├── local.php
│       └── README.md
├── data
│   ├── cache
│   ├── test.db
│   └── test_users_insert.sql
├── init_autoloader.php
├── LICENSE.txt
├── module
│   ├── Api
│   │   ├── config
│   │   │   └── module.config.php
│   │   ├── Module.php
│   │   └── src
│   │       └── Controller
│   │           ├── IndexControllerFactory.php
│   │           └── IndexController.php
│   ├── Application
│   │   ├── config
│   │   │   └── module.config.php
│   │   ├── language
│   │   ├── Module.php
│   │   ├── src
│   │   │   ├── Application
│   │   │   │   ├── Controller
│   │   │   │   │   └── IndexController.php
│   │   │   │   └── Traits
│   │   │   │       └── UserModelTrait.php
│   │   │   └── Model
│   │   │       ├── UserModelFactory.php
│   │   │       └── UserModel.php
│   │   └── view
│   │       ├── application
│   │       │   └── index
│   │       │       └── index.phtml
│   │       ├── error
│   │       │   ├── 404.phtml
│   │       │   └── index.phtml
│   │       └── layout
│   │           └── layout.phtml
│   ├── Lookup
│   │   ├── config
│   │   │   └── module.config.php
│   │   ├── Module.php
│   │   ├── src
│   │   │   └── Controller
│   │   │       ├── IndexControllerFactory.php
│   │   │       └── IndexController.php
│   │   └── view
│   │       └── lookup
│   │           └── index
│   │               └── index.phtml
│   └── Post
│       ├── config
│       │   └── module.config.php
│       ├── Module.php
│       ├── src
│       │   └── Controller
│       │       ├── IndexControllerFactory.php
│       │       └── IndexController.php
│       └── view
│           └── lookup
│               └── index
│                   └── index.phtml
├── public
│   ├── css
│   ├── fonts
│   ├── img
│   ├── index.php
│   └── js
├── README.md
└── ZF2
    ├── bin
    │   ├── autoload_example.php
    │   ├── autoload_examples.php
    │   ├── classmap_generator.php
    │   ├── createAutoloadTestClasses.php
    │   ├── pluginmap_generator.php
    │   ├── templatemap_generator.php
    │   └── update_hostname_validator.php
    ├── library
    │   ├── Zend
    │   │   ├── Authentication
    │   │   ├── Barcode
etc.
```
* This is how the `autoload_classmap.php` file was generated:
```
cd ZF2_Project
ZF2/bin/classmap_generator.php
```
* The data is an SQLite file: `ZF2_Project/data/test.db`
* Run the PHP webserver
```
php -S localhost:8888 -t public
```
* Test the ZF2 project from a browser: `http://localhost:8888/`
* Test the ZF2 project lookup from a browser: `http://localhost:8888/lookup`
* Test the ZF2 project api from a browser: `http://localhost:8888/api/lookup`

## Install ZF3
* Change to the ZF3 project folder
```
cd ../ZF3_Project
```
* Run composer install
```
php composer.phar install
```
* Config overrides are under `ZF3_Project/config/autoload/global.php`
* Run the PHP webserver
```
php -S localhost:9999 -t public
```
* Test the ZF2 project from a browser: `http://localhost:9999/`

## To Observe
* The output from the ZF2 and ZF3 project `lookup` results should be identical
* The ZF3 project lookup controller makes a REST request to the ZF2 project
