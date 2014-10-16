<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

// Route::get('/books', function() {
//     return 'Here are all the books...';
// }); 

// routes for the books section
Route::get('/books/{genre?}', function($genre = 'Crime')
{
    return "Books in the {$genre} category.";
});

Route::get('/books/{category}', function($category) {
        return 'Here are all the books in the category of '.$category;
}); 

Route::get('/magazines', function() {return 'Magazines ahoy...';});
Route::get('/magazines/celebrity', function() {return 'Tabloids ahoy...';});
Route::get('/magazines/technology', function() {return 'Gadgets ahoy...';});




Route::get('/new', function() {

    $view  = '<form method="POST">';
    $view .= 'Title: <input type="text" name="title">';
    $view .= '<input type="submit">';
    $view .= '</form>';
    return $view;

});

Route::post('/new', function() {

    $input =  Input::all();
    print_r($input);

});




Route::get('/practice', function() {

    $fruit = Array('Apples', 'Oranges', 'Pears');

    echo Pre::render($fruit,'Fruit');

});



Route::get('/simple', function()
{
    return View::make('simple');
});

Route::get('/simple/{squirrel}', function($squirrel)
{
    $data['squirrel'] = $squirrel;

    return View::make('simple', $data);
});




Route::get('/first/page', function() {
    return 'First!';
});

Route::get('/second/page', function() {
    return 'Second!';
});

Route::get('/third/page', function() {
    return 'Potato!';
});


Route::get('/forth/page', function()
{
    return Redirect::to('/first/page');
});

Route::get('/fifth/page', function()
{
    return Redirect::to('/first/page');
});



Route::get('custom/response', function()
{
    return Response::make('Hello world!', 200);
});

Route::get('custom/response2', function()
{
    $response2 = Response::make('Hello world!', 200);
    $response2->headers->set('our key', 'our value');
    return $response2;


});

Route::get('markdown/response', function()
{
    $response = Response::make('***some bold text***', 200);
    $response->headers->set('Content-Type', 'text/x-markdown');
    return $response;
});

Route::get('markdown/response2', function()
{
    $data = array('iron', 'man', 'rocks');
    return Response::json($data);
});

Route::get('our/response', function()
{
    $response = Response::make('Bond, James Bond.', 200);
    $response->setTtl(60);
    return $response;
});



// Route::get('file/download', function()
// {
//     $file = 'path_to_my_file.pdf';
//     return Response::download($file);
// });


// Route::get('file/download', function()
// {
//     $file = 'path_to_my_file.pdf';
//     return Response::download($file, 418, array('iron', 'man'));
// });


Route::filter('birthday', 'BirthdayFilter');

Route::get('/hurray', array(
    'before'    => 'birthday',
    function()
    {
       return View::make('hello');
    }
));

// Route::get('/hurray', array(
//     'before'    => 'birthday:10/17',
//     function()
//     {
//        return View::make('hello');
//     }
// ));



// Route::get('/hurray', array('before' => 'birthday', function()
// {
//     return View::make('hello');
// }));

//before - put test where 'test' is found
// Route::filter('test', function($route, $request)
// {

// });

// // after

// Route::filter('test', function($route, $request, $response)
// {

// });



// Route::get('/', array(
//     'before'    => 'birthday',
//     'after'     => 'christmas',
//     function()
//     {
//        return View::make('hello');
//     }
// ));


// Route::get('/', array(
//     'before' => array('birthday', 'christmas'),
//     function()
//     {
//        return View::make('hello');
//     }
// ));


// Route::get('/', array(
//     'before' => 'birthday|christmas',
//     function()
//     {
//        return View::make('hello');
//     }
// ));


// Route::get('/', array(
//     'before'    => 'birthday:foo,bar,baz',
//     function()
//     {
//        return View::make('hello');
//     }
// ));
