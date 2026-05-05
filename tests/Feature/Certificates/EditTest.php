<?php

use App\Models\User;
use App\Models\Certificate;

beforeEach(function () {
    $this->user = User::factory()->create();

    $this->actingAs($this->user);
});

test('admin can access edit page', function () {

    $this->user->is_admin = true;
    $this->user->save();

    $certificate = Certificate::factory()->create();

    $response = $this->get(route('certificates.edit', $certificate));

    $response->assertStatus(200);

});

test('non admin cannot access edit page', function () {

    $this->user->is_admin = false;
    $this->user->save();

    $certificate = Certificate::factory()->create();

    $response = $this->get(route('certificates.edit', $certificate));

    $response->assertForbidden();

});

test('guest cannot access edit page', function () {

    auth()->logout();

    $certificate = Certificate::factory()->create();

    $response = $this->get(route('certificates.edit', $certificate));

    $response->assertRedirect(route('login'));

});