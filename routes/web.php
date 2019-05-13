<?php

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
    return redirect('/it');
});

Route::get('/de', function () {
    return view('home.de.index');
});
Route::get('/it', function () {
    return view('home.it.index');
});
Route::get('/ld', function () {
    return view('home.ld.index');
});


Route::get('/categories', function () {


    return view('categories');


    echo "<table>";
    
        echo "<tr>";
            echo "<th>LD</th>";
            echo "<th>IT</th>";
            echo "<th>DE</th>";                
        echo "</tr>";
        
            foreach(App\Tag::all() as $tag)
            {
                echo "<tr>";
                    echo "<td>$tag->title_ld</td>";
                    echo "<td>$tag->title_it</td>";
                    echo "<td>$tag->title_de</td>";
                echo "</tr>";
            }                
        
    
        
    echo "</table>";


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
