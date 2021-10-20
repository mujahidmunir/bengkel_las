<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Material;
use App\Models\Role;
class DashboardController extends Controller
{
    function index()
    {
        $data['product'] = Product::all();
        $data['user']    = User::all();
        $data['material'] = Material::all();
        $data['role']    = Role::all();
        return view('cms.page.index', $data);
    }
}
