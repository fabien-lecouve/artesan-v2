<?php

use App\Models\User;
use App\Models\Certificate;

beforeEach(function () {
    $this->user = User::factory()->create();

    $this->actingAs($this->user);
});

test('admin can access index page', function () {

    $this->user->is_admin = true;
    $this->user->save();

    $response = $this->get(route('certificates.index'));

    $response->assertStatus(200);

});

test('non admin cannot access index page', function () {

    $this->user->is_admin = false;
    $this->user->save();

    $response = $this->get(route('certificates.index'));

    $response->assertForbidden();

});

test('index page displays certificates', function () {

    $this->user->is_admin = true;
    $this->user->save();

    $certificate = Certificate::factory()->create([
        'code' => 'kikoo_la',
        'label' => 'Kikoo la'
    ]);

    $response = $this->get(route('certificates.index'));

    $response->assertViewHas('certificates', function ($certificates) use ($certificate) {
        return $certificates->contains($certificate);
    });

    $response->assertSee('kikoo_la');

});

test('guest cannot access index page', function () {

    auth()->logout();

    $response = $this->get(route('certificates.index'));

    $response->assertRedirect(route('login'));

});