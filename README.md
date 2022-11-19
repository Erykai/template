# Template
Populate template

[![Maintainer](http://img.shields.io/badge/maintainer-@alexdeovidal-blue.svg?style=flat-square)](https://instagram.com/alexdeovidal)
[![Source Code](http://img.shields.io/badge/source-erykai/template-blue.svg?style=flat-square)](https://github.com/erykai/template)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/erykai/template.svg?style=flat-square)](https://packagist.org/packages/erykai/template)
[![Latest Version](https://img.shields.io/github/release/erykai/template.svg?style=flat-square)](https://github.com/erykai/template/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Quality Score](https://img.shields.io/scrutinizer/g/erykai/template.svg?style=flat-square)](https://scrutinizer-ci.com/g/erykai/template)
[![Total Downloads](https://img.shields.io/packagist/dt/erykai/template.svg?style=flat-square)](https://packagist.org/packages/erykai/template)


define const
```php
define("TEMPLATE_DIR", __DIR__ . "/public/theme");
```
example create path "public/theme/admin/index.html"
insert in index.html 
```html
<h1>Hello</h1>
{{PAGE}}
```
and "public/theme/admin/pages/home.html"
insert in home.html
```html
<h2>home</h2>
```

```php
require "config.php";
require "vendor/autoload.php";

$T = new \Erykai\Template\Template("admin");

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
