<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
    	// Fetch users from database

    	$usersArray = ['Aiysha', 'Martin', 'Base'];
        $users = User::all();

    	return view('users')
    			->with('users', $users);
    }

    public function singleUser($name)
    {
    	// Go to db and fetch informationa about $name

    	$user = [
    		'name' => $name, 
    		'email' => 'email@mailer.co', 
    		'phone' => '4993934934',
    	]; //example of what's coming from DB

    	return view('single-user')
    			->with('user', $user);
    }

    public function editUser($id)
    {
        $user = User::where('id', $id)->first();

        $this->authorize('update', $user);

        return view('edit-user')
                ->with('user', $user);
    }
}
