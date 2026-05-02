<?php

use App\Models\User;
use App\Models\Insurance;

beforeEach(function () {
    $this->user = User::factory()->create();

    $this->actingAs($this->user);
});

test('index page is accessible', function () {

    $response = $this->get(route('insurances.index'));

    $response->assertStatus(200);

});

test('index page displays insurances', function () {

    $insurance = Insurance::factory()->create([
        'name' => 'MAIF',
    ]);

    $response = $this->get(route('insurances.index'));

    $response->assertViewHas('insurances', function ($insurances) use ($insurance) {
        return $insurances->contains($insurance);
    });

    $response->assertSee('MAIF');

});

test('guest cannot access index page', function () {

    auth()->logout();

    $response = $this->get(route('insurances.index'));

    $response->assertRedirect(route('login'));

});