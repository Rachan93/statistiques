<?php

use Rachan93\Statistiques\Functions\StandardDeviation;


it('should calculate the standard deviation of an array', function () {
    $list = [2, 4, 4, 4, 5, 5, 7, 9];

    expect(StandardDeviation::calculate($list))->toBe(2.0);
});

it('should throw an exception when the provided array is empty', function () {
    $list = [];

    expect(function() use ($list) {
        StandardDeviation::calculate($list);
    })->toThrow(Exception::class);
});

it('should calculate the standard deviation of an array with negative numbers', function () {
    $list = [-2, -4, -4, -4, -5, -5, -7, -9];

    expect(StandardDeviation::calculate($list))->toBe(2.0);
});

it('should calculate the standard deviation of an array with decimal numbers', function () {
    $list = [1.5, 2.5, 3.5, 4.5, 5.5];

    expect(StandardDeviation::calculate($list))->toBe(1.4142135623730951);
});

it('should calculate the standard deviation of an array with a single value', function () {
    $list = [8];

    expect(StandardDeviation::calculate($list))->toBe(0.0);
});

it('should throw an exception when the provided array contains non-numeric values', function () {
    $list = [1, 2, 'abc', [1,2,3]];

    expect(function() use ($list) {
        StandardDeviation::calculate($list);
    })->toThrow(Exception::class);
});