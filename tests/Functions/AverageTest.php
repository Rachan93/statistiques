<?php

use Rachan93\Statistiques\Functions\Average;


it('should calculate the average of an array of numbers', function () {
    $list = [10, 15, 14, 16, 20];

    expect(Average::calculate($list))->toBe(15.0);
});

it('should throw an exception when the provided array is empty', function () {
    $list = [];

    expect(function() use ($list) {
        Average::calculate($list);
    })->toThrow(Exception::class);
});

it('should throw an exception if the provided array contains non-numeric values', function () {
    $list = [1, 2, 'abc', [1,2,3]];

    expect(function() use ($list) {
        Average::calculate($list);
    })->toThrow(Exception::class);
});

it('should calculate the average of negative numbers', function () {
    $list = [-5, -10, -15, -20, -25];

    expect(Average::calculate($list))->toBe(-15.0);
});

it('should calculate the average of large numbers', function () {
    $list = [1000000, 2000000, 3000000, 4000000, 5000000];

    expect(Average::calculate($list))->toBe(3000000.0);
});

it('should calculate the average of a single number', function () {
    $list = [8];

    expect(Average::calculate($list))->toBe(8.0);
});

it('should calculate the average of decimal numbers', function () {
    $list = [1.5, 2.5, 3.5, 4.5, 5.5];

    expect(Average::calculate($list))->toBe(3.5);
});