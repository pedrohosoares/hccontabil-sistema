<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cliente;

class CustomerController extends Controller
{
    public function index(){
        $clientes = Cliente::orderBy('id', 'desc')->paginate(1);
        
        return view('admin/customers/index', compact('clientes'));        
    }
}
