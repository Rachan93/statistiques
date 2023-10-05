<?php

use Rachan93\Statistiques\Functions\StandardDeviation;


test('écart-type avec input standard', function () {
    $list = [2, 4, 4, 4, 5, 5, 7, 9];

    

    

    expect(StandardDeviation::calculate($list))->toBe(2.0);
});

test('écart-type avec tableau vide', function () {
    $list = [];

    expect(function() use ($list) {
        StandardDeviation::calculate($list);
    })->toThrow(Exception::class);
});

