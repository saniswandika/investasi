<?php

namespace App\Http\Controllers;

use App\Agenda;
use Auth;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class AgendaController extends Controller
{

    public function index()
    {
        $agendas = Agenda::join('users', 'users.id', '=', 'agenda.users_id')
            ->select('agenda.*', 'users.name', 'agenda.created_at')
            ->orderBy('agenda.created_at', 'desc')
            ->get();
    
        return view('backend.agenda.index', compact('agendas'));
    }
    

      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.agenda.create');
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
            'title'       => 'required',
            'content'   => 'required',
        ]);

        $currentuserid = Auth::user()->id;

        $agendas = new Agenda();
        $agendas->users_id = $currentuserid;
        $agendas->headline = $request->headline;
        $agendas->content = $request->content;
        $agendas->place = $request->place;
        $agendas->eventDate = $request->eventDate;
        $agendas->title = $request->title;
        $agendas->isBahasa = $request->isBahasa;

        $agendas->isActive = 1;

        if ($request->image) {
            $this->validate($request, [
                'image' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('image');
            $image_name = time() . '_' . $file->getClientOriginalName();

            $img = Image::make($file->getRealPath());
            $img->resize(450, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/agenda/thumbnail/' . $image_name);

            $file->move('img/agenda/', $image_name);

            $agendas->image = $image_name;
        }

        $agendas->save();

        try {
            $agendas->save();
            return redirect(route('agenda.index'))->with('message', 'Agenda berhasil ditambahkan!');
        } catch (\Exception $e) {
            // Handle the case when the data fails to save
            return redirect()->back()->withInput()->withErrors(['Agenda gagal ditambahkan. Mohon dicoba kembali.']);
        }
    }

        /**
     * Display the specified resource.
     *
     * @param  \App\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agendas = Agenda::with('user')
                        ->findOrFail($id);
    
        return view('backend.agenda.view', compact('agendas'));
    }
    
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Agenda  $westJavaSectorManagement
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agendas = Agenda::find($id);

        return view('backend.agenda.edit', compact('agendas'));
    }

       /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $agendas = Agenda::find($id);

        $this->validate($request, [
            'title'       => 'required',
            'content'      => 'required',
        ]);

        $agendas->title = $request->title;
        $agendas->content = $request->content;
        $agendas->isBahasa = $request->isBahasa;
        $agendas->place = $request->place;
        $agendas->eventDate = $request->eventDate;

        if ($request->image) {
            $this->validate($request, [
                'image' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('image');
            $image_name = time() . '_' . $file->getClientOriginalName();

            if ($agendas->image) {
                if (File::exists(public_path() .'/img/agenda/' . $agendas->image)) {
                    unlink(public_path() . '/img/agenda/' . $agendas->image);
                }

                if (File::exists('/img/agenda/thumbnail/' . $agendas->image)) {
                    unlink(public_path() . '/img/agenda/thumbnail/' . $agendas->image);
                }
            }

            $img = Image::make($file->getRealPath());
            $img->resize(450, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/agenda/thumbnail/' . $image_name);

            $file->move('img/agenda', $image_name);

            $agendas->image = $image_name;
        }

        $agendas->save();

        return redirect(route('agenda.index'))->with('message', 'Data Agenda berhasil diperbarui!');

    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agendas = Agenda::find($id);

        if ($agendas->image) {
            if (File::exists(public_path() .'/img/agenda/' . $agendas->image)) {
                unlink(public_path() . '/img/agenda/' . $agendas->image);
            }
        }

        $agendas->delete();

        return redirect(route('agenda.index'))->with('message', 'Data Agenda berhasil dihapus!');
    }

}