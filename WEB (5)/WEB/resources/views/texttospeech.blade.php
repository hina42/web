<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">




        <title>Text to Speech</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }
            p {
               
                color: black;
                font-size: 15px;
            }                 
            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="content">
                <div class="title m-b-md">
                    Text to speech                     
                    <form action="{{route('sayit')}}" method='post' >
                        @csrf <input id="str" type="hidden" value="{{$words}}">
                            <textarea style="size:20%" type="text" id="text" name="text" ></textarea>
                            
                            <input id="btn" type="submit" name="btn" value="Say it">
                    </form>
                    <audio  controls="controls" autoplay="autoplay">
                       <source id="file" src="{{URL::asset('/audio/'.$file)}}" type="audio/mp3" />
                    </audio> <div  id="name">test</div>
                </div> 
            </div>
        </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    var text = $('#str').val();
    var word = text.split(" ");
    count = 0;
var time = setInterval(function () {
    count++;
    $("#name").fadeOut(300, function() {
        $(this).html(word[count % word.length]).fadeIn(100);
        if (count == word.length) {
        clearInterval(interval)
      }
    });
}, 400);  

 });
</script>
    </body>
</html>
