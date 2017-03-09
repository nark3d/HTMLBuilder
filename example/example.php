<?php

require_once('../vendor/autoload.php');

use BestServedCold\HTMLBuilder\Html;
use BestServedCold\HTMLBuilder\Output;
use BestServedCold\HTMLBuilder\Output\Format;

$html = Html::div(
    Html::p(
        Html::i(
            Html::span()->content('some span content'),
            Html::span()->content('some span content')
        )->content('some italics'),

        Html::em()->content('some ems')
    )->content(
        'this is a paragraph',
        'this comes after the italics',
        'this comes after the em'
    )
        ->id('someId')
        ->class('someClass'),
    Html::form([
        Html::label()->data('someData', 'bob')->for('span')->content('some content in the label'),
        Html::input()->data('withoutValue')->name('thisIsAName')->disabled()
    ]),
    function () {
        return Html::a()->content('some content');
    },
    Html::comment(' When all\'s said and done... ')
);

print_r((new Output($html))->get());


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

Output::setTabSize(2);
Output::setDepth(2);

echo (new Output($table))->get();
