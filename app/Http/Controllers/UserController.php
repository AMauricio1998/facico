<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserPost;
use App\Http\Requests\UpdateUserPut;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        $users = User::with('rol')->orderBy('created_at', 'desc')
        ->paginate(5);

        return view('dashboard.user.index', ['users' => $users]);
    }

    
    public function create()
    {
        return view("dashboard.user.create", ['user' => new user()]);
    }

    
    public function store(StoreUserPost $request)
    {
        User::create([
            'rol_id' => 1,
            'name' => $request['name'],
            'surname' => $request['surname'],
            'email' => $request['email'],
            'password' => $request['password'],
        ]);

        return back()->with('status', 'Licenciatura registrada con exito!');
    }

    
    public function show(User $user)
    {
        return view('dashboard.user.show', ['user' => $user]);
    }

   
    public function edit(User $user)
    {
        return view('dashboard.user.edit',  ['user' => $user]);
    }

    
    public function update(UpdateUserPut $request, User $user)
    {

        $user->update([
        'name' => $request['name'],
        'surname' => $request['surname'],
        'email' => $request['email'],
    ]);

        return back()->with('status', 'Usuario actualizado con exito!');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return back()->with('status', 'Usuario eliminado con exito!');
    }
}
