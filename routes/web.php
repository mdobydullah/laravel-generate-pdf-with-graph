<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('preview', 'PDFController@preview');
Route::get('generate-pdf', 'PDFController@generatePDF');
