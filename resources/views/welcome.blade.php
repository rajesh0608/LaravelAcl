<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


    </head>
    <body>
        <div class="container">
            {!! Html::link('signup', 'Sign Up') !!}

            <div class="content">
                <div class="title">Laravel 5</div>
            </div>



            <div class="content">
                {!! Html::link('login', 'Sign In') !!}
            </div>

            <div class="content">
                {!! Html::link('logout','Log Out') !!}
            </div>

            <div class="content">
                {!! Html::link('article','Article') !!}
            </div>
        </div>


    </body>
</html>
