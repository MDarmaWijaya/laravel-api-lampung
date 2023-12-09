<?php  
namespace  App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class dataApi extends Controller
{
    public function index()
    {
        $response = Http::get('http://103.140.188.145:81/apiftf/public/cobatesterssss')->collect();
        // dd($response->json());
        return view('layouts.cek-api', ['respon' => $response]);
    }
}



