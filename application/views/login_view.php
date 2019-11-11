<?php

?>

<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800&display=swap" rel="stylesheet">
        <title>Search Users</title>
    </head>

    <body>
        <div id="container">
            <div id="contents" class="text-center">
                <h1>Login</h1>

                <br>

                <div>
                    <form action="doLogin" method="POST">
                        
                        <div>
                            <input type="text" name="username">
                        </div>
                        <br>
                        <div>
                            <input type="password" name="password">
                        </div>
                        <br>
                        <div>
                            <input type="submit" value="Login">
                        </div>

                        <br>

                        <?php 
                            if (isset($error)) {
                                echo "<p class='text-danger'>". $error ."</p>";
                            }
                        ?>

                    </form>
                </div>
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

    .text-danger {color: red;}
</style>