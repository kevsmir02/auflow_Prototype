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
| Dashboards (Shared via Session)
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->group(function () {
    Route::view('/dashboard', 'pages.dashboard')->name('dashboard');
});

Route::prefix('user')->name('user.')->group(function () {
    Route::view('/dashboard', 'pages.dashboard')->name('dashboard');
});

/*
|--------------------------------------------------------------------------
| Form Detail Viewer (No Redirect on Approved)
|--------------------------------------------------------------------------
*/
Route::get('/form/{id}', function ($id) {
    return view('pages.form-detail', ['id' => $id]);
})->name('form.detail');

/*
|--------------------------------------------------------------------------
| Admin-Specific Form Management
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->group(function () {
    Route::view('/form-builder', 'admin.form-creation')->name('formbuilder');
    Route::view('/form/{id}/approved', 'admin.form-approved')->name('form.approved');

    Route::post('/form/{id}/approve', function ($id) {
        session()->put("form_{$id}_status", 'approved');
        return redirect()->route('admin.form.approved', $id);
    })->name('form.approve');
});

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
