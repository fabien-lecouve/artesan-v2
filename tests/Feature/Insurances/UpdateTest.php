<?php

use App\Models\User;
use App\Models\Insurance;

beforeEach(function () {
    $this->user = User::factory()->create();

    $this->actingAs($this->user);
});

test('admin can update insurance', function () {

    $this->user->is_admin = true;
    $this->user->save();

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

    $this->assertDatabaseHas('insurances', $data);
});

test('name is required to update insurance', function () {

    $this->user->is_admin = true;
    $this->user->save();

    $insurance = Insurance::factory()->create();

    $response = $this->put(route('insurances.update', $insurance), [
        'name' => '',
    ]);

    $response->assertSessionHasErrors('name');

});

test('non admin cannot update insurance', function () {

    $this->user->is_admin = false;
    $this->user->save();

    $insurance = Insurance::factory()->create();

    $response = $this->put(route('insurances.update', $insurance), [
        'name' => 'AXA',
    ]);

    $response->assertForbidden();
});


test('guest cannot update insurance', function () {

    auth()->logout();

    $insurance = Insurance::factory()->create();

    $response = $this->put(route('insurances.update', $insurance), [
        'name' => 'AXA',
    ]);

    $response->assertRedirect(route('login'));

});