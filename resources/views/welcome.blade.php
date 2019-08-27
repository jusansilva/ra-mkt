<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ra MKT</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
        <script src="https://cdn.rawgit.com/jeromeetienne/AR.js/1.7.7/aframe/build/aframe-ar.js"></script>
    </head>
    <body style='margin : 0px; overflow: hidden;'>
        <a-scene embedded arjs>
            <a-marker preset="hiro">
                <a-box position='0 0.5 0' material='color: yellow;'></a-box>
            </a-marker>
            <a-entity camera></a-entity>
          </a-scene>
    </body>
    </html>