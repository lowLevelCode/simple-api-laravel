<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

class ProductosController extends Controller
{
    public function getAllProducts() {
        return Productos::All();
    }

    public function getProduct($id) {
        return Productos::find($id);
    }    

    public function create(Request $request) {
        $producto = Productos::create($request->all());

        return response()->json($producto, 201);
    }    

    public function update(Request $request,$id) {
        $producto = $this->getProduct($id);
        $producto->update($request->all());

        return response()->json($producto, 201);
    }    

    public function delete($id) {
        $producto = $this->getProduct($id);
        $producto->delete();

        return response()->json(null, 204);
    }    

}
