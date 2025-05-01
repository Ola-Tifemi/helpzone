<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class DpController extends Controller
{
    //
    public function upload_dp(){
        request()->validate([
            'dp' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $dp = request()->file('dp');
        $dp_name = 'helpZone'. time().'_'.$dp->getClientOriginalName();
        //upload the file
        $dp->move('./profiles', $dp_name); 
        //update the database and the unique file name to upload to database
        $id = auth()->user()->id; 

        //update the dp column in database
        $user = User::find($id);
        $user->dp = $dp_name;
        $user->save(); 
        return redirect()->route('dashboard.user')->with('success','Profile picture uploaded successfully'); 

    }
}