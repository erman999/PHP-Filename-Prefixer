# PHP-Filename-Prefixer


Parses and concatenates filename with given text to desired location. You can place your text at start, before extension and end of filename.

## Description

```php
filename_prefixer ( string $filename , string $prefix , string $location = 'start' ) : string
```


## Examples



### Short Usage (Default location is prefix)
```php
filename_prefixer('Sample_image.gif', 'XXX_');
// Output: XXX_Sample_image.gif
```


### Usage with Path
```php
filename_prefixer('../images/Sample_image.gif', 'XXX_', 'start');
// Output: ../images/XXX_Sample_image.gif
```


### Usage with Location
```php
filename_prefixer('Sample_image.gif', '_XXX', 'beforeExt');
// Output: Sample_image_XXX.gif
```


### Usage with Path and Location (Before Extension)
```php
filename_prefixer('../images/Sample_image.gif', '_XXX', 'beforeExt');
// Output: ../images/Sample_image_XXX.gif
```


### Usage with Path and Location (End)
```php
filename_prefixer('../images/Sample_image.gif', '_XXX', 'end');
// Output: ../images/Sample_image.gif_XXX
```

