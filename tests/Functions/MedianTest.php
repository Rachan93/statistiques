<?php

use Rachan93\Statistiques\Functions\Median;

it('should calculate the median of an array containing an even number of values', function () {
    $list = [1, 2, 3, 4];

    $result = Median::calculate($list);

    expect($result)->toBe(2.5);
});

it('should calculate the median of an array containing an odd number of values', function () {
    $list = [1, 2, 3, 4, 5];

    $result = Median::calculate($list);

    expect($result)->toBe(3.0);
});


it('should throw an error if the provided array is empty', function () {
    $list = [];

    expect(function() use ($list) {
        Median::calculate($list);
    })->toThrow(Exception::class);
});

it('should throw an exception if the provided array contains only one value', function () {
    $list = [5];

    expect(function() use ($list) {
        Median::calculate($list);
    })->toThrow(Exception::class);
});

it('should calculate the median of an array with negative values', function () {
    $list = [-5, -10, -15, -20, -25];

    $result = Median::calculate($list);

    expect($result)->toBe(-15.0);
});

it('should throw an exception if the provided array contains non-numeric values', function () {
    $list = [1, 2, 'abc', [1,2,3]];

    expect(function() use ($list) {
        Median::calculate($list);
    })->toThrow(Exception::class);
});

