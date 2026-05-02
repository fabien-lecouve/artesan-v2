<?php

use App\Models\User;

beforeEach(function () {
    $this->user = User::factory()->create();

    $this->actingAs($this->user);
});

test('create page is accessible', function () {

    $response = $this->get(route('insurances.create'));

    $response->assertStatus(200);

});

test('guest cannot access create page', function () {

    auth()->logout();

    $response = $this->get(route('insurances.create'));

    $response->assertRedirect(route('login'));

});