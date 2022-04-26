<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/header', function () {
    return view('header');
})->name('header');

Route::get('/main', function () {
    return view('main');
})->name('main');

Route::get('/data', function() {
    $parametri = [
        'data_arr' => [
            [
               'data1'      =>  'result1',
               'data2'      =>  'result2',
               'data3'      =>  'result3',
               'data4'      =>  ['result5a.1','result5a.2']
            ],
            [
                'data1'      =>  'result1a',
                'data2'      =>  'result2a',
                'data3'      =>  'result3a',
                'data4'      =>  ['result5a.7','result5a.55','result5a.14'],
                'data5'      =>  'dato anomalo'
             ],
             [
                'data1'      =>  'result1b',
                'data2'      =>  'result2b',
                'data3'      =>  'result3b',
                'data4'      =>   []
             ],
             [
                'data1'      =>  'result1c',
                'data2'      =>  'result2c',
                'data3'      =>  'result3c',
                'data4'      =>  [
                                    'result5a.77777','result5a.58885','result5a.199999','result5a.454545','result5a.578554','result5a.45245552'
                                ],
                // 'data5'      =>  'dato anomalo'
             ],
            ],
            [
              'piccolo dato ciao'
            ]
    ];
    return view('data', $parametri);
})->name('data');
