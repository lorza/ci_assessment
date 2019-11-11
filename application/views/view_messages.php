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
            <h1>Messages</h1>

            <table class="">
                <thead>
                    <tr>
                        <td>Message ID</td>
                        <td>Username</td>
                        <td>Message</td>
                        <td>Posted At</td>
                    </tr>
                </thead>

                <tbody>
                    <?php 
                        foreach ($messages as $message) {
                            echo 
                            "<tr>
                                <td>" . $message->id . "</td>
                                <td>" . $message->user_username . "</td>
                                <td>" . $message->text . "</td>
                                <td>" . $message->posted_at . "</td>
                            </tr>";
                        }
                    ?>
                </tbody>
            </table>
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