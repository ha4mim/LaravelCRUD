<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
   <h1>Welcome to Home Page</h1> 
   <nav>
    <ul>
        <li><a href="{{route('addproduct')}}">Add Product</a></li>
        <li><a href="#">Manage Product</a></li>
    </ul>
   </nav>
   <style>
    nav{
        background: #0554FD;
    }
    nav ul {
            margin: 0;
            padding: 0;
            list-style: none;
    }
    nav ul li{
        display: inline-block;
    }
    nav ul li a{
        color: white;
        padding: 10px 20px;
        display: inline-block;
        text-transform: capitalize;
        text-decoration: none;
    }
   </style>
</body>
</html>