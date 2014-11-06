Form::macro('fullName', function()
{
    return '<p>Full name: <input type="text" name="full_name"></p>';
});

<!-- 
Form::macro('fullName', function($name)
{
    return '<p>Full name: <input type="text" name="'.$name.'"></p>';
}); -->

<!-- <p>Full name: <input type="text" name="my_field"></p> -->