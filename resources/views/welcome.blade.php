<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
        <title>RA - MKT</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="app">
        </div>
            <script>
                window.Laravel = <? echo
                            json_encode([
                                'csrfToken' => csrf_token(),
                            ]);
                        ?>
            </script>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>