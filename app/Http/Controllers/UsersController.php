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
        $users = User::whereNotNull('dp')  // Only users with a DP
        ->withSum('payments', 'amount') // Calculate the total payments for each user
        ->orderByDesc('payments_sum_amount')  // Sort by the highest total payment
        ->take(4)  // Get only the top 4
        ->get();

        
    
            // Pass the data to a Blade template
    return view('helpzone.about', compact('users'));
    }

    public function fetchPayments(){

        //fetch payments by each user 
         $payments = Auth::user()->payments()->with('user')->get();
         $totalPayments = Payments::sum('amount');

        return view('user_dash.userprofile', compact('payments' , 'totalPayments'));
    }

    public function fetch_all_users()
    {
        // Fetch all users from the database
        $currentUser = auth()->user();
        $users = User::where('id', '!=', $currentUser->id)->get();

        // Return the view with the users data
        return view('admin_dash', ['users' => $users]);    
    //method that blocks and unblocks the user
    }

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
