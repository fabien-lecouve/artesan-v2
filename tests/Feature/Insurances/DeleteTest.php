<?php

use App\Models\User;
use App\Models\Insurance;

beforeEach(function () {
    $this->user = User::factory()->create();

    $this->actingAs($this->user);
});

test('insurance can be soft deleted', function () {

    $insurance = Insurance::factory()->create();

    $response = $this->delete(route('insurances.destroy', $insurance));

    $response->assertRedirect(route('insurances.index'));

    $this->assertSoftDeleted($insurance);

});

test('guest cannot delete insurance', function () {

    auth()->logout();

    $insurance = Insurance::factory()->create();

    $response = $this->delete(route('insurances.destroy', $insurance));

    $response->assertRedirect(route('login'));

});
