@extends ('layouts.layout')
@section ('content')
<style>
  .button-container {
    display: flex;
    justify-content: space-around; /* Adjust as needed */
    align-items: center;
}

.button {
    display: inline-block;
    padding: 10px 20px;
    text-decoration: none;
    color: #fff;
    background-color: #3498db;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.button:hover {
    background-color: #2980b9;
}

</style>
      
          <div class="container-center">
            <img src="/images/homepic.jpg"> <br>
            <div class="button-container">
                <a href="orderpizza" class="button">Order a Pizza</a>
                <a href="orderburger" class="button">Order a Burger</a>
            </div>
         <p>{{session('mssg')}}</p>
          </div>
          
@endsection