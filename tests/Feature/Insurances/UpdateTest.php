<?php

use App\Models\User;
use App\Models\Insurance;

beforeEach(function () {
    $this->user = User::factory()->create();

    $this->actingAs($this->user);
});

test('insurance can be updated', function () {

    $insurance = Insurance::factory()->create([
        'name' => 'MAIF',
    ]);

    $data = [
        'name' => 'AXA',
        'address' => '10 rue Victor Hugo',
        'postal_code' => '38000',
        'city' => 'Grenoble',
    ];

    $response = $this->put(route('insurances.update', $insurance), $data);

    $response->assertRedirect(route('insurances.index'));

    $response->assertSessionHasNoErrors();

    $this->assertDatabaseHas('insurances', $data);

});

test('name is required to update insurance', function () {

    $insurance = Insurance::factory()->create();

    $response = $this->put(route('insurances.update', $insurance), [
        'name' => '',
    ]);

    $response->assertSessionHasErrors('name');

});

test('guest cannot update insurance', function () {

    auth()->logout();

    $insurance = Insurance::factory()->create();

    $response = $this->put(route('insurances.update', $insurance), [
        'name' => 'AXA',
    ]);

    $response->assertRedirect(route('login'));

});