<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 15.10.2014
 * Time: 14:01
 */
 ?>

<!doctype html>

 <html>

            <head>
         <title>Eteneminen</title>
            </head>
        <body>

{{Form::open(array('url'=>'login')) }}

<h1>Kirjautuminen</h1>

<!-- Errorit jotka tulevat loginnissä tähän -->

<p>
{{$errors ->first('email') }}
{{$errors ->first('password') }}
</p>

<p>
{{Form::label('email', 'Email Address') }}
{{Form::text('email', Input::old('email'), array('placeholder' => 'example@gmail.com')) }}
</p>

<p>
{{ Form::label('password', 'Password') }}
{{Form::password('password') }}
</p>

<p>{{Form::submit('Submit!')}}</p>

{{Form::close() }}
       </body>
</html>