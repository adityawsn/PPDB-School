<?php

it('returns a successful response', function () {
it('returns a successful response for home page', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

it('returns a successful response for profile page', function () {
    $response = $this->get('/profile');

    $response->assertStatus(200);
});
