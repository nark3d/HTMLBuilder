<?php

require_once('../vendor/autoload.php');

use BestServedCold\HTMLBuilder\Builder;
use BestServedCold\HTMLBuilder\Output;

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
