<?php

use App\Models\User;
use App\Models\Certificate;

beforeEach(function () {
    $this->user = User::factory()->create();

    $this->actingAs($this->user);
});

test('admin can update certificate', function () {

    $this->user->is_admin = true;
    $this->user->save();

    $certificate = Certificate::factory()->create([
        'code' => 'maif',
        'label' => 'Maif'
    ]);

    $data = [
        'code' => 'kikoo',
        'label' => 'kikoo'
    ];

    $response = $this->put(route('certificates.update', $certificate), $data);

    $response->assertRedirect(route('certificates.index'));

    $this->assertDatabaseHas('certificates', $data);
});

test('non admin cannot update certificate', function () {

    $this->user->is_admin = false;
    $this->user->save();

    $certificate = Certificate::factory()->create();

    $response = $this->put(route('certificates.update', $certificate), [
        'code' => 'maif',
        'label' => 'Maif'
    ]);

    $response->assertForbidden();
});

test('fields are required to update certificate', function () {

    $this->user->is_admin = true;
    $this->user->save();

    $certificate = Certificate::factory()->create();

    $response = $this->put(route('certificates.update', $certificate), [
        'code' => '',
        'label' => '',
    ]);

    $response->assertSessionHasErrors(['code', 'label']);
});


test('guest cannot update certificate', function () {

    auth()->logout();

    $certificate = Certificate::factory()->create();

    $response = $this->put(route('certificates.update', $certificate), [
        'code' => 'maif',
        'label' => 'Maif'
    ]);

    $response->assertRedirect(route('login'));

});