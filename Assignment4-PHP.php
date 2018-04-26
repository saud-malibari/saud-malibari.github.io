<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>books list</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "stylesheet" type = "text/css" href = "mainStyle.css" />
    
</head>
<body>

    <div id="nav">
        <ul id="menu">
            <li>goodreads</li>
            <li>Home</li>
            <li>My Books</li>
            <li>Browse</li>
            <li>Search :   &emsp;   <input type="text" id="search">  &ensp; <button id="button">Go</button></li>

        </ul>

    </div>


    <div id="book-listing">
            <h3>select to sort:</h3>

            <select id="sort-select" onchange="upDateDOM()">

                <option value="page">sort by page count</option>
                <option value="date" selected>sort by date</option>
                <option value="stars">sort by star rating</option>

            </select>

           
            <ul id="list-books">

                
            </ul>


    </div>



                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
                <script src="main.js"></script>

<h4>
    &copy;
    Saud Malibari / 
    1406834 / 
    CPIT-405
    </h4>
    
    
</body>
</html>