<?php



$stripe = resolve('App\Billing\Stripe');

dd($stripe);

Route::get('/', 'PostsController@index')->name('home');
Route::get('/home', 'PostsController@index')->name('home');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

// Posts: all http requests
// GET		/posts              all posts
// GET		/posts/create       new post
// POST 	/posts              form request new post
// GET 		/posts/{id}/edit    edit a post
// GET 		/posts/{id}         post a specific post
// PATCH	/posts/{id}         form request editing post
// DELETE	/posts/{id}         delete a post
