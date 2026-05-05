<?php

use App\Models\User;
use App\Models\Certificate;

beforeEach(function () {
    $this->user = User::factory()->create();

    $this->actingAs($this->user);
});

test('admin can soft delete certificate', function () {

    $this->user->is_admin = true;
    $this->user->save();

    $certificate = Certificate::factory()->create();

    $response = $this->delete(route('certificates.destroy', $certificate));

    $response->assertRedirect(route('certificates.index'));

    $this->assertSoftDeleted($certificate);

});

test('non admin cannot delete certificate', function () {

    $this->user->is_admin = false;
    $this->user->save();

    $certificate = Certificate::factory()->create();

    $response = $this->delete(route('certificates.destroy', $certificate));

    $response->assertForbidden();

});

test('guest cannot delete certificate', function () {

    auth()->logout();

    $certificate = Certificate::factory()->create();

    $response = $this->delete(route('certificates.destroy', $certificate));

    $response->assertRedirect(route('login'));

});
