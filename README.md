# Template
Populate template

[![Maintainer](http://img.shields.io/badge/maintainer-@alexdeovidal-blue.svg?style=flat-square)](https://instagram.com/alexdeovidal)
[![Source Code](http://img.shields.io/badge/source-erykai/template-blue.svg?style=flat-square)](https://github.com/erykai/template)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/erykai/template.svg?style=flat-square)](https://packagist.org/packages/erykai/template)
[![Latest Version](https://img.shields.io/github/release/erykai/template.svg?style=flat-square)](https://github.com/erykai/template/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Quality Score](https://img.shields.io/scrutinizer/g/erykai/template.svg?style=flat-square)](https://scrutinizer-ci.com/g/erykai/template)
[![Total Downloads](https://img.shields.io/packagist/dt/erykai/template.svg?style=flat-square)](https://packagist.org/packages/erykai/template)


create config.php
```php
$path =  __DIR__ . '/public/theme';
define('TEMPLATE_PATH', $path);
const TEMPLATE_URL = 'https://lvh.me';
const TEMPLATE_CLIENT = 'client';
const TEMPLATE_DEFAULT = 'default';
const TEMPLATE_DASHBOARD = 'admin';
const TEMPLATE_REGEX_GLOBAL = '/{{([A-Z_]+)}}/';
const TEMPLATE_REGEX_TEXT = '/{{([a-zA-Zà-úÀ-Ú0-9|-|_|?!.,\' ]+)}}/';
const TEMPLATE_REGEX_ROUTE = '/{{#(\/[a-z-]+[\/|[a-z])+#}}/';
```
create translate.php
```php
const TRANSLATE_PATH = 'translate';
const TRANSLATE_API_KEY = null;
const TRANSLATE_API_URL = 'https://translate.erykia.com/api/v1';
const TRANSLATE_DEFAULT = 'pt-BR';
```

example create path "public/theme/admin/index.html"
insert in index.html 
```html
<html lang="{{LANG}}">
<link rel="stylesheet" href="{{TEMPLATE_URL}}/public/theme/{{TEMPLATE_DASHBOARD}}/assets/css/style.css">
<script src="{{TEMPLATE_URL}}/public/theme/{{TEMPLATE_DASHBOARD}}/assets/script.js"></script>
<h1>{{Hello World}}</h1>
<a href="{{TEMPLATE_URL}}{{#/about#}}">{{About}}</a>
<a href="{{TEMPLATE_URL}}{{#/client/login#}}">{{Login}}</a>\
```
and "public/theme/admin/pages/home.html"
insert in home.html
```html
<h2>{{Home}}</h2>
<a href="{{TEMPLATE_URL}}{{#/contact#}}">{{Contact}}</a>
```

```php
require "config.php";
require "translate.php";
require "vendor/autoload.php";
use Erykai\Template\Template;
$T = new Template(TEMPLATE_DASHBOARD);

$T->nav("index","pages/home");
echo $T->getIndex();
```

## Contribution

All contributions will be analyzed, if you make more than one change, make the commit one by one.

## Support

If you find defaults send an email reporting to webav.com.br@gmail.com.

## Credits

- [Alex de O. Vidal](https://github.com/alexdeovidal) (Developer)
- [All contributions](https://github.com/erykai/template/contributors) (Contributors)

## License

The MIT License (MIT). Please see [License](https://github.com/erykai/template/LICENSE) for more information.
