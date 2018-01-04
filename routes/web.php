<?php

use App\Http\Controllers\PostsController;

Route::get('/', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
// Route::get('/posts/{post}', 'PostsController@show');

// Posts: all http requests
// GET		/posts              all posts
// GET		/posts/create       new post
// POST 	/posts              form request new post
// GET 		/posts/{id}/edit    edit a post
// GET 		/posts/{id}         post a specific post
// PATCH	/posts/{id}         form request editing post
// DELETE	/posts/{id}         delete a post
