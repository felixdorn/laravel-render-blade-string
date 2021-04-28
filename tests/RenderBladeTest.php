<?php

use Orchestra\Testbench\TestCase;

uses(TestCase::class);

it('renders', function () {
    // We do not test every directive that Blade offers but if those works
    // then the whole thing probably works as well.
    $blade = <<<'BLADE'
    @if (true)
        1
    @endif

    @for ($i = 0; $i < 1; $i++)
        2
    @endfor

    {{ $three }}

    {!! $four !!}

    {{-- A comment --}}

    @foreach([5,6,7] as $key => $value)
        {{ $value }}
    @endforeach

    @isset($eight)
        {{ $eight }}
    @endisset

    9

    10
BLADE;

    $rendered = __renderBlade($blade, [
        'three' => 3,
        'four'  => 4,
        'eight' => 8,
    ]);

    expect(preg_replace('/\s+/', '', $rendered))->toBe('12345678910');
});
