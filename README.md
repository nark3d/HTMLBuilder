[![Build Status](https://travis-ci.org/nark3d/HTMLBuilder.svg?branch=master)](https://travis-ci.org/nark3d/HTMLBuilder)
[![Build Status](https://scrutinizer-ci.com/g/nark3d/HTMLBuilder/badges/build.png?b=master)](https://scrutinizer-ci.com/g/nark3d/HTMLBuilder/build-status/master)
[![Code Coverage](https://scrutinizer-ci.com/g/nark3d/HTMLBuilder/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/nark3d/HTMLBuilder/?branch=master)
[![Latest Stable Version](https://img.shields.io/packagist/v/best-served-cold/html-builder.svg)](https://packagist.org/packages/best-served-cold/html-builder)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/nark3d/HTMLBuilder/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/nark3d/HTMLBuilder/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/b8e2173f-3fe1-4fd5-99c2-547d3b33aef6/mini.png)](https://insight.sensiolabs.com/projects/b8e2173f-3fe1-4fd5-99c2-547d3b33aef6)


# HTML Builder

Basic HTML builder for HTML5.  We're not suggesting that you use this to build entire pages, but occasionally there is 
a need to create HTML programatically, like a table, and that's what this is for!

## Install

```php
composer require best-served-cold/html-builder
```

## Usage

Call in the Builder and Output classes:

```php
use BestServedCold\HTMLBuilder\Html;
use BestServedCold\HTMLBuilder\Output;

```

### Create an element

```php 
$p = Html::p()->content('some content');
echo (new Output($p))->get(); 

```
Returns:
```html
<p>
    some content
</p>

```

### Adding attributes
```php
$div  = Html::div()->class('someClass')->id('someId');
echo (new Output($div))->get();

```
Returns:
```html
<div class="someClass" id="someId">
</div>

```

### Adding children
```php
$div2 = Html::div(
    Html::p()->content('child content')->class('someClass'),
    function () {
        return Html::input()
            ->type('text')
            ->name('test')
            ->disabled();
    }
)->onblur('somefunc();');
echo (new Output($div2))->get();
```
NB: Accepts arrays as well as Closures.

Returns:
```html
<div onblur="someFunc();">
    <p class="someClass">
        child content
    </p>
    <input type="text" name="test" disabled>
</div>
```

### Change tab size and depth
```php
$div3 = Html::div(
    Html::p(
        Html::span()
            ->data('bob')
            ->content('span content')
    ),
    Html::comment(' this is some comment ')

);
Output::setTabSize(2); // persistent
Output::setDepth(2); // persistent
echo (new Output($div3))->get();
Output::setTabSize(4);
Output::setDepth(0);
```

Returns:
```html
    <div>
      <p>
        <span data="bob">
          span content
        </span>
      </p>
      <!-- this is some comment -->
    </div>
```
### Basic table
```php
$table = Html::table(
    Html::thead(
        Html::tr(
            Html::th()->content('mary')->class('woman'),
            Html::th()->content('susan')->class('woman'),
            Html::th()->content('harry')->scope('col')
        )
    ),
    Html::tbody(
        Html::tr(
            Html::td()->content('margret')->class('woman'),
            Html::td()->content('bob')->onfocus('someFunction()'),
            Html::td()->content('skyscraper')->id('oddOneOut')
        ),
        Html::tr(
            Html::td()->content('brian')->colspan(3)
        )
    )
)->attribute('someNonStandardAttribute', 'mary');
echo (new Output($table))->get();
```

Returns:
```html
<table someNonStandardAttribute="mary">
    <thead>
        <tr>
            <th class="woman">
                mary
            </th>
            <th class="woman">
                susan
            </th>
            <th scope="col">
                harry
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="woman">
                margret
            </td>
            <td onfocus="someFunction()">
                bob
            </td>
            <td id="oddOneOut">
                skyscraper
            </td>
        </tr>
        <tr>
            <td colspan="3">
                brian
            </td>
        </tr>
    </tbody>
</table>
```
### Examples
To run the examples:
```shell
$ cd example
$ php ./example.php
```

