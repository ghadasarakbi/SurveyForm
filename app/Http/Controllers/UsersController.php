<?php
namespace App\Http\Controllers;

use \Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {

        $user = User::latest()->get();

        return view('user.index', compact('user'))
        ->with('i', (request()->input('page', 1) - 1) * 7);
    }

    public function create()
    {

        return view('user.create');
    }

    public function store(User $user, Request $request)
    {

            $validatedData = $request->validate([
            'Name' => 'alpha|min:3',
            'email' => 'email'
        ], [
            'Name.alpha' => 'Name field must only contain letters',
            'Name.min' => 'Name must atleast contain 3 char',
            'email.email' => 'Email field must be email address.'
        ]);

        User::create($request->all());
        return redirect()->route('user.index')
        ->with('success','Info Added successfully');

    }

    public function show(User $user)
    {
        return 4;
        return view('user.show',compact('user'));
    }

    public function edit(User $user)
    {

            return 5;
            return view('user.edit',compact('user'));
    }

    public function update(Request $request,User $user)
    {
        return 6;
        $request->validate([
            'Name' => 'alpha|min:3',
            'email' => 'email'
        ]);
        $user->update($request->all());
        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')
                        ->with('success','Info deleted successfully');
    }
}
