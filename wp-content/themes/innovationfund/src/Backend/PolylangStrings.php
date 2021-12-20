<?php

$strings = array(
    array('innovations', 'Инновации'),
    array('more', 'Подробнее'),
    array('all', 'Все'),
);

foreach ($strings as $string) {
    pll_register_string('custom_' . $string[0], $string[1], 'Custom');
}