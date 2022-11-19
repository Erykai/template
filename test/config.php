<?php
$path =  __DIR__ . '/public/theme';
define('TEMPLATE_PATH', $path);
const TEMPLATE_URL_CLIENT = 'client';
const TEMPLATE_URL_DEFAULT = 'default';
const TEMPLATE_URL_DASHBOARD = 'admin';
const TEMPLATE_REGEX_GLOBAL = '/{{([A-Z_]+)}}/';
const TEMPLATE_REGEX_TEXT = '/{{([a-zA-Zà-úÀ-Ú0-9|-|_|?!.,\' ]+)}}/';
const TEMPLATE_REGEX_ROUTE = '/{{#(\/[a-z-]+[\/|[a-z])+#}}/';
