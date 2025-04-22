<?php

namespace App\Http\Controllers;

use App\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Analytics\AnalyticsFacade;
use Spatie\Analytics\Period;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $analyticsData = AnalyticsFacade::performQuery(
            Period::days(7),
            'ga:sessions',
            [
                'metrics' => 'ga:sessions, ga:pageviews',
                'dimensions' => 'ga:day'
            ]
        );

        $visitor = AnalyticsFacade::performQuery(Period::months(6),'ga:sessions, ga:pageviews, ga:users, ga:avgSessionDuration, ga:newUsers, ga:organicSearches, ga:avgPageLoadTime, ga:sessionDuration, ga:bounceRate');

        $topreferer = AnalyticsFacade::fetchTopReferrers(Period::months(6),5);

        return view('home',compact('analyticsData','visitor','topreferer'));
    }

    public function filemanager(){
        return view('backend.filemanager');
    }

    public function settings(){
        $settings = Settings::all();
        return view('backend.settings',compact('settings'));
    }

    public function settingschange($id, Request $request){
        $setting = Settings::find($id);
        $setting->value = $request->value;

        if ($request->file) {
            $this->validate($request, [
                'file' => 'required|file|mimes:pdf|max:100048',
            ]);
            $file = $request->file('file');
            $file_name = 'book.pdf';

            if ($setting->file) {
                if (File::exists(public_path() .'/file/' . $setting->file)) {
                    unlink(public_path() . '/file/' . $setting->file);
                }
            }

            $file->move('file', $file_name);
            $setting->file = $file_name;
        }

        $setting->save();
        Alert::success('Success', 'Setting has been saved!');
        return back();
        //return redirect(route('settings'))->with('message','Setting has been saved!');
    }

}
