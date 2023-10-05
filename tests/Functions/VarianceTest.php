<?php

use Rachan93\Statistiques\Functions\Variance;

test('variance avec input standard', function () {
    $list = [2, 4, 4, 4, 5, 5, 7, 9];

    $result = Variance::calculate($list);

    expect($result)->toBe(4.0); 
});

test('variance avec input vide', function () {
    $list = [];

    expect(function() use ($list) {
        Variance::calculate($list);
    })->toThrow(Exception::class);
});


