<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\IncidentController;
use App\Http\Controllers\ModuleController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::controller(IncidentController::class)->group(function(){
        Route::get('/incidentes-reportados','index')->name('incidents.index');
        Route::post('/incidentes-reportados/{id}/ver-incidente','getIncident')->name('incidents.getIncident');
    });

    Route::controller(ModuleController::class)->group(function(){
        Route::get('/modulos/{type}','index')->name('modules.index');
        Route::post('/modulos/{module}/changeStatus','changeStatus')->name('modules.changeStatus');
    });

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
