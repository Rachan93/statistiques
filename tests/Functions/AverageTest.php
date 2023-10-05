<?php

use Rachan93\Statistiques\Functions\Average;


test('moyenne', function () {
    $list = [10, 15, 14, 16, 20];

    expect(Average::calculate($list))->toBe(15.0);
});


test('moyenne sans input', function () {
    $list = [];

    expect(function() use ($list) {
        Average::calculate($list);
    })->toThrow(Exception::class);
});