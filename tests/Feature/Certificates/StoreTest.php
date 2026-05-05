<?php

use App\Models\User;

beforeEach(function () {
    $this->user = User::factory()->create();

    $this->actingAs($this->user);
});

test('admin can store certificate', function () {

    $this->user->is_admin = true;
    $this->user->save();

    $data = [
        'code' => 'maif',
        'label' => 'Maif'
    ];

    $response = $this->post(route('certificates.store'), $data);

    $response->assertRedirect(route('certificates.index'));

    $response->assertSessionHasNoErrors();

    $this->assertDatabaseHas('certificates', $data);

});

test('non admin cannot store certificate', function () {

    $this->user->is_admin = false;
    $this->user->save();

    $data = [
        'code' => 'maif',
        'label' => 'Maif'
    ];

    $response = $this->post(route('certificates.store'), $data);

    $response->assertForbidden();
});

test('fields are required', function () {

    $this->user->is_admin = true;
    $this->user->save();

    $response = $this->post(route('certificates.store'), [
        'code' => '',
        'label' => '',
    ]);

    $response->assertSessionHasErrors(['code', 'label']);
});

test('guest cannot store certificate', function () {

    auth()->logout();

    $response = $this->post(route('certificates.store'), [
        'code' => 'maif',
        'label' => 'Maif'
    ]);

    $response->assertRedirect(route('login'));
});
