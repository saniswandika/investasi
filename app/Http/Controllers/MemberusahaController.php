<?php

namespace App\Http\Controllers;

use App\Memberusaha;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class MemberusahaController extends Controller
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
        $memberusaha = Memberusaha::where('role', 'member usaha')->orderBy('id', 'desc')->get();

        return view('backend.memberusaha.index', compact('memberusaha'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sector = DB::table('company_sector')->get();
        $cfield = DB::table('company_field')->get();
        return view('backend.memberusaha.create', compact('sector', 'cfield'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'alamat'        => 'required',
            'nama'          => 'required|min:2|max:50',
            'telp'          => 'required',
            'gender'        => 'required',
            'email'         => 'email|required|min:4|max:50|unique:users',
            'password'      => 'required|confirmed',
        ]);

        $memberusaha = new memberusaha();
        $memberusaha->name = $request->nama;
        $memberusaha->company_city = $request->company_city;
        $memberusaha->company_field = $request->company_field;
        $memberusaha->company_sector = $request->company_sector;
        $memberusaha->alamat = $request->alamat;
        $memberusaha->telp = $request->telp;
        $memberusaha->gender = $request->gender;
        $memberusaha->role = "member usaha";
        $memberusaha->email = $request->email;
        $memberusaha->password = bcrypt($request->password);

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

            $memberusaha->photo = $image_name;
        }

        $memberusaha->save();

        return redirect(route('memberusaha.index'))->with('message', 'Member Usaha has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Memberusaha  $memberusaha
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $memberusaha = memberusaha::find($id);

        return view('backend.memberusaha.view', compact('memberusaha'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Memberusaha  $memberusaha
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $memberusaha = Memberusaha::find($id);
        $sector = DB::table('company_sector')->get();
        $cfield = DB::table('company_field')->get();

        return view('backend.memberusaha.edit', compact('memberusaha','sector', 'cfield'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Memberusaha  $memberusaha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $memberusaha = memberusaha::find($id);

        $this->validate($request, [
            'alamat'        => 'required',
            'telp'          => 'required',
            'gender'        => 'required',
            'email'         => 'email|required|min:4|max:50|unique:users,email,' . $memberusaha->id,
        ]);

        $memberusaha->name = $request->nama;
        $memberusaha->company_city = $request->company_city;
        $memberusaha->company_field = $request->company_field;
        $memberusaha->company_sector = $request->company_sector;
        $memberusaha->alamat = $request->alamat;
        $memberusaha->telp = $request->telp;
        $memberusaha->gender = $request->gender;
        $memberusaha->email = $request->email;
        $memberusaha->status = $request->status;

        if ($request->password) {
            $this->validate($request, [
                'password' => 'required|confirmed',
            ]);
            $memberusaha->password = bcrypt($request->password);
        }

        if ($request->photo) {
            $this->validate($request, [
                'photo' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('photo');
            $image_name = time() . '_' . $file->getClientOriginalName();

            if ($memberusaha->photo) {
                if (File::exists(public_path() .'/users/' . $memberusaha->photo)) {
                    unlink(public_path() . '/users/' . $memberusaha->photo);
                }

                if (File::exists('/users/thumbnail/' . $memberusaha->photo)) {
                    unlink(public_path() . '/users/thumbnail/' . $memberusaha->photo);
                }
            }

            $img = Image::make($file->getRealPath());
            $img->resize(150, 150, function ($constraint) {
                $constraint->aspectRatio();
            })->save('users/thumbnail/' . $image_name);

            $file->move('users', $image_name);

            $memberusaha->photo = $image_name;
        }

        $memberusaha->save();

        return redirect(route('memberusaha.index'))->with('message', 'Member usaha has been updated!');
    }

    public function approve(Request $request, $id)
    {
        $memberusaha = Memberusaha::find($id);
        $memberusaha->status = $request->status;
        $memberusaha->save();
        return redirect(route('memberusaha.index'))->with('message', 'User has been approve!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Memberusaha  $memberusaha
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $memberusaha = memberusaha::find($id);

        if ($memberusaha->photo) {
            if (File::exists(public_path() .'/users/' . $memberusaha->photo)) {
                unlink(public_path() . '/users/' . $memberusaha->photo);
            }

            if (File::exists('/users/thumbnail/' . $memberusaha->photo)) {
                unlink(public_path() . '/users/thumbnail/' . $memberusaha->photo);
            }
        }

        $memberusaha->delete();

        return redirect(route('memberusaha.index'))->with('message', 'Member Usaha has been deleted!');
    }
}
