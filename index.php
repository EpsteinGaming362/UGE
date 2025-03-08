<html>
    <head>
        <title>UGE</title>
    </head>
    <body>
        <a href="/index.php" class="logo"><img class="logo" src="imgs/UGEhref.png"></a>
        <h1>The Unblocked Game Engine</h1>
        <h3>V2</h3>
        <input id='search-bar' placeholder='Query'>
        <button id='search-button' onclick='openSearch()'>Search!</button>
        <button id='dump-button' onclick='dump()'>Search all sites</button>
        <p><a href='contact.php'>Contact Us</a> | <a href="https://forms.gle/R1Sg1wBoLZwg7udf7">Submit your ideas</a></p>
    </body>
    <script>
        function openSearch(){
            var query = document.getElementById('search-bar').value;
            window.location.href = 'http://uge.rf.gd/results.php?mode=search&search=' + query;
        }
        function dump(){
            window.location.href = 'http://uge.rf.gd/results.php?mode=dump&search=none';
        }
    </script>
    <style>
        
        #search-bar{
            border-radius: 10px;
            width: 50%;
            height: 3%;
            border: none;
            box-shadow: 0px 3px 5px black;
            position: fixed;
            top: 30%;
            left: 25%;
        }
        #search-bar:active{
            border: none;
        }
        #search-button{
            background-color: white;
            border: none;
            border-radius: 10px;
            box-shadow: 0px 3px 5px black;
            position: fixed;
            top: 36%;
            left: 47.5%;
            width: 5%;
        }
        #search-button:hover{
            cursor: pointer;
        }
        #dump-button{
            border-radius: 10px;
            background-color: white;
            box-shadow: 0px 3px 5px black;
            position: fixed;
            top: 40%;
            left: 45%;
            width: 10%;
            border: none;
            
        }
        #dump-button:hover{
            cursor: pointer;
        }
        h1{
            position: fixed;
            top: 15%;
            left: 0;
            text-align: center;
            width: 100%;
        }
        h3{
            position: fixed;
            top: 20%;
            width: 100%;
            left: 0;
            text-align: center;
        }
        p{
            position: fixed;
            width: 100%;
            text-align: center;
            top: 45%;
        }
        .logo{
            position: fixed;
            top: 0px;
            left: 0px;
            width: 10%;
        }
        *{
            font-family: "Lucida Console", "Courier New", monospace;
            text-align: center;
        }
    </style>
</html>
