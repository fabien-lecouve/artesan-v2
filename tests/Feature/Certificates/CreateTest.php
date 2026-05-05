<?php

use App\Models\User;

beforeEach(function () {
    $this->user = User::factory()->create();

    $this->actingAs($this->user);
});

test('admin can access create page', function () {

    $this->user->is_admin = true;
    $this->user->save();

    $response = $this->get(route('certificates.create'));

    $response->assertStatus(200);

});

test('non admin cannot access create page', function () {

    $this->user->is_admin = false;
    $this->user->save();
    
    $response = $this->get(route('certificates.create'));

    $response->assertForbidden();

});

test('guest cannot access create page', function () {

    auth()->logout();

    $response = $this->get(route('certificates.create'));

    $response->assertRedirect(route('login'));

});