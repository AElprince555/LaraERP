<?php

use Illuminate\Support\Facades\Route;

try {
    $modules = \App\Models\Module::all();
    $subModules = \App\Models\SubModule::all();
    $apps = \App\Models\Application::all();
    $methods = \App\Models\Method::all();
    Route::middleware(['auth', 'verified'])->group(function ()use ($modules,$subModules,$apps,$methods) {
        foreach ($modules as $module) {
            Route::get(str_replace('.','/',$module->view) ,function () use ($module) {
                return view('pages.modules', ['module' => $module]);
            } )->name($module->code);
        }
        foreach ($subModules as $subModule) {
            Route::get(str_replace('.','/',$subModule->view) ,function () use ($subModule) {
                return view('pages.subModules', ['subModule' => $subModule]);
            } )->name($subModule->code);
        }
        foreach ($apps as $application) {
            Route::get(str_replace('.','/',$application->view) ,function () use ($application) {
                return view('pages.'.$application->view, ['application' => $application]);
            })->name($application->code);
        }
    });
}catch (Exception $ex){}



Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');
require __DIR__.'/auth.php';

