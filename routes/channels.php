<?php

use App\Models\User;
use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('count-channel', fn() => true);

Broadcast::channel('joining-channel', function (User $user) {
    return ['id' => $user->id, 'name' => $user->name];
});
