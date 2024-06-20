<?php

use Illuminate\Support\Facades\Route;

$modules = \App\Models\Module::all();
$subModules = \App\Models\SubModule::all();
$apps = \App\Models\Application::all();
$methods = \App\Models\Method::all();


Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');
Route::middleware(['auth', 'verified'])->group(function ()use ($modules,$subModules,$apps,$methods) {
    foreach ($modules as $module) {
        Route::get($module->short ,function () use ($module) {
            return view('pages.modules', ['module' => $module]);
        } )->name($module->short);
    }
    foreach ($subModules as $subModule) {
        Route::get(str_replace('.','/',$subModule->short) ,function () use ($subModule) {
            return view('pages.subModules', ['subModule' => $subModule]);
        } )->name($subModule->short);
    }
});
Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');
Route::get('general/world/countries', function(){
    return view('countries');
})
    ->middleware(['auth'])
    ->name('general.world.countries');
require __DIR__.'/auth.php';
