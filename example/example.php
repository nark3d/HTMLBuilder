<?php

require_once('../vendor/autoload.php');

use BestServedCold\HTMLBuilder\Html;
use BestServedCold\HTMLBuilder\Output;

// Create an element
$p = Html::p()->content('some content');
echo (new Output($p))->get();

// Adding attributes
$div  = Html::div()->class('someClass')->id('someId');
echo (new Output($div))->get();

// Adding children
$div2 = Html::div(
    Html::p()->content('child content')->class('someClass'),
    function () {
        return Html::input()->type('text')->name('test')->disabled();
    }
)->onblur('somefunc();');
echo (new Output($div2))->get();

// Change tab size and depth
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

//  Basic table
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
