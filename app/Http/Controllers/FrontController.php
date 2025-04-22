<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\Investasi;
use App\Memberusaha;
use App\Industry;
use App\NewIndustry;
use App\User;
use App\Profile;
use App\Product;
use App\TradingComodities;
use App\Tourism;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Lang;

class FrontController extends Controller
{
    public function home()
    {
        if (Lang::locale() === 'id'){
            $artikel = Artikel::where('lang_type', 'id')->orderBy('art_id','DESC')->skip(1)->take(3)->get();
            $latest = Artikel::where('lang_type', 'id')->latest()->first();
            $investasi = Investasi::orderBy('invest_id', 'desc')->paginate(6);
            $profile = Profile::paginate(6);
            return view('welcome', compact('artikel', 'latest','investasi', 'profile'));
        }else{
            $artikel = Artikel::where('lang_type', 'en')->orderBy('art_id','DESC')->skip(1)->take(3)->get();
            $latest = Artikel::where('lang_type', 'en')->latest()->first();
            $investasi = Investasi::orderBy('invest_id', 'desc')->paginate(6);
            $profile = Profile::paginate(6);
            return view('welcome', compact('artikel', 'latest','investasi', 'profile'));
        }

    }

    public function visionmission()
    {
        return view('vision-mision');
    }

    public function companies($slug = FALSE)
    {
        $sector = DB::table('company_sector')->get();
        $cfield = DB::table('company_field')->get();

        if($slug === FALSE) {
            $company = User::where('role', '=', 'member usaha')
                ->where('status', '=', 1)
                ->paginate(9);
            return view('companies', compact('company', 'sector', 'cfield'));
        }
        $product = Product::join('users', 'users.id' ,'=' , 'products.users_id')
            ->where('slug', $slug)
            ->select('products.name as productname','products.id as productid','products.*')
            ->get();
        $company = User::where([
            ['slug', $slug],
            ['role', '=' , 'member usaha'],
        ])->first();
        return view('companies-detail', compact('company','product'));
    }

    public function companyproduct($id)
    {
        $products = Product::get();
        $product = Product::join('users', 'users.id' ,'=' , 'products.users_id')
            ->find($id);
        return view('companies-viewproduct', compact('product','products'));
    }

    public function searchcompanies(Request $request)
    {
        $sector = DB::table('company_sector')->get();
        $cfield = DB::table('company_field')->get();

        $company = $request->company;
        $sectors = $request->sectors;
        $field = $request->field;

        $search = User::where('role', '=', 'member usaha')
            ->where('name','like',"%".$company."%")
            ->where('company_sector', 'like', "%".$sectors."%")
            ->where('company_field', 'like', "%".$field."%")
            ->paginate(9);
        return view('searchcompanies', compact('search','sector', 'cfield'));
    }

    public function companiesshow($id)
    {
        return view('companies-detail');
    }

    public function inglance()
    {
        return view('west-java-in-glance');
    }

    public function infrastructure()
    {
        return view('west-java-offers.infrastructure');
    }

    public function publicpartnership()
    {
        return view('west-java-offers.public-private-partnership');
    }

    public function invest()
    {
        return view('why-should-invest');
    }

    public function offer()
    {
        return view('what-west-java-offer');
    }

    public function newindustrial()
    {
        $industry = NewIndustry::all();
        $industri = Industry::all();
        return view('west-java-offers.new-industrial', compact('industry','industri'));
    }

    public function digitalprovince()
    {
        return view('west-java-offers.digital-province');
    }

    public function socialdevelopment()
    {
        return view('west-java-offers.social-development');
    }

    public function statedowned()
    {
        return view('west-java-offers.stated-owned-enterprise');
    }

    public function tourisminvest()
    {
        $maptourism = Tourism::where('type', 'Tourism Map Profile')->get();
        $futuretourism = Tourism::where('type', 'Future Tourism Development')->get();
        return view('west-java-offers.tourism-investment', compact('maptourism', 'futuretourism'));
    }

    public function trading()
    {
        $resources = TradingComodities::where('type', 'resources')->get();
        $coffee = TradingComodities::where('type', 'coffee')->get();
        $fruits = TradingComodities::where('type', 'fruits')->get();
        return view('west-java-offers.trading-comodities', compact('resources', 'coffee', 'fruits'));
    }

    public function contact()
    {
        return view('contact');
    }
    
    public function themes()
    {
        return redirect('https://investmenthub.jabarprov.go.id/');
    }

}
