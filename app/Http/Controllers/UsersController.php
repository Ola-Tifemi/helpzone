<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Payments;
use Illuminate\Support\Facades\Auth;


class UsersController extends Controller
{
    //return the view to home.blade
    public function index()
    {
        $totalUsers = User::count(); // 👈 count users here
        $totalPayments = Payments::sum('amount');

        return view('helpzone.home', compact('totalUsers', 'totalPayments'));
        return view('helpzone.service', compact('totalUsers', 'totalPayments'));
    }

    public function service()
    {
        $totalUsers = User::count(); // 👈 count users here
        $totalPayments = Payments::sum('amount');

        return view('helpzone.service', compact('totalUsers', 'totalPayments'));
    }

    public function fetchAllUsers()
    {
        // Fetch all users 
        $users = User::whereNotNull('dp')  
        ->withSum('payments', 'amount') 
        ->orderByDesc('payments_sum_amount')  //the highest total payment
        ->take(4)  // Gets only the top 4
        ->get();

    return view('helpzone.about', compact('users'));
    }

    public function fetchPayments(){

         $payments = Auth::user()->payments()->with('user')->get();
         $totalPayments = Payments::sum('amount');

        return view('user_dash.userprofile', compact('payments' , 'totalPayments'));
    }

    public function fetch_all_users()
    {
        $currentUser = auth()->user();
        $users = User::where('id', '!=', $currentUser->id)->get();

       
        return view('admin_dash', ['users' => $users]);    
    
    }
    //method that blocks and unblocks the user

    public function blockUser($id)
        {
            $user = User::findOrFail($id);

            if ($user->status === 'active') {
                $user->status = 'blocked';
            } else {
                $user->status = 'active';
            }

            $user->save();

            return redirect()->back()->with('success', 'User status updated successfully!');
        }
    
}
