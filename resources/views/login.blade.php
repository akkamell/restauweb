<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restau Website</title>
    <link rel="stylesheet" href="/css/main.css">
    <style>
    button {
    padding: 15px 25px;
    background-color: #4CAF50; /* Green color, you can change it to your preferred color */
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 300px;
    transition: background-color 0.3s ease; /* Smooth transition on hover */
}

button:hover {
    background-color: #45a049; /* Darker green color on hover */
}

    </style>
</head>
<body >
    <div class="container-login">
    <h1 style="text-align:center">Welcome to Log In Page:</h1>
        <div class="item">
                <form method="Post" action="showpizza">
                @csrf
                    Username:<input type="text" name="manage" placeholder="Username"  required style="padding:10px;border-radius:20px;margin-bottom:10px;text-align:center"><br>
                    Password: <input type="password" placeholder="Password" name="password" required style="padding:10px;border-radius:20px;margin-bottom:10px;text-align:center"><br>
                   <div style="text-align:center">
                        <button name="submit">Submit</button>
                    </div>
                    <p>{{session('mssg')}}</p>
                </form>
        </div>
       <h2> <a href="/">Back to Main</a></h2>
    </div>
  
</body>
</html>