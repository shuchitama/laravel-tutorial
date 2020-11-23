<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\User;

class UserController extends Controller
{
    public function uploadAvatar(Request $request)
    {
        if($request->hasFile('image')) {
            User::uploadAvatar($request->image);
            return redirect()->back()->with('message', 'Image Uploaded');
        }
        return redirect()->back()->with('error', 'Image not uploaded');
    }
    protected function deleteOldImage() {
        if(auth()->user()->avatar) {
            Storage::delete('/public/images/'.auth()->user()->avatar);
        };
    }
    public function index()
    {   
        $data = [
            'name' => 'Elon',
            'email' => 'elon@live.com',
            'password' => 'password'
        ];
        // User::create($data);
        // $user = new User();
        // $user->name = 'shuchita';
        // $user->email = 'shuchita@live.com';
        // $user->password = bcrypt('shuchita');
        // $user->save();
        // dd($user);

        // User::where('id', 3)->update(['name' => 'Amita']);

        $user = User::all();
        return $user;

        // User::where('id', 2)->delete();

        // DB::insert('insert into users (name, email, password) values (?, ?, ?)', ['Shuchita', 'shuchita@live.com', 'password']);
        // $users = DB::select('select * from users');

        // DB::update('update users set name = ? where id = 1', ["Amita"]);
        // $users = DB::select('select * from users');

        // DB::delete('delete from users where id=1');
        // $users = DB::select('select * from users');
        // return $users;
        return view('home');
    }
}