<?php ?>

<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800&display=swap" rel="stylesheet">
        <title>Search Users</title>
    </head>

    <body>
        <!-- Navbar -->
        <div id="navbar">
            <ul>
                <li>Search</li>
                <li>Login</li>
                <li>Post Message</li>
            </ul>
        </div>
        <div id="container">
            <div id="contents" class="text-center">
                <h1>Search View</h1>
                <p>Lookup users and posts</p>

                <br>

                <div>
                    <form action="doSearch" method="GET">
                        <input type="text" name="search_query">
                        <input type="submit" value="Search">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

<style>
    * {font-family: "Open Sans"; margin: 0; padding: 0}
    #container {
        height: 90vh; 
        width: 100vw;
        display: flex
    }

    #contents {
        margin: auto;
    }

    .text-center {
        text-align: center;
    }

    #navbar {
        width: 100%;
        border-bottom: 1px solid lightgrey;
        display: flex;
    }

    #navbar ul {
        display: flex;
        text-decoration: none;
        list-style: none; 
        padding: 10px;
        margin: 0 auto;
    }

    #navbar ul li {
        padding: 5px; 
    }
</style>