<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Facades\Storage;
use App\User;
use Auth;

class ProfileController extends Controller
{
    
    public function index()
    {
    	$users = user::all()->Where('user_id', Auth::user()->id);
    	return view('profile.index', compact('users'));
    }

    public function EditUser()
    {
    	$users = User::all();
    	return view('profile.edituser', compact('users'));
    }

    public function EditBusiness()
    {
    	$users = User::all();
    	return view('profile.editbusiness', compact('users'));
    }

    public function UpdateBusiness(Request $request)
    {
    	$users = Auth::user();

    	$users->shopname= ucfirst($request->shopname);
    	$users->shop_description= $request->shop_description;
    	$users->business_location= ucfirst($request->business_location);
    	$users->business_contact= $request->business_contact;

    	$users->save();
    	return redirect('/gtrade/profile');
    }

    public function UpdateUser(Request $request)
    {
    	$request->validate([
    		'name'=>'required',
            'email'=>'required|email',
    		// 'contact'=>'numeric|max:11',
            'password'=>'between:6,25|confirmed'
    	]);
        
        //change the password of the user if it needs to be changed
        if ($request->password = 'change') {
            $password = bcrypt($request->password);
            $users->password= $password;
        }
        $users->name= ucwords($request->name);
        $users->email= $request->email;
        $users->contact= $request->contact;
        $users->address= ucwords($request->address);

    	$users->save();
    	return redirect('/gtrade/profile');
    }
}
