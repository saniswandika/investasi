<?php

namespace App\Http\Controllers;

use App\Memberusaha;
use App\User;
use App\Product;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class MemberController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $member = Memberusaha::get();
        $product = Product::where('users_id', $id)->get();
        return view('member.member', compact('member', 'product'));
    }

    public function create()
    {
        return(view('member.create-product'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'     => 'required',
        ]);

        $currentuserid = Auth::user()->id;

        $product = new product();
        $product->users_id = $currentuserid;
        $product->name = $request->name;
        $product->location = $request->location;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->mini_desc = $request->mini_desc;
        $product->desc = $request->desc;

        if ($request->image) {
            $this->validate($request, [
                'image' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('image');
            $image_name = time() . '_' . $file->getClientOriginalName();

            $img = Image::make($file->getRealPath());
            $img->resize(450, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/product/thumbnail/' . $image_name);

            $file->move('img/product/', $image_name);

            $product->image = $image_name;
        }

        $product->save();

        Alert::success('Success', 'Product Succesfully Added!');
        return redirect(route('member.index'));
        //return view('member.member', compact('product'));


        //return redirect(route('member.index'))->with('message', 'product berhasil ditambahkan!');
    }

    public function view($id)
    {
        $ids = Auth::user()->id;
        $product = Product::find($id);
        $products = Product::where('users_id', $ids)->get();
        return view('member.view-product', compact('product', 'products'));
    }

    public function manage()
    {
        $id = Auth::user()->id;
        $manage = Memberusaha::find($id);
        $sector = DB::table('company_sector')->get();
        $cfield = DB::table('company_field')->get();
        return view('member.manage', compact('manage','sector', 'cfield'));
    }

    public function updateprofile(Request $request, $id)
    {
        $manage = Memberusaha::find($id);

        $manage->name = $request->name;
        $manage->telp = $request->telp;
        $manage->gender = $request->gender;
        $manage->email = $request->email;
        $manage->alamat = $request->alamat;
        $manage->company_city = $request->company_city;
        $manage->company_field = $request->company_field;
        $manage->company_sector = $request->company_sector;

        if ($request->photo) {
            $this->validate($request, [
                'photo' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('photo');
            $image_name = time() . '_' . $file->getClientOriginalName();

            if ($manage->photo) {
                if (File::exists(public_path() .'/users/' . $manage->photo)) {
                    unlink(public_path() . '/users/' . $manage->photo);
                }

                if (File::exists('/users/thumbnail/' . $manage->photo)) {
                    unlink(public_path() . '/users/thumbnail/' . $manage->photo);
                }
            }

            $img = Image::make($file->getRealPath());
            $img->resize(150, 150, function ($constraint) {
                $constraint->aspectRatio();
            })->save('users/thumbnail/' . $image_name);
            $file->move('users', $image_name);
            $manage->photo = $image_name;
        }

        $manage->save();
        Alert::success('Success', 'Profile sucessfully update!');
        return back();
    }

    public function destroy($id)
    {
        $product = product::find($id);

        if ($product->image) {
            if (File::exists(public_path() .'/img/product/' . $product->image)) {
                unlink(public_path() . '/img/product/' . $product->image);
            }

            if (File::exists(public_path() .'/img/product/thumbnail' . $product->image)) {
                unlink(public_path() . '/img/product/thumbnail' . $product->image);
            }
        }

        $product->delete();

        Alert::success('Success', 'Product Succesfully Delete!');
        return back();
    }
}
