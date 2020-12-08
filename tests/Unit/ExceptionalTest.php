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

test('ExceptionCanBeThrownInTest', function (): void {
    $this->expectException('InvalidArgumentException');
    $this->expectExceptionMessage('CODE1');

    throw new \InvalidArgumentException('CODE1');
});

test('SkippedTest', function (): void {
    $this->markTestSkipped('Skipped tests do not cause Exceptions in Listener');
});

test('IncompleteTest', function (): void {
    $this->markTestIncomplete('Incomplete tests do not cause Exceptions in Listener');
});
