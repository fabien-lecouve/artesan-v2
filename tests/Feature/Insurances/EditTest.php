<?php

use App\Models\User;
use App\Models\Insurance;

beforeEach(function () {
    $this->user = User::factory()->create();

    $this->actingAs($this->user);
});

test('admin can access edit page', function () {

    $this->user->is_admin = true;
    $this->user->save();

    $insurance = Insurance::factory()->create();

    $response = $this->get(route('insurances.edit', $insurance));

    $response->assertStatus(200);

});

test('non admin cannot access edit page', function () {

    $this->user->is_admin = false;
    $this->user->save();

    $insurance = Insurance::factory()->create();

    $response = $this->get(route('insurances.edit', $insurance));

    $response->assertForbidden();

});

test('guest cannot access edit page', function () {

    auth()->logout();

    $insurance = Insurance::factory()->create();

    $response = $this->get(route('insurances.edit', $insurance));

    $response->assertRedirect(route('login'));

});