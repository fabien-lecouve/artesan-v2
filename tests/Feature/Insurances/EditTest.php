<?php

use App\Models\User;
use App\Models\Insurance;

beforeEach(function () {
    $this->user = User::factory()->create();

    $this->actingAs($this->user);
});

test('edit page is accessible', function () {

    $insurance = Insurance::factory()->create();

    $response = $this->get(route('insurances.edit', $insurance));

    $response->assertStatus(200);

});

test('guest cannot access edit page', function () {

    auth()->logout();

    $insurance = Insurance::factory()->create();

    $response = $this->get(route('insurances.edit', $insurance));

    $response->assertRedirect(route('login'));

});