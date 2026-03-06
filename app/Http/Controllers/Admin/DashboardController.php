<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
      public function index()
    {
        $productCount = Product::count();
    $categoryCount = Category::count();
    $totalStock = Product::sum('stock');
    $totalStockValue = Product::sum(DB::raw('stock * buying_price'));

    return view('admin.index', compact(
        'productCount',
        'categoryCount',
        'totalStock',
        'totalStockValue'
    ));
    }

    public function AdminProfile(){

        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.admin_profile_view',compact('adminData'));
    }

    public function AdminDestroy(Request $request) {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

         $notification = array(
            'message' => 'Logout Successfully',
            'alert-type' => 'info'
        );


        return redirect('/')->with($notification);

    }
}
