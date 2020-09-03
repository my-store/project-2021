<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Grandstander:wght@200&display=swap" rel="stylesheet">

    <style>
        * {
            padding             : 0;
            margin              : 0;
            box-sizing          : border-box;
            font-family         : sans-serif;
            color               : white;
            letter-spacing      : 0.50px;
        }
        body {
            background-image    : url(bg/bg1.jpg);
            background-repeat   : no-repeat;
            background-position : center;
            /* background-size     : cover; */
            height              : 100vh;
            width               : 100%;
            overflow            : hidden;
            display             : flex;
            align-items         : center;
            justify-content     : center;
            animation           : infinite 10s body-anim;
        }
        .container {
            width               : 90%;
            padding             : 30px 30px 100px 30px;
            border-radius       : 13px;
            background          : rgba(0,0,0,0.50);
            border              : 1px solid grey;
        }
        h1 {
            display             : block;
            text-align          : center;
            padding             : 0px 0px 30px 0px;
            font-size           : 25px;
            font-family         : 'Berkshire Swash', cursive;
        }
        p {
            display             : block;
            text-align          : center;
            font-size           : 14px;
            font-family         : 'Grandstander', cursive;
        }
        .loading {
            display             : flex;
            align-items         : center;
            justify-content     : center;
            padding-top         : 30px;
        }
        .load-1, .load-2, .load-3, .load-4, .load-5 {
            height              : 10px;
            width               : 10px;
            border-radius       : 50%;
            background          : white;
            margin              : 3px;
            position            : relative;
        }
        .load-1 {
            animation : infinite 0.70s load-1-anim;
        }
        .load-2 {
            animation : infinite 0.70s load-2-anim;
        }
        .load-3 {
            animation : infinite 0.70s load-3-anim;
        }
        .load-4 {
            animation : infinite 0.70s load-4-anim;
        }
        .load-5 {
            animation : infinite 0.70s load-5-anim;
        }
        @keyframes body-anim {
            0% {
                background-image    : url(bg/bg1.jpg);
            }
            50% {
                background-image    : url(bg/bg2.jpg);
            }
            100% {
                background-image    : url(bg/bg3.jpg);
            }
        }
        @keyframes load-1-anim {
            0% {
                top: -0px;
                opacity: 1;
            }
            10% {
                top: -15px;
                opacity: 0;
            }
            100% {
                top: -0px;
                opacity: 1;
            }
        }
        @keyframes load-2-anim {
            0% {
                top: -0px;
                opacity: 1;
            }
            30% {
                top: -15px;
                opacity: 0;
            }
            100% {
                top: -0px;
                opacity: 1;
            }
        }
        @keyframes load-3-anim {
            0% {
                top: -0px;
                opacity: 1;
            }
            50% {
                top: -15px;
                opacity: 0;
            }
            100% {
                top: -0px;
                opacity: 1;
            }
        }
        @keyframes load-4-anim {
            0% {
                top: -0px;
                opacity: 1;
            }
            70% {
                top: -15px;
                opacity: 0;
            }
            100% {
                top: -0px;
                opacity: 1;
            }
        }
        @keyframes load-5-anim {
            0% {
                top: -0px;
                opacity: 1;
            }
            90% {
                top: -15px;
                opacity: 0;
            }
            100% {
                top: -0px;
                opacity: 1;
            }
        }
    </style>

</head>
<body>
    
    <div class="container">
        <h1>Project 2021</h1>
        <p>
            Project ini akan dikerjakan pada 10 Januari 2021 mendatang.
            <br><br>
                Jundullah7 <br>
                TuyulOnline303 <br>
                MasterBootRec777 <br>
                Sabl3n6 <br>
                syantiQ_05
        </p>

        <div class="loading">
            <div class="load-1"></div>
            <div class="load-2"></div>
            <div class="load-3"></div>
            <div class="load-4"></div>
            <div class="load-5"></div>
        </div>
    </div>

</body>
</html>