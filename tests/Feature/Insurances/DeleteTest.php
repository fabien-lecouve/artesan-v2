<?php

use App\Models\User;
use App\Models\Insurance;

beforeEach(function () {
    $this->user = User::factory()->create();

    $this->actingAs($this->user);
});

test('admin can soft delete insurance', function () {

    $this->user->is_admin = true;
    $this->user->save();

    $insurance = Insurance::factory()->create();

    $response = $this->delete(route('insurances.destroy', $insurance));

    $response->assertRedirect(route('insurances.index'));

    $this->assertSoftDeleted($insurance);

});

test('non admin cannot delete insurance', function () {

    $this->user->is_admin = false;
    $this->user->save();

    $insurance = Insurance::factory()->create();

    $response = $this->delete(route('insurances.destroy', $insurance));

    $response->assertForbidden();

});

test('guest cannot delete insurance', function () {

    auth()->logout();

    $insurance = Insurance::factory()->create();

    $response = $this->delete(route('insurances.destroy', $insurance));

    $response->assertRedirect(route('login'));

});
