

<!-- adds security token to form data
<form action="{{ url('handle-form') }}" method="POST">
    {{ Form::token() }}
</form> -->

<!-- RESET BUTTON
{{ Form::open(array('url' => 'my/route')) }}
    {{ Form::reset('Clear') }}
{{ Form::close() }} -->


<!-- IMAGE BUTTON
{{ Form::open(array('url' => 'my/route')) }}
    {{ Form::image(asset('my/image.gif', 'submit')) }}
{{ Form::close() }} -->


<!-- NORMAL BUTTON
{{ Form::open(array('url' => 'my/route')) }}
    {{ Form::button('Smile') }}
{{ Form::close() }} -->


<!-- SUBMIT BUTTON
{{ Form::open(array('url' => 'my/route')) }}
    {{ Form::submit('Save') }}
{{ Form::close() }} -->


<!-- HIDDEN FIELD
{{ Form::open(array('url' => 'my/route')) }}
    {{ Form::hidden('panda', 'luishi') }}
{{ Form::close() }} -->

<!-- UPLOADS
{{ Form::open(array(
    'url'   => 'my/route',
    'files' => true
)) }}
    {{ Form::label('avatar', 'Avatar') }}
    {{ Form::file('avatar') }}
{{ Form::close() }} -->

<!-- EMAIL
{{ Form::open(array('url' => 'my/route')) }}
    {{ Form::label('email', 'E-Mail Address') }}
    {{ Form::email('email', 'me@daylerees.com') }}
{{ Form::close() }} -->


<!-- CATAGORIZED DROP DOWN
{{ Form::open(array('url' => 'my/route')) }}
    {{ Form::label('bear', 'Bears are?') }}
    {{ Form::select('bear', array(
        'Panda' => array(
            'red'       => 'Red',
            'black'     => 'Black',
            'white'     => 'White'
        ),
        'Character' => array(
            'pooh'      => 'Pooh',
            'baloo'     => 'Baloo'
        )
    ), 'black') }}
{{ Form::close() }} -->


<!-- SELECT DROP DOWN
{{ Form::open(array('url' => 'my/route')) }}
    {{ Form::label('panda_colour', 'Pandas are?') }}
    {{ Form::select('panda_colour', array(
        'red'       => 'Red',
        'black'     => 'Black',
        'white'     => 'White'
    ), 'red') }}
{{ Form::close() }} -->


<!-- RADIO BUTTONS
{{ Form::open(array('url' => 'my/route')) }}
    {{ Form::label('panda_colour', 'Pandas are?') }}
    {{ Form::radio('panda_colour', 'red', true) }} Red
    {{ Form::radio('panda_colour', 'black') }} Black
    {{ Form::radio('panda_colour', 'white') }} White
{{ Form::close() }} -->


<!-- CHECKBOXES
{{ Form::open(array('url' => 'my/route')) }}
    {{ Form::label('pandas_are_cute', 'Are pandas cute?') }}
    {{ Form::checkbox('pandas_are_cute', '1', true) }}
{{ Form::close() }} -->

<!-- PASSWORD BOX
{{ Form::open(array('url' => 'my/route')) }}
    {{ Form::label('secret', 'Super Secret') }}
    {{ Form::password('secret') }}
{{ Form::close() }} -->


<!-- BASIC JUMBO TEXT BOX
{{ Form::open(array('url' => 'my/route')) }}
    {{ Form::label('description', 'Description') }}
    {{ Form::textarea('description', 'Best field ever!') }}
{{ Form::close() }} -->




<!-- BASIC TEXT INPUT BOX
{{ Form::open(array('url' => 'my/route')) }}
    {{ Form::label('first_name', 'First Name') }}
    {{ Form::text('first_name', 'Taylor Otwell',
                        array('id' => 'first_name')) }}
{{ Form::close() }} -->



<!-- {{ Form::open(array('url' => 'my/route')) }}
    {{ Form::label('first_name', 'First Name') }}
    {{ Form::text('first_name', 'Taylor Otwell') }}
{{ Form::close() }} -->


<!-- {{ Form::open(array('url' => 'my/route')) }}
    {{ Form::label('first_name', 'First Name',
                    array('id' => 'first_name')) }}
{{ Form::close() }} -->


<!-- {{ Form::open(array('url' => 'my/route')) }}
    {{ Form::label('first_name', 'First Name') }}
{{ Form::close() }} -->

<!-- <form action="{{ url('our/target/route') }}" method="POST">

//double curly bracket is alternate syntax

</form> --> 

<!-- {{ Form::open(array('url' => 'our/target/route')) }}

{{ Form::close() }} -->

<!-- {{ Form::open(array(
    'url' => 'our/target/route',
    'method' => 'GET',
    'accept-charset' => 'ISO-8859-1'
)) }}

{{ Form::close() }} -->

<!-- {{ Form::open(array(
    'route'       => 'my_route'
)) }}

{{ Form::close() }} -->

<!-- {{ Form::open(array(
    'action'       => 'MyController@myAction'
)) }}

{{ Form::close() }} -->


<!-- {{ Form::open(array(
    'url' => 'our/target/route',
    'method' => 'DELETE'
)) }}

{{ Form::close() }} -->

<!-- {{ Form::open(array(
    'url'       => 'our/target/route',
    'files'     => true
)) }}

{{ Form::close() }}