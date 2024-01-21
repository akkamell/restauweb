<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Pizza;
use App\Manager;
use App\Burger;
class PizzaControler extends Controller
{
    public function home(){
        return view('welcome',['type' =>'mozerella']);
    }
    /*
    public function showpizza($id){
        $pizza = Pizza::find($id);
        return view('showpizza',['pizza' => $pizza]);
    }*/
    public function orderpizza(){
        return view('orderpizza');
    }
    public function orderburger(){
        return view('orderburger');
    }
    public function create(){
        $pizza = new Pizza();
        $pizza->name = request('username');
        $pizza->type = request('type') ;
        $pizza->size = request('size');
        $pizza->timestamps = false; // Disable timestamps
        $pizza->toppings=request('toppings')??['nothing'] ;
        $pizza->save();
        return redirect('/')->with('mssg','thank you for ordering pizza');
    }
    public function createburger(){
        $burger = new Burger();
        $burger->name = request('username');
        $burger->type = request('type') ;
        $burger->size = request('size');
        $burger->timestamps = false; // Disable timestamps
        $burger->toppings=request('toppings')??['nothing'] ;
        $burger->save();
        return redirect('/')->with('mssg','thank you for ordering burger');
    }
    public function destroy($id){
        $pizza=Pizza::findOrFail($id);
        $pizza->delete();
        $pizza = Pizza::all();
       return view('showpizza', ['pizza' => $pizza,'burger' => Burger::all()]);
    }

    public function destroyburger($id){
        $burger=Burger::findOrFail($id);
        $burger->delete();
        $burger = Burger::all();
       return view('showpizza', ['burger' => $burger,'pizza' => Pizza::all()]);
    }

    public function matching()
{
    $Manager = new Manager();
    $Manager->name = request('manage');
    $Manager->password = request('password');
    $userauth = Manager::where('name', $Manager->name)->first();

    if ($userauth && $userauth->password == $Manager->password) {
   //  session(['user' => $user]);  session data  <p>Welcome, {{ session('user')->name }}!</p>
	   Session::put('Manager', $userauth);
       Session::put('expires_at', now()->addSeconds(30));
       $pizza = Pizza::all();
       $burger = Burger::all();
       return view('showpizza', ['pizza' => $pizza, 'burger' => $burger]);
    } else {
        return redirect('login')->with('mssg','Incorrect Username/Password!');
    }
}

public function show()
{
    if (session()->has('Manager') && now() < session('expires_at')) {
        $pizza = Pizza::all();
        $burger = Burger::all();
        return view('showpizza', ['pizza' => $pizza, 'burger' => $burger]);
    } else {
        return redirect('login');
    }
}

}
