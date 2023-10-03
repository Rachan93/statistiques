<?php

use Rachan93\Statistiques\Functions\Average;


test('moyenne', function () {
    $list = [10, 15, 14, 16, 20];

    expect(Average::calculate($list))->toBe(15.0);
});
