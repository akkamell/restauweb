
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Restau Website</title>
        <link rel="stylesheet" href="/css/main.css">
        <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 320px;
            text-align: center;
        }

        .item {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input, select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-top: 5px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
    </head>
    <body style="background-size:cover" background="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSlCBpS-8gAeXbBCQIzsXyjqd0lp7M9a7CBDQ&usqp=CAU">

<form class="container-center" action="orderpizza" method="POST">
@csrf
    <div class="container">
    <div class="item">
        <p>Pizza</p>
    </div>
    <hr/>
            <div class="item">
            <label for="username">name:</label>
            <input type="text" placeholder="Name" name="username" required>
            </div>
            <div class="item">
            <label for="type">type:</label>
            <select name="type">
                <option value="pepperoni">pepperoni</option>
                <option value="cheese">cheese</option>
                <option value="salade">salade</option>
            </select>
            </div>
            <div class="item">
            <label for="size">size:</label>
            <input type="radio" name="size" value="small" checked>small
            <input type="radio" name="size" value="medium">medium
            <input type="radio" name="size"  value="large">large
            </div>
            <div class="item">
                <label for="toppings">toppings:</label>
                <input type="checkbox" name="toppings[]" value="pepsi">pepsi
                <input type="checkbox" name="toppings[]" value="ketshup">ketshup
            </div>
            <button type="submit">Submit Order</button>
            <a href="/">back To Home</a>
    </div>
</form>



</body>
</html>
