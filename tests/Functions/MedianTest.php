<?php

use Rachan93\Statistiques\Functions\Median;

test('médiane avec nombre de valeurs pair', function () {
    $list = [1, 2, 3, 4];

    $result = Median::calculate($list);

    expect($result)->toBe(2.5);
});

test('médiane avec nombre de valeurs impair', function () {
    $list = [1, 2, 3, 4, 5];

    $result = Median::calculate($list);

    expect($result)->toBe(3.0);
});


test('médiane avec input vide', function () {
    $list = [];

    expect(function() use ($list) {
        Median::calculate($list);
    })->toThrow(Exception::class);
});