<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {  
                position: absolute;
              margin: auto;
              top: 0;
              right: 0;
              bottom: 0;
              left: 0;
              width: 80%;
               height: 200px;
    
        }

    </style>
</head>

<body>
    <center>
        <div class="container">
                <div  class="item">
                    <h2>Hi, Mr. {{ Auth::user()->name }}</h2>
                </div>
                <div class="item">
                    <h2>You Are Loged in successfully</h2>
                </div>
    </center>
    </div>
</body>

</html>
