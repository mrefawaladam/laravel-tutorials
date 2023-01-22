<?php

function get_user_name($id) {
    $user = App\Models\User::find($id);
    return $user->first_name;
}