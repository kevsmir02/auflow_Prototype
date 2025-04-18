<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Entry Point
|--------------------------------------------------------------------------
*/
Route::get('/', fn() => redirect()->route('login'));


/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
*/
Route::get('/login', fn() => view('auth.login'))->name('login');

Route::get('/simulate-login', function () {
    $role = request('role');
    session(['role' => $role]);

    return match ($role) {
        'admin' => redirect()->route('admin.dashboard'),
        'user'  => redirect()->route('user.dashboard'),
        default => redirect()->route('login')->with('error', 'Invalid role entered.'),
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
    Route::view('/form/{id}', 'user.form-detail')->name('form.detail.legacy');
});


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->group(function () {
    Route::view('/dashboard', 'admin.dashboard')->name('dashboard');
    Route::view('/form/{id}', 'admin.form-detail')->name('form.detail.legacy');
    Route::view('/form-builder', 'admin.form-creation')->name('formbuilder');

    Route::post('/form/{id}/approve', function ($id) {
        session()->put("form_{$id}_status", 'approved');
        return redirect()->route('admin.form.approved', $id);
    })->name('form.approve');

    Route::view('/form/{id}/approved', 'admin.form-approved')->name('form.approved');
});


/*
|--------------------------------------------------------------------------
| Shared Form Viewer
|--------------------------------------------------------------------------
*/
Route::get('/form/{id}', function ($id) {
    $role = session('role', 'user');

    if ($role === 'admin' && session("form_{$id}_status") === 'approved') {
        return redirect()->route('admin.form.approved', $id);
    }

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
Route::view('/admin/workflow', 'admin.workflow')->name('admin.workflow');
Route::view('/form-publish', 'admin.publish')->name('form.publish');
Route::view('/action-list', 'pages.action-list')->name('action.list');

