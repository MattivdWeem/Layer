# Layer
DBAL/ORM for PHP7


[![Matti vd Weem](http://mattivandeweem.nl/ci/layer-matti.jpg)](http://mattivandeweem.nl/ci/layer-matti.jpg)

|        Tool 	|                                                                                                                                                                                                                                                                  Result / badge                                                                                                                                                                                                                                                                 	|
|------------:	|:-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------:	|
|   Packagist 	| [![Latest Stable,Version](https://poser.pugx.org/mattivdweem/layer/v/stable)](https://packagist.org/packages/mattivdweem/layer) [![Total,Downloads](https://poser.pugx.org/mattivdweem/layer/downloads)](https://packagist.org/packages/mattivdweem/layer) [![Latest Unstable,Version](https://poser.pugx.org/mattivdweem/layer/v/unstable)](https://packagist.org/packages/mattivdweem/layer) [![License](https://poser.pugx.org/mattivdweem/layer/license)](https://packagist.org/packages/mattivdweem/layer) 	|
|   CodeStyle 	|                                                                                                                               [![SensioLabsInsight](https://insight.sensiolabs.com/projects/e3c879ee-a463-49f7-b041-bd5adeac93db/mini.png)](https://insight.sensiolabs.com/projects/e3c879ee-a463-49f7-b041-bd5adeac93db) [![StyleCI](https://styleci.io/repos/36128977/shield)](https://styleci.io/repos/49723740)                                                                                                                              	|
|      Travis 	|                                                                                                                                                                                                                 [![Build Status](https://travis-ci.org/MattivdWeem/layer.svg)](https://travis-ci.org/MattivdWeem/layer)                                                                                                                                                                                                                 	|
| Scrutinizer 	|                                                                                          [![Code Coverage](https://scrutinizer-ci.com/g/MattivdWeem/layer/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/MattivdWeem/layer/?branch=master) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/MattivdWeem/layer/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/MattivdWeem/layer/?branch=master) [![Build Status](https://scrutinizer-ci.com/g/MattivdWeem/layer/badges/build.png?b=master)](https://scrutinizer-ci.com/g/MattivdWeem/layer/build-status/master)                                                                                          	|

## How to use

## Composer.json

    {
        "require": {
            "mattivdweem/layer": "^1.0"
        }
    }



## php example


    <?php

    /**

     */

    declare(strict_types=1);
    require('vendor/autoload.php');

    $connection = new MattivdWeem\Layer\Connection(
        '192.168.99.100',
        'root',
        'password',
        3306
    );

    $connection
        ->setAdapter('\MattivdWeem\Layer\Adapters\PDO')
        ->setDatabase('simpleDatabase')
        ->connect();


    print_r($connection);





## How it works



## Contributing
My code sucks? my strategy sucks? my ideas suck? Just want to add something awesome, or want to make a Code Style change? create a pull request and i'll be happy to accept :).
Make sure your contribution gets trough the Travis, StyleCI and the Sensio Labs Insight tests!



License
====

The MIT License (MIT)

Copyright (c) 2016 Matti van de Weem

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.




