<<<<<<< HEAD

<html lang="en">
<head>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px 0;
}

nav {
    background-color: #444;
    color: #fff;
    text-align: center;
    padding: 5px 0;
}

nav ul {
    list-style-type: none;
    padding: 0;
}

nav ul li {
    display: inline;
    margin: 0 10px;
}

nav ul li a {
    text-decoration: none;
    color: #fff;
}

section {
    padding: 20px;
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px 0;
}
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <title>Dashboard</title>
</head>
<body>
    <header>
        <h1>Welcome to Your Dashboard</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Settings</a></li>
        </ul>
    </nav>
    <section>
        <h2>Recent Activity</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </section>
    <footer>
        <p>&copy; 2023 Your Company</p>
    </footer>
</body>
</html>
=======
<?php
    session_start();
    if(isset($_SESSION['id'])){
    $user_id=$_SESSION['id'];
    $name=$_SESSION['name'];
    }
    echo "Hello".$name;


    //$user_id=$_COOKIE['user_id'];
    //$name=$_COOKIE['name'];
    //echo "Hello" .$name;
?>
>>>>>>> 5ae82c333951c542368ee51d97c34a2a9bcab1c7
