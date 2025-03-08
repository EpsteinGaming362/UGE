<html>
    <head>
        <title>Results</title>
    </head>
    <body>
        <a href="/index.php" class="logo"><img class="logo" src="imgs/UGEhref.png"></a>
        <?php
            include 'backend/searches.php';
            if($_GET['mode'] == 'dump'){
                dump();
            }else if ($_GET['mode'] == 'search'){
                $query = $_GET['search'];
                search($query);
            }
        ?>
    </body>
    <style>
        .result{
            width: 50%;
            height: 15%;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 3px 5px black;
            margin: auto;
        }
        .result *{
            margin: 10px;
        }
        button{
            border-radius: 10px;
            box-shadow: 0px 3px 5px black;
            background-color: white;
            border: none;
        }
        button:hover{
            cursor:pointer;
        }
        a{
            color: black;
        }
        *{
            font-family: "Lucida Console", "Courier New", monospace;
            margin: 20px;
        }
        .logo{
            position: fixed;
            top: 0px;
            left: 0px;
            width: 10%;
            margin: 0px;
        }
    </style>
</html>
