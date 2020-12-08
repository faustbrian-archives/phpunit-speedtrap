<?php

declare(strict_types=1);

/*
 * This file is part of PHPUnit SpeedTrap.
 *
 * (c) Konceiver Oy <info@konceiver.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

function extendTime(int $ms)
{
    usleep($ms * 1000);
}

test('FastTest', function (): void {
    $this->assertTrue(true);
});

test('SlowTests', function (): void {
    extendTime(300);

    $this->assertTrue(true);
});

test('AnotherSlowTests', function (): void {
    extendTime(500);

    $this->assertTrue(true);
});

test('LongEndToEndTest', function (): void {
    extendTime(500);

    $this->assertTrue(true);
});

test('WithDataProvider', function (int $time): void {
    extendTime($time);

    $this->assertTrue(true);
})->with([800, 700, 600]);

test('CanSetLowerSlowThreshold', function (): void {
    extendTime(10);

    $this->assertTrue(true);
});

test('CanSetHigherSlowThreshold', function (): void {
    extendTime(600);

    $this->assertTrue(true);
});
