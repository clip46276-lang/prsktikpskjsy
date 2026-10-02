<?php

use App\Models\User;

test('authenticated users can view mahasiswa data', function () {
    $user = User::factory()->create(['role' => 'user']);

    $this->actingAs($user)
        ->get(route('mahasiswa.index'))
        ->assertOk();
});

test('only admins can access mahasiswa management pages', function () {
    $user = User::factory()->create(['role' => 'user']);

    $this->actingAs($user)
        ->get(route('mahasiswa.create'))
        ->assertForbidden();
});

test('admins can access mahasiswa management pages', function () {
    $admin = User::factory()->create(['role' => 'admin']);

    $this->actingAs($admin)
        ->get(route('mahasiswa.create'))
        ->assertOk();
});

test('guests cannot view mahasiswa data', function () {
    $this->get(route('mahasiswa.index'))
        ->assertRedirect(route('login'));
});