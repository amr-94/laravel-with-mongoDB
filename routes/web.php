<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    Post::create(['title' => 'Test 2 MongoDB', 'body' => 'This is a test 2', 'name' => 'Ahmed']);
    return Post::all();
});

Route::get('/user', function () {
    User::create(['name' => 'Ahmed', 'email' => 'ahmed@example.com', 'password' => bcrypt('password')]);
    return User::all();
});

//Embedding One-to-One Relationship
Route::get('/test-one-to-one', function () {
    $user = User::create(['name' => 'Amr', 'email' => 'amr@example.com']);
    $user->profile()->create([
        'user_id' => $user->_id,
        'bio' => 'Software developer',
        'phone' => '123456789'
    ]);

    // استرجاع البيانات
    $userWithProfile = User::with('profile')->find($user->_id);
    return response()->json($userWithProfile);
});

// Embedding One-to-One Relationship - Alternative Approach
Route::get('/test-embed', function () {
    $user = User::create([
        'name' => 'embed Amr',
        'email' => 'embed-amr@example.com',
        'profile' => [
            'bio' => 'Software',
            'phone' => '000000'
        ]
    ]);
    return response()->json($user);
});
// Retrieve User with Embedded Profile
Route::get('/get-embedded-user', function () {
    $user = User::find('someGeneratedId'); // استبدل someGeneratedId بالـ _id الفعلي
    return response()->json($user);
});


// Referencing One-to-One Relationship
Route::get('/test-reference', function () {
    $user = User::create([
        'name' => 'Amr',
        'email' => 'amr@example.com'
    ]);
    $user->profile()->create([
        'user_id' => $user->_id,
        'bio' => 'Software developer',
        'phone' => '123456789'
    ]);
    $userWithProfile = User::with('profile')->find($user->_id);
    return response()->json($userWithProfile);
});
// Retrieve User with Referenced Profile
Route::get('/get-referenced-user', function () {
    $user = User::with('profile')->find('someUserId'); // استبدل someUserId بالـ _id الفعلي
    return response()->json($user);
});
