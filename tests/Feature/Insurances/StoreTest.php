<?php

use App\Models\User;

beforeEach(function () {
    $this->user = User::factory()->create();

    $this->actingAs($this->user);
});

test('insurance can be stored', function () {

    $data = [
        'name' => 'MAIF',
        'address' => '40 rue du Moulin',
        'postal_code' => '38420',
        'city' => 'Domène',
    ];

    $response = $this->post(route('insurances.store'), $data);

    $response->assertRedirect(route('insurances.index'));

    $response->assertSessionHasNoErrors();

    $this->assertDatabaseHas('insurances', $data);

});

test('name is required', function () {

    $response = $this->post(route('insurances.store'), [
        'name' => '',
    ]);

    $response->assertSessionHasErrors('name');

});

test('guest cannot store insurance', function () {

    auth()->logout();

    $response = $this->post(route('insurances.store'), [
        'name' => 'MAIF',
    ]);

    $response->assertRedirect(route('login'));

});
