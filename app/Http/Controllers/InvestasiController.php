<?php

namespace App\Http\Controllers;

use App\Investasi;
use App\WestJavaSectorManagement; // Add this line at the top
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class InvestasiController extends Controller
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
            if ($this->user == 'member usaha') {
                abort(403);
            }
            return $next($request);
        });
    }

    public function index()
    {
        $users_id = Auth::user()->id;
        if (Auth::user()->role == 'user dinas') {
            $investasi = Investasi::with('sector')
                ->join('users', 'users.id', '=', 'investasi.users_id')
                ->where('users_id', $users_id)
                ->get();
        } else {
            $investasi = Investasi::with('sector')
                ->join('users', 'users.id', '=', 'investasi.users_id')
                ->get();
        }

        return view('backend.investasi.index', compact('investasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Retrieve all records from the WestJavaSectorManagement model
        // and create a collection with 'title', 'isBahasa', and 'Id' attributes.
        $sectors = WestJavaSectorManagement::all()->map(function ($sector) {
            return [
                'title' => $sector->title,
                'id' => $sector->Id,
                'isBahasa' => $sector->isBahasa
            ];
        });
    
        // Pass the $sectors variable to the view named 'backend.investasi.create'.

        return view('backend.investasi.create', compact('sectors'));
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
            'judul_investasi' => 'required',
            'project_value' => 'required',
            'mini_deskripsi' => 'required',
            'lokasi' => 'required',
            'long' => 'required',
            'lat' => 'required',
            'kategori' => 'required',
            'image' => 'required',
            'project_desc' => 'required',
            'invest_scheme' => 'required',
        ]);

        $currentuserid = Auth::user()->id;

        $investasi = new investasi();
        $investasi->judul_investasi = $request->judul_investasi;
        $investasi->users_id = $currentuserid;
        $investasi->mini_deskripsi = $request->mini_deskripsi;
        $investasi->lokasi = $request->lokasi;
        $investasi->long = $request->long;
        $investasi->lat = $request->lat;
        $investasi->kategori = $request->kategori;
        $investasi->project_value = $request->project_value;
        $investasi->project_desc = $request->project_desc;
        $investasi->invest_scheme = $request->invest_scheme;
        $investasi->fk_sector = $request->fk_sector;
        $investasi->isBahasa = $request->isBahasa;
        $investasi->author = $request->author;
        $investasi->investment_type = $request->investment_type;
        $investasi->job_title = $request->job_title;
        $investasi->irr = $request->irr;
        $investasi->npv = $request->npv;
        $investasi->payback_period = $request->payback_period;

        if ($request->image) {
            $this->validate($request, [
                'image' => 'required|file|image|mimes:jpeg,png,jpg|max:5120',
            ]);
            $file = $request->file('image');
            $image_name = time() . '_' . $file->getClientOriginalName();

            $img = Image::make($file->getRealPath());
            $img->resize(300, 300, function ($constraint) {
                $constraint->aspectRatio();
            })->save('invest/thumbnail/' . $image_name);

            $file->move('invest', $image_name);

            $investasi->image = $image_name;
        }

        if ($request->author_image) {
            $this->validate($request, [
                'author_image' => 'required|file|image|mimes:jpeg,png,jpg|max:5120',
            ]);
            $file = $request->file('author_image');
            $image_name = time() . '_author_' . $file->getClientOriginalName();

            $img = Image::make($file->getRealPath());
            $img->resize(300, 300, function ($constraint) {
                $constraint->aspectRatio();
            })->save('invest/thumbnail/' . $image_name);

            $file->move('invest', $image_name);

            $investasi->author_image = $image_name;
        }

        if ($request->support_file) {
            $this->validate($request, [
                'support_file' => 'required|file|mimes:pdf|max:5120',
            ]);
            $file = $request->file('support_file');
            $ext = $request->file('support_file')->extension();
            $file_name = time() . '.' . $ext;
            $file->move('invest/file', $file_name);

            $investasi->support_file = $file_name;
        }

        $investasi->save();

        return redirect(route('investasi.index'))->with('message', 'Investasi berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Investasi  $investasi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $investasi = investasi::find($id);

        return view('backend.investasi.view', compact('investasi'));
    }

    public function edit($id)
    {
        $investasi = investasi::find($id);
        $sectors = WestJavaSectorManagement::all()->map(function ($sector) {
            return [
                'title' => $sector->title,
                'id' => $sector->Id,
                'isBahasa' => $sector->isBahasa
            ];
        });
        return view('backend.investasi.edit', compact('investasi', 'sectors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Investasi  $investasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $investasi = investasi::find($id);

        $this->validate($request, [
            'judul_investasi' => 'required',
            'project_value' => 'required',
            'mini_deskripsi' => 'required',
            'lokasi' => 'required',
            'kategori' => 'required',
            'project_desc' => 'required',
            'invest_scheme' => 'required',
        ]);

        $investasi->judul_investasi = $request->judul_investasi;
        $investasi->mini_deskripsi = $request->mini_deskripsi;
        $investasi->lokasi = $request->lokasi;
        $investasi->long = $request->long;
        $investasi->lat = $request->lat;
        $investasi->kategori = $request->kategori;
        $investasi->project_value = $request->project_value;
        $investasi->project_desc = $request->project_desc;
        $investasi->invest_scheme = $request->invest_scheme;
        $investasi->fk_sector = $request->fk_sector;
        $investasi->isBahasa = $request->isBahasa;
        $investasi->author = $request->author;
        $investasi->investment_type = $request->investment_type;
        $investasi->job_title = $request->job_title;
        $investasi->irr = $request->irr;
        $investasi->npv = $request->npv;
        $investasi->payback_period = $request->payback_period;

        if ($request->image) {
            $this->validate($request, [
                'image' => 'required|file|image|mimes:jpeg,png,jpg|max:10048',
            ]);
            $file = $request->file('image');
            $image_name = time() . '_' . $file->getClientOriginalName();

            if ($investasi->image) {
                if (File::exists(public_path() . '/invest/' . $investasi->image)) {
                    unlink(public_path() . '/invest/' . $investasi->image);
                }

                if (File::exists(public_path() . '/invest/thumbnail/' . $investasi->image)) {
                    unlink(public_path() . '/invest/thumbnail/' . $investasi->image);
                }
            }

            $img = Image::make($file->getRealPath());
            $img->resize(300, 300, function ($constraint) {
                $constraint->aspectRatio();
            })->save('invest/thumbnail/' . $image_name);

            $file->move('invest', $image_name);

            $investasi->image = $image_name;
        }

        if ($request->author_image) {
            $this->validate($request, [
                'author_image' => 'required|file|image|mimes:jpeg,png,jpg|max:10048',
            ]);
            $file = $request->file('author_image');
            $image_name = time() . '_author_' . $file->getClientOriginalName();

            if ($investasi->author_image) {
                if (File::exists(public_path() . '/invest/' . $investasi->author_image)) {
                    unlink(public_path() . '/invest/' . $investasi->author_image);
                }
                if (File::exists(public_path() . '/invest/thumbnail/' . $investasi->author_image)) {
                    unlink(public_path() . '/invest/thumbnail/' . $investasi->author_image);
                }

            }

            $img = Image::make($file->getRealPath());
            $img->resize(300, 300, function ($constraint) {
                $constraint->aspectRatio();
            })->save('invest/thumbnail/' . $image_name);

            $file->move('invest', $image_name);

            $investasi->author_image = $image_name;
        }

        if ($request->support_file) {
            $this->validate($request, [
                'support_file' => 'required|file|mimes:pdf|max:5120',
            ]);
            $file = $request->file('support_file');
            $ext = $request->file('support_file')->extension();
            $file_name = time() . '.' . $ext;

            if ($investasi->support_file) {
                if (File::exists(public_path() . '/invest/file/' . $investasi->support_file)) {
                    unlink(public_path() . '/invest/file/' . $investasi->support_file);
                }
            }

            $file->move('invest/file', $file_name);

            $investasi->support_file = $file_name;
        }

        $investasi->save();

        return redirect(route('investasi.index'))->with('message', 'Investasi berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Investasi  $investasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $investasi = investasi::find($id);

        if ($investasi->image) {
            if (File::exists(public_path() . '/invest/' . $investasi->image)) {
                unlink(public_path() . '/invest/' . $investasi->image);
            }

            if (File::exists(public_path() . '/invest/thumbnail/' . $investasi->image)) {
                unlink(public_path() . '/invest/thumbnail/' . $investasi->image);
            }
        }

        if ($investasi->author_image) {
            if (File::exists(public_path() . '/invest/' . $investasi->author_image)) {
                unlink(public_path() . '/invest/' . $investasi->author_image);
            }
            if (File::exists(public_path() . '/invest/thumbnail/' . $investasi->author_image)) {
                unlink(public_path() . '/invest/thumbnail/' . $investasi->author_image);
            }

        }

        if ($investasi->support_file) {
            if (File::exists(public_path() . '/invest/file/' . $investasi->support_file)) {
                unlink(public_path() . '/invest/file/' . $investasi->support_file);
            }
        }

        $investasi->delete();

        return redirect(route('investasi.index'))->with('message', 'Investasi berhasil dihapus!');
    }

    public function list()
    {
        // Query the database to get the list of investments
        $investments = Investasi::select('id', 'judul_investasi')->get();

        // Create an array to store the investment data in a format suitable for a dropdown
        $investmentList = $investments->pluck('judul_investasi', 'id')->toArray();

        // Return the investment list as JSON (you can also return it as needed)
        return response()->json(['investmentList' => $investmentList]);
    }

}
