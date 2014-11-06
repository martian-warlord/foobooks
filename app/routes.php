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

Route::get('mysql-test', function() {

    # Print environment
    echo 'Environment: '.App::environment().'<br>';

    # Use the DB component to select all the databases
    $results = DB::select('SHOW DATABASES;');

    # If the "Pre" package is not installed, you should output using print_r instead
    echo Pre::render($results);

});

Route::get('/get-environment',function() {

    echo "Environment: ".App::environment();

});

Route::get('/trigger-error',function() {

    # Class Foobar should not exist, so this should create an error
    $foo = new Foobar;

});

Route::get('macrobe', function()
{
    return Form::fullName();
});

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('former', function()
{
    return View::make('form');
});


# /app/routes.php
Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>environment.php</h1>';
    $path   = base_path().'/environment.php';

    try {
        $contents = 'Contents: '.File::getRequire($path);
        $exists = 'Yes';
    }
    catch (Exception $e) {
        $exists = 'No. Defaulting to `production`';
        $contents = '';
    }

    echo "Checking for: ".$path.'<br>';
    echo 'Exists: '.$exists.'<br>';
    echo $contents;
    echo '<br>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(Config::get('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    print_r(Config::get('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    } 
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});

// ADDS FILTER PROTECTION - SHOULD BE ADED TO SECURE FORMS
// Route::post('/handle-form', array('before' => 'csrf', function()
// {
//     // Handle our posted form data.
// }));


// Route::get('example', function()
// {
//     return View::make('example');
// });

// Route::get('template', function()
// {
//     return View::make('home');
// });

// Route::get('/my/long/calendar/route', array(
//     'as' => 'calendar',
//     function() {
//         return View::make('calendar');
//     }
// ));

// Route::get('save/{princess}/{unicorn}', function($princess, $unicorn)
// {
//     return "{$princess} loves {$unicorn}";
// })->where('princess', '[A-Za-z]+')
//   ->where('unicorn', '[0-9]+');



// Route::group(array('prefix' => 'books'), function()
// {

//     // First Route
//     Route::get('/first', function() {
//         return 'The Colour of Magic';
//     });

//     // Second Route
//     Route::get('/second', function() {
//         return 'Reaper Man';
//     });

//     // Third Route
//     Route::get('/third', function() {
//         return 'Lords and Ladies';
//     });

// });

// Route::group(array('domain' => 'myapp.dev'), function()
// {
//     Route::get('my/route', function() {
//         return 'Hello from myapp.dev!';
//     });
// });

// Route::group(array('domain' => 'another.myapp.dev'), function()
// {
//     Route::get('my/route', function() {
//         return 'Hello from another.myapp.dev!';
//     });
// });

// Route::group(array('domain' => 'third.myapp.dev'), function()
// {
//     Route::get('my/route', function() {
//         return 'Hello from third.myapp.dev!';
//     });
// });


// Route::group(array('before' => 'onlybrogrammers'), function()
// {

//     // First Route
//     Route::get('/first', function() {
//         return 'Dude!';
//     });

//     // Second Route
//     Route::get('/second', function() {
//         return 'Duuuuude!';
//     });

//     // Third Route
//     Route::get('/third', function() {
//         return 'Come at me bro.';
//     });

// });

// Route::get('secret/content', array(
//     'https',
//     function () {
//         return 'Secret squirrel!';
//     }
// ));

// Route::get('/books', function() {
//     return 'Here are all the books...';
// }); 

// routes for the books section
// Route::get('/books/{genre?}', function($genre = 'Crime')
// {
//     return "Books in the {$genre} category.";
// });

// Route::get('/books/{category}', function($category) {
//         return 'Here are all the books in the category of '.$category;
// }); 

// Route::get('/magazines', function() {return 'Magazines ahoy...';});
// Route::get('/magazines/celebrity', function() {return 'Tabloids ahoy...';});
// Route::get('/magazines/technology', function() {return 'Gadgets ahoy...';});




// Route::get('/new', function() {

//     $view  = '<form method="POST">';
//     $view .= 'Title: <input type="text" name="title">';
//     $view .= '<input type="submit">';
//     $view .= '</form>';
//     return $view;

// });

// Route::post('/new', function() {

//     $input =  Input::all();
//     print_r($input);

// });




// Route::get('/practice', function() {

//     $fruit = Array('Apples', 'Oranges', 'Pears');

//     echo Pre::render($fruit,'Fruit');

// });



Route::get('/simple', function()
{
    return View::make('simple');
});

// Route::get('/simple/{squirrel}', function($squirrel)
// {
//     $data['squirrel'] = $squirrel;

//     return View::make('simple', $data);
// });




// Route::get('/first/page', function() {
//     return 'First!';
// });

// Route::get('/second/page', function() {
//     return 'Second!';
// });

// Route::get('/third/page', function() {
//     return 'Potato!';
// });


// Route::get('/forth/page', function()
// {
//     return Redirect::to('/first/page');
// });

// Route::get('/fifth/page', function()
// {
//     return Redirect::to('/first/page');
// });



// Route::get('custom/response', function()
// {
//     return Response::make('Hello world!', 200);
// });

// Route::get('custom/response2', function()
// {
//     $response2 = Response::make('Hello world!', 200);
//     $response2->headers->set('our key', 'our value');
//     return $response2;


// });

// Route::get('markdown/response', function()
// {
//     $response = Response::make('***some bold text***', 200);
//     $response->headers->set('Content-Type', 'text/x-markdown');
//     return $response;
// });

// Route::get('markdown/response2', function()
// {
//     $data = array('iron', 'man', 'rocks');
//     return Response::json($data);
// });

// Route::get('our/response', function()
// {
//     $response = Response::make('Bond, James Bond.', 200);
//     $response->setTtl(60);
//     return $response;
// });



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

// Route::when('profile/*', 'birthday');

// Route::filter('birthday', 'BirthdayFilter');

// Route::get('/hurray', array(
//     'before'    => 'birthday',
//     function()
//     {
//        return View::make('hello');
//     }
// ));

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
