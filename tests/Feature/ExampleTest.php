<?php

declare(strict_types=1);

use LaravelPaper\DjotDriver\DjotDriver;

it('resolves the singleton', function () {
    expect(app(DjotDriver::class))->toBeInstanceOf(DjotDriver::class);
});

it('returns the same instance from the container', function () {
    expect(app(DjotDriver::class))->toBe(app(DjotDriver::class));
});

it('merges the package config', function () {
    expect(config('laravel-paper-djot-driver.placeholder'))->toBe('default');
});
