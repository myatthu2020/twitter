<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    public function index(Request $request){
        $users = User::all();
        return view("admin.dashboard", ['users' =>$users]);
    }

    public function suspend(User $user)
    {
        $user->update(['suspend' => true]);

        return redirect()->back()->with('success', 'User suspended successfully.');
    }

    public function unsuspend(User $user)
    {
        $user->update(['suspend' => false]);

        return redirect()->back()->with('success', 'User unsuspended successfully.');
    }
        public function delete($id){
            $user = User::find($id);
            $user->delete();

            return back()->with('success','User deleted successful !');
        }
}
