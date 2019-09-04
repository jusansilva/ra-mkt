<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
        <title>RA - MKT</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
        <script src="https://cdn.rawgit.com/jeromeetienne/AR.js/1.7.8/aframe/build/aframe-ar.js"></script>
        <script>THREEx.ArToolkitContext.baseURL = 'https://rawgit.com/jeromeetienne/ar.js/master/three.js/'</script>    
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