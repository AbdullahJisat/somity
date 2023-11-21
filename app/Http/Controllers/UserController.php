<?php

namespace App\Http\Controllers;

use App\Http\Requests\PasswordReset;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        abort_if(!auth()->user()->can('user-view'), 401);
        $users = User::with('roles')->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('user.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, string $id)
    {
        try {
            abort_if(!auth()->user()->can('user-view'), 401);
            $user = User::findOrFail(auth()->user()->id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->nid = $request->nid;
            $user->phone = $request->phone;
            $user->save();
            if ($user instanceof Model) {
                return back()->with('success', 'Data added Successfully');
            } else {
                return back()->with('error', 'An error has occurred please try again later.');
            }
        } catch (\Throwable $e) {
            return redirect()->back()->withError($e->getMessage())->send();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function resetPassword(PasswordReset $request)
    {
        $user = User::find(auth()->user()->id);
        if (Hash::check($request->password, $user->password)) {
            $user->password = Hash::make($request->new_password);
            $user->update();
        }
    }
}
