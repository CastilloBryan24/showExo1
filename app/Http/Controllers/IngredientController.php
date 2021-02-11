<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class IngredientController extends Controller
{
    public function index()
    {
        $ingredients = Ingredient::all();
        return view("welcome", compact("ingredients"));
    }

    public function add()
    {
        $ingredients = Ingredient::all();
        return view("form", compact("ingredients"));
    }

    public function store(Request $request)
    {
        $store = new Ingredient;
        $store->name = $request->name;
        $store->weight = $request->weight;
        $store->src = $request->src;
        $store->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $destroy = Ingredient::find($id);
        $destroy->delete();
        return redirect()->back();
    }

    public function show($id)
    {
        $show = Ingredient::find($id);
        return view("show", compact("show"));
    }
}
