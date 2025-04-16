<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Redirect Root to Login
|--------------------------------------------------------------------------
*/
Route::get('/', fn() => redirect()->route('login'));


/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/
Route::get('/login', fn() => view('auth.login'))->name('login');

Route::get('/simulate-login', function () {
    $role = request('role');

    // ✅ Store the role in session
    session(['role' => $role]);

    return match ($role) {
        'admin' => redirect()->route('admin.dashboard'),
        'user'  => redirect()->route('user.dashboard'),
        default => redirect()->route('login')->with('error', 'Invalid role entered.')
    };
})->name('simulate.login');

Route::get('/logout', function () {
    session()->forget('role');
    return redirect()->route('login');
})->name('logout');


/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/
Route::prefix('user')->name('user.')->group(function () {
    Route::view('/dashboard', 'user.dashboard')->name('dashboard');
    Route::view('/action-list', 'user.action-list')->name('actionlist');
    Route::view('/form/{id}', 'user.form-detail')->name('form.detail.legacy'); // optional fallback
});


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->group(function () {
    Route::view('/dashboard', 'admin.dashboard')->name('dashboard');
    Route::view('/form/{id}', 'admin.form-detail')->name('form.detail.legacy'); // optional fallback
    Route::view('/form-builder', 'admin.form-creation')->name('formbuilder'); // ✅ Admin form builder
});


/*
|--------------------------------------------------------------------------
| Shared Form Detail Route (uses session)
|--------------------------------------------------------------------------
| /form/{id} resolves to either admin or user detail view depending on session
*/
Route::get('/form/{id}', function ($id) {
    $role = session('role', 'user');
    $view = $role === 'admin' ? 'admin.form-detail' : 'user.form-detail';
    return view($view, ['id' => $id]);
})->name('form.detail');


/*
|--------------------------------------------------------------------------
| Shared Pages
|--------------------------------------------------------------------------
*/
Route::view('/my-forms', 'pages.my-forms')->name('forms.my');
Route::view('/form-preview', 'admin.form-preview')->name('form.preview');
