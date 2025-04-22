<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = auth()->user()->role;
            if ($this->user == 'member usaha'){
                abort(403);
            }
            return $next($request);
        });
    }

    public function index()
    {
        $users = User::orderBy('id', 'desc')->get();
        return view('backend.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:2|max:50',
            'email' => 'email|required|min:4|max:50|unique:users',
            'password' => 'required|confirmed',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->description = $request->description;

        if ($request->photo) {
            $this->validate($request, [
                'photo' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('photo');
            $image_name = time() . '_' . $file->getClientOriginalName();

            $img = Image::make($file->getRealPath());
            $img->resize(150, 150, function ($constraint) {
                $constraint->aspectRatio();
            })->save('users/thumbnail/' . $image_name);

            $file->move('users', $image_name);

            $user->photo = $image_name;
        }

        $user->save();

        return redirect(route('users.index'))->with('message', 'User has been added!');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('backend.users.view', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('backend.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $this->validate($request, [
            'name' => 'required|min:2|max:50',
            'email' => 'email|required|min:4|max:50|unique:users,email,' . $user->id,
        ]);


        $user->name = $request->name;
        $user->email = $request->email;
        $user->description = $request->description;

        if ($request->password) {
            $this->validate($request, [
                'password' => 'required|confirmed',
            ]);
            $user->password = bcrypt($request->password);
        }

        if ($request->photo) {
            $this->validate($request, [
                'photo' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('photo');
            $image_name = time() . '_' . $file->getClientOriginalName();

            if ($user->photo) {
                if (File::exists(public_path() .'/users/' . $user->photo)) {
                    unlink(public_path() . '/users/' . $user->photo);
                }

                if (File::exists('/users/thumbnail/' . $user->photo)) {
                    unlink(public_path() . '/users/thumbnail/' . $user->photo);
                }
            }

            $img = Image::make($file->getRealPath());
            $img->resize(150, 150, function ($constraint) {
                $constraint->aspectRatio();
            })->save('users/thumbnail/' . $image_name);

            $file->move('users', $image_name);


            $user->photo = $image_name;
        }

        $user->save();

        return redirect(route('users.index'))->with('message', 'User has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        if ($user->photo) {
            if (File::exists(public_path() .'/users/' . $user->photo)) {
                unlink(public_path() . '/users/' . $user->photo);
            }

            if (File::exists('/users/thumbnail/' . $user->photo)) {
                unlink(public_path() . '/users/thumbnail/' . $user->photo);
            }
        }

        $user->delete();

        return redirect(route('users.index'))->with('message', 'User has been deleted!');
    }
}
