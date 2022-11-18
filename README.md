# Template
Populate template


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
