<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicChartController;
use App\Http\Controllers\OccupancyRateController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return Redirect::to('occupancy-rate');    
});

Route::get('/basic-chart-pie', [BasicChartController::class, 'pieChart']);
Route::get('/basic-chart-pie-2', [BasicChartController::class, 'pieChart2']);
Route::get('/basic-chart-bar', [BasicChartController::class, 'barChart']);
Route::get('/basic-chart-bar-horizontal', [BasicChartController::class, 'horizontalBarChart']);
Route::get('/basic-chart-donut', [BasicChartController::class, 'donutChart']);
Route::get('/basic-chart-radial', [BasicChartController::class, 'radialChart']);
Route::get('/basic-chart-polar', [BasicChartController::class, 'polarAreaChart']);
Route::get('/basic-chart-line', [BasicChartController::class, 'lineChart']);
Route::get('/basic-chart-heatmap', [BasicChartController::class, 'heatMapChart']);
Route::get('/basic-chart-radar', [BasicChartController::class, 'radarChart']);

Route::get('/occupancy-rate', [OccupancyRateController::class, 'index']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
