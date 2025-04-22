<?php

namespace App\Http\Controllers;

use App\Userdinas;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;


class   UserdinasController extends Controller
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

        $userdinas = Userdinas::where('role', 'user dinas')->get();

        return view('backend.userdinas.index', compact('userdinas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.userdinas.create');
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
            'namadinas'     => 'required|min:2|max:100',
            'alamat'        => 'required',
            'namacp'        => 'required|min:2|max:50',
            'nip'           => 'required',
            'telp'          => 'required',
            'gender'        => 'required',
            'posisi'        => 'required',
            'email'         => 'email|required|min:4|max:50|unique:users',
            'password'      => 'required|confirmed',
        ]);

        $userdinas = new Userdinas();
        $userdinas->nama_dinas = $request->namadinas;
        $userdinas->alamat = $request->alamat;
        $userdinas->name = $request->namacp;
        $userdinas->nip_cp = $request->nip;
        $userdinas->telp = $request->telp;
        $userdinas->gender = $request->gender;
        $userdinas->posisi_cp = $request->posisi;
        $userdinas->role = "user dinas";
        $userdinas->email = $request->email;
        $userdinas->password = bcrypt($request->password);

        if ($request->logo_dinas) {
            $this->validate($request, [
                'logo_dinas' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('logo_dinas');
            $image_name = time() . '_' . $file->getClientOriginalName();

            $img = Image::make($file->getRealPath());
            $img->resize(150, 150, function ($constraint) {
                $constraint->aspectRatio();
            })->save('users/thumbnail/' . $image_name);

            $file->move('users', $image_name);

            $userdinas->logo_dinas = $image_name;
        }

        $userdinas->save();

        return redirect(route('userdinas.index'))->with('message', 'User Dinas has been added!');

    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param int $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function show($id)
    {
        $userdinas = Userdinas::find($id);

        return view('backend.userdinas.view', compact('userdinas'));
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param int $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function edit($id)
    {
        $userdinas = Userdinas::find($id);

        return view('backend.userdinas.edit', compact('userdinas'));
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
        $userdinas = Userdinas::find($id);

        $this->validate($request, [
            'namadinas'     => 'required|min:2|max:100',
            'alamat'        => 'required',
            'namacp'        => 'required|min:2|max:50',
            'nip'           => 'required',
            'telp'          => 'required',
            'gender'        => 'required',
            'posisi'        => 'required',
            'email'         => 'email|required|min:4|max:50|unique:users,email,' . $userdinas->id,
        ]);

        $userdinas->nama_dinas = $request->namadinas;
        $userdinas->alamat = $request->alamat;
        $userdinas->name = $request->namacp;
        $userdinas->nip_cp = $request->nip;
        $userdinas->telp = $request->telp;
        $userdinas->gender = $request->gender;
        $userdinas->posisi_cp = $request->posisi;
        $userdinas->email = $request->email;

        if ($request->password) {
            $this->validate($request, [
                'password' => 'required|confirmed',
            ]);
            $userdinas->password = bcrypt($request->password);
        }

        if ($request->logo_dinas) {
            $this->validate($request, [
                'logo_dinas' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('logo_dinas');
            $image_name = time() . '_' . $file->getClientOriginalName();

            if ($userdinas->logo_dinas) {
                if (File::exists(public_path() .'/users/' . $userdinas->logo_dinas)) {
                    unlink(public_path() . '/users/' . $userdinas->logo_dinas);
                }

                if (File::exists('/users/thumbnail/' . $userdinas->logo_dinas)) {
                    unlink(public_path() . '/users/thumbnail/' . $userdinas->logo_dinas);
                }
            }

            $img = Image::make($file->getRealPath());
            $img->resize(150, 150, function ($constraint) {
                $constraint->aspectRatio();
            })->save('users/thumbnail/' . $image_name);

            $file->move('users', $image_name);

            $userdinas->logo_dinas = $image_name;
        }

        $userdinas->save();

        return redirect(route('userdinas.index'))->with('message', 'User Dinas has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userdinas = Userdinas::find($id);

        if ($userdinas->logo_dinas) {
            if (File::exists(public_path() .'/users/' . $userdinas->logo_dinas)) {
                unlink(public_path() . '/users/' . $userdinas->logo_dinas);
            }

            if (File::exists('/users/thumbnail/' . $userdinas->logo_dinas)) {
                unlink(public_path() . '/users/thumbnail/' . $userdinas->logo_dinas);
            }
        }

        $userdinas->delete();

        return redirect(route('userdinas.index'))->with('message', 'User Dinas has been deleted!');
    }
}
