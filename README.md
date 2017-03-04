[![Build Status](https://travis-ci.org/nark3d/HTMLBuilder.svg?branch=master)](https://travis-ci.org/nark3d/HTMLBuilder)
[![Build Status](https://scrutinizer-ci.com/g/nark3d/HTMLBuilder/badges/build.png?b=master)](https://scrutinizer-ci.com/g/nark3d/HTMLBuilder/build-status/master)
[![Code Coverage](https://scrutinizer-ci.com/g/nark3d/HTMLBuilder/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/nark3d/HTMLBuilder/?branch=master)
[![Latest Stable Version](https://img.shields.io/packagist/v/best-served-cold/htmlbuilder.svg)](https://packagist.org/packages/best-served-cold/htmlbuilder)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/nark3d/HTMLBuilder/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/nark3d/HTMLBuilder/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/b8e2173f-3fe1-4fd5-99c2-547d3b33aef6/mini.png)](https://insight.sensiolabs.com/projects/b8e2173f-3fe1-4fd5-99c2-547d3b33aef6)


# HTML Builder

Basic HTML builder for HTML5.  We're not suggesting that you use this to build entire pages, but occasionally there is a need to create HTML programatically, like a table, and that's what this is for!

## Install

```php
composer require bestservedcold/htmlbuilder
```

## Usage

Call in the Builder and Output classes:

```php
use BestServedCold\HTMLBuilder\Builder;
use BestServedCold\HTMLBuilder\Output;

```

### Create an element

```php 
$table = Builder::table();
echo (new Output($table))->get(); 

```
Returns:
```html
<table>

</table>

```

### Create a bunch of stuff
```php
$table = Builder::table()->attribute('class', 'someClass')->child(
    Builder::thead()->child(
        Builder::tr()->child(
            Builder::th()->value('column1')
        )->child(
            Builder::th()->value('column2')
        )
    )
)->child(
    Builder::tbody()->child(
        Builder::tr()->child(
            Builder::td()->value('bob')
        )->child(
            Builder::td()->value('mary')
        )
    )->child(
        Builder::tr()->child(
            Builder::td()->value('harry')
        )->child(
            Builder::td()->value('susan')
        )
    )
)->child(
    Builder::comment(' All done here ')
);

echo (new Output($table))->get();

```
