Snowcap Mailjet Bundle
==================================

The Snowcap Mailjet Bundle is a bundle used at Snowcap to help us with the Mailjet API:

It includes an refactored version of Mailjet API client (found on https://www.mailjet.com/plugin/php-mailjet.class.php) with:

* PSR-0 standards
* New constants
* A bundle configuration

## Prerequisites

This version of the bundle requires Symfony 2.1+.

## Installation

### Download SnowcapMailjetBundle using composer

Add SnowcapCoreBundle in your composer.json:

```js
{
    "require": {
        "snowcap/mailjet-bundle": "*"
    }
}
```

Now tell composer to download the bundle by running the command:

``` bash
$ php composer.phar update snowcap/mailjet-bundle
```

Composer will install the bundle to your project's `vendor/snowcap` directory.

### Enable the Bundle


Enable the bundle in the kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Snowcap\MailjetBundle\SnowcapMailjetBundle(),
    );
}
```