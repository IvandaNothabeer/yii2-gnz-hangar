<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Basic Project Template</h1>
    <br>
</p>

Yii 2 Basic Project Template is a skeleton [Yii 2](http://www.yiiframework.com/) application best for
rapidly creating small projects.

The template contains the basic features including user login/logout and a contact page.
It includes all commonly used configurations that would allow you to focus on adding new
features to your application.

[![Latest Stable Version](https://img.shields.io/packagist/v/yiisoft/yii2-app-basic.svg)](https://packagist.org/packages/yiisoft/yii2-app-basic)
[![Total Downloads](https://img.shields.io/packagist/dt/yiisoft/yii2-app-basic.svg)](https://packagist.org/packages/yiisoft/yii2-app-basic)
[![Build Status](https://travis-ci.org/yiisoft/yii2-app-basic.svg?branch=master)](https://travis-ci.org/yiisoft/yii2-app-basic)

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



REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 5.4.0.


<-----   SNIP   ----->


INSTALLATION
------------

- Clone this repository
- create a new MySQL Database using the "hangaryii2.sql" file in the project root
- Configure the database connections in config/db.php and config/db_gnz.php
- composer update
- navigate to webroot/web/index.php

Login details .....

root / password
user / password

CORE FUNCTIONS
--------------
Waypoints
Aircraft

MODULES
-------
Contests
Members

TO DO
-----
Move "Members" to a new Module
Move "Aircraft" to a new Module

CREATING NEW MODULES
--------------------
All new code is generated using the "Giant" CRUD Generator.

- Navigate to webroot/web/gii
- Configure a new Module using "Giiant Module" - for core functions you do not requore a seprate module
- Build new Models using "Giiant Model"
- Build new CRUD pages using "Giiant CRUD"
