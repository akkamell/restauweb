@extends ('layouts.layout')
@section ('content')
<style>
    body {
        background-color: #f4f4f4; 
       }
    .table-container {
        display: flex;
        justify-content: space-between; /* Adjust as needed */
        margin-top: 20px;
        flex-wrap: wrap;
    }

    .table-item {
        flex: 1;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    td button {
        background-color: #dc3545;
        color: white;
        border: none;
        padding: 8px 12px;
        cursor: pointer;
    }

    td button:hover {
        background-color: #bd2130;
    }

   

    a { 
        color: #3498db;
    }
    .table-item {
        border: 3px solid #ddd;
    }
</style>
    <div class="table-container">
        <div class="table-item">
        <h1 style="color:black">Pizza's Order</h1>
        <input type="text" id="filterPizzaByName" placeholder="Filter Pizza by Name"
         style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
         <select id="pizza-type" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
            <option>ALL</option>
            <option>pepperoni</option>
            <option>cheese</option>
            <option>salade</option>
         </select>
@if (!empty($pizza))
<table id="pizzaTable">
    <tr>
        <th>Name</th>
        <th>Type</th>
        <th>Size</th>
        <th>Toppings</th>
        <th>Delete</th>
    </tr>
    @foreach($pizza as $pz)
    <tr class="pizzaRow">
        <td>{{ $pz->name }}</td>
        <td>{{ $pz->type }}</td>
        <td>{{ $pz->size }}</td>
        <td>
            @foreach($pz->toppings as $top)
            {{$top}},
            @endforeach
        </td>
        <td>
            <form action="/showpizza/{{ $pz->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button>Complete order</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endif
        </div>
<div class="table-item">
<h1 style="color:black">Burger's Order</h1>
<input type="text" id="filterBurgerByName" placeholder="Filter Burger by Name"
         style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
         <select id="burger-type" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
            <option>ALL</option>
            <option>Chicken</option>
            <option>Ham</option>
            <option>Egg</option>
         </select>
@if (!empty($burger))
<table id="burgerTable">
    <tr>
        <th>Name</th>
        <th>Type</th>
        <th>Size</th>
        <th>Toppings</th>
        <th>Delete</th>
    </tr>
    @foreach($burger as $bg)
    <tr class="burgerRow">
        <td>{{ $bg->name }}</td>
        <td>{{ $bg->type }}</td>
        <td>{{ $bg->size }}</td>
        <td>
            @foreach($bg->toppings as $top)
            {{$top}},
            @endforeach
        </td>
        <td>
            <form action="/showburger/{{ $bg->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button>Complete order</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endif
    </div>
</div>

<h1><a href="/">Back to Home</a>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="/js/filter.js"></script>

@endsection