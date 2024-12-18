<?php

test('example', function () {
    expect(true)->toBeTrue();
});

test('the application returns a successful response', function () {
    $response = $this->get('/items');

    $response->assertStatus(200);
});

