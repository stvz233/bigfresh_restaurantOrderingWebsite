<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./shopstyle.css">
    <script>
        window.onload = function () {
            var queryString = window.location.search;
            var urlParams = new URLSearchParams(queryString);
            var orderedList = urlParams.get('string');
            document.querySelector(".bill #orderedList").innerText = orderedList;
            alert(orderedList);
        };
    </script>
    <title>Document</title>
</head>

<body>
    <div class="header">
        <div class="bigfreshlogo">
            <img src="../logo.png">
        </div>
        <div class="nav">
            <ul class="nav-ul">
                <li><a href="../homepage.html" class="home">首页</a></li>
                <li><a href="#" class="order">点餐</a>
                    <div class="dropdown">
                        <ul class="ordertypes">

                            <li><a href="./liangpitaocan.html">凉皮套餐</a></li>
                            <li><a href="./roujiamo.html">肉夹馍</a></li>
                            <li><a href="#">凉皮系列</a></li>
                            <li><a href="./coldfood.html">凉菜系列</a></li>
                            <li><a href="./seafood.html">辣而美海鲜系列</a></li>
                            <li><a href="#">时蔬系列</a></li>
                            <li><a href="./fries.html">炸物系列</a></li>
                            <li><a href="./steamedbread.html">纯手工馒头</a></li>
                            <li><a href="./hotfood.html">热炒</a></li>
                            <li><a href="#">盒饭套餐</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#">查看订单</a></li>
            </ul>
        </div>
    </div>

<?php
// PostgreSQL database credentials
$host = "localhost";
$port = "5432";
$dbname = "postgre";
$user = "postgre";
$password = "postgre";

// Connect to the PostgreSQL database
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

// Check connection status
if (!$conn) {
    echo "Failed to connect to PostgreSQL database.";
    exit;
}

// Prepare the insert query
$query = "INSERT INTO table_name (attribute1, attribute2, attribute3, attribute4, attribute5, attribute6) 
          VALUES ($1, $2, $3, $4, $5, $6)";
          
// Prepare the values for insertion
$attribute1 = "Value 1";
$attribute2 = "Value 2";
$attribute3 = "Value 3";
$attribute4 = "Value 4";
$attribute5 = "Value 5";
$attribute6 = "Value 6";

// Execute the insert query with the values
$result = pg_query_params($conn, $query, array($attribute1, $attribute2, $attribute3, $attribute4, $attribute5, $attribute6));

// Check if the query was successful
if (!$result) {
    echo "Error executing insert query.";
    exit;
}

echo "Insertion successful.";

// Close the database connection
pg_close($conn);
?>

</html>