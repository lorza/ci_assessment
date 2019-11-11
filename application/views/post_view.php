<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css"> -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
    <div id="container">
        <div id="contents" class="text-center">
            <h1>Post a message</h1>
            <p>Use the form below to create input a message</p>
            <br>
            
            <form action="message/doPost" method="POST">
                
                <div>
                    <textarea name="message" id="" cols="30" rows="10">
                    
                    </textarea>
                </div>
                <br>
                <input type="submit" value="Post message">
            </form>

            <br>

            
        </div>
    </div>
</body>
</html>

<style>
    * {font-family: "Open Sans"; margin: 0; padding: 0}
    #container {
        height: 100vh; 
        width: 100vw;
        display: flex
    }

    #contents {
        margin: auto;
    }

    .text-center {
        text-align: center;
    }

    td {padding: 10px;}
</style>