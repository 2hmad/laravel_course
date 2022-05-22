<?php

namespace App\Http\Controllers;

use App\Models\Files;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index()
    {
        return view('upload');
    }
    public function create(Request $request)
    {
        $validate = $request->validate([
            'file' => 'required|mimes:jpg,png,jpeg|max:1000'
        ]);
        if ($validate) {
            $requestDecode = json_decode($request->data, true);
            $file_name = time() . '.' . $request->file->getClientOriginalExtension();
            $file_path = $request->file('file')->storeAs('pics', $file_name, 'public');
            Files::create([
                'file' => $file_name
            ]);
            return response()->json(['alert' => 'Success'], 200);
        } else {
            return response()->json(['alert' => 'Error'], 404);
        }
    }
}
