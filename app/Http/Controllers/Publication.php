<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publikasi;

class Publication extends Controller
{
    public function index($slug = FALSE){
        if($slug === FALSE){

            $publikasi = Publikasi::join('users','users.id','=','publikasi.users_id')
                ->select('users.name as name','publikasi.slug as slug', 'publikasi.*')
                ->paginate(8);
            return view('publication', compact('publikasi'));
        }

        $publikasi = Publikasi::join('users','users.id','=','publikasi.users_id')
                            ->where('publikasi.slug', $slug)->first();
        return view('publication-detail', compact('publikasi'));
    }
}
