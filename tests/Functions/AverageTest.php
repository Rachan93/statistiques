<?php

use Rachan93\Statistiques\Functions\Average;


test('moyenne avec input standard', function () {
    $list = [10, 15, 14, 16, 20];

    expect(Average::calculate($list))->toBe(15.0);
});


test('moyenne avec input vide', function () {
    $list = [];

    expect(function() use ($list) {
        Average::calculate($list);
    })->toThrow(Exception::class);
});

/*test('moyenne avec input égal à 0', function () {
    $list = [0];

    expect(Average::calculate($list))->toBe(0.0);
});*/
test('moyenne avec input mixte', function () {
    $list = ['a', [1,2,3], 15];

    expect(Average::calculate($list))->toBe(5.0);
});
