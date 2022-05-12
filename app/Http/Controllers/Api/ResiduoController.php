<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Residuo;

class ResiduoController extends Controller
{
    public function index() {
        $residuos = Residuo::all();
        return response()->json($residuos, 200);
    }

    public function show($id){
        if (Residuo::where('id', $id)->exists()) {
            return response()->json(Residuo::find($id), 200);
        }
        return response()->json(["message" => "Residuo not found"], 404);
    }

    public function update(Request $req, $id) {
        if (Residuo::where('id', $id)->exists()) {
            $residuo = Residuo::find($id);
            $residuo->update($req->except('_token'));
            $residuo->save();
            return response()->json(["message" => "Record updated successfully", "residuo" => $residuo], 200);
        }

        return response()->json(["message" => "Record not found"], 404);
    }

    public function destroy($id) {
        if (Residuo::where('id', $id)->exists()) { 
            $residuo = Residuo::find($id);
            $residuo->delete();
            return response()->json(["message" => "Record deleted"], 200);
        }

        return response()->json(["message" => "Record not found"], 404);
    }
}
