<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

// Crawl News Testing
Route::get('/crawlnews', 'Articles@CrawlNews');

Route::group(['middleware' => 'language'], function () {
    // Route::get('/', 'FrontController@home')->name('front.home');
    Route::get('/vision-mission', 'FrontController@visionmission')->name('front.visionmission');

    // front website V2
    // Route::prefix('v2')->group(function () {
        Route::get('/', 'NewPageController@home')->name('front.home.v2');
        Route::get('/investment-opportunities', 'InvestmentOp@home')->name('front.investment.v2');
        Route::get('/investment-opportunities-map', 'InvestmentOp@map')->name('front.investment-map.v2');
        Route::get('/investment-opportunities/{id}', 'InvestmentOp@show')->name('front.inverstment.show.v2');
        Route::get('/sector', 'SectorController@home')->name('front.sector.v2');
        Route::get('/news', 'NewsController@home')->name('front.news.v2');
        Route::get('/news/{slug}', 'NewsController@show')->name('front.news.show.v2');
        Route::get('/region', 'RegionController@home')->name('front.region.v2');
        Route::get('/region/{slug}', 'RegionController@show')->name('front.region.show.v2');
        Route::get('/why-invest', 'WhyInvestNewController@home')->name('front.whyinvest.v2');
        Route::get('/how-we-can-help', 'HowWeCanHelpController@home')->name('front.howWeCanHelp.v2');
        Route::get('/event', 'EventController@home')->name('front.event.v2');
        Route::get('/event/{slug}', 'EventController@show')->name('front.event.show.v2');
        Route::get('/umkm', 'UmkmController@home')->name('front.umkm.v2');
        Route::get('/presentation-book', 'PresentationBookController@home')->name('front.presentation-book.v2');
        Route::get('/presentation-book/{slug}', 'PresentationBookController@show')->name('front.presentation-book.show.v2');
        Route::get('/get-in-touch', 'GetTouchController@home')->name('front.get.touch.v2');
        Route::get('/commodity', 'CommodityController@home')->name('front.commodity.v2');

    // });

    //coba
    // Route::get('/themes', 'FrontController@themes')->name('front.themes');
    Route::get('/themes', [RegisterController::class, 'themes'])->middleware('auth');

    //depan
    Route::get('/west-java-in-a-glance', 'FrontController@inglance')->name('front.inglance');
    Route::get('/why-should-invest', 'FrontController@invest')->name('front.why-should-invest');
    Route::get('/what-west-java-offer', 'FrontController@offer')->name('front.what-west-java-offer');

    Route::get('/infrastructure', 'FrontController@infrastructure')->name('front.infrastructure');
    Route::get('/public-partnership-project', 'FrontController@publicpartnership')->name('front.publicpartnership');
    Route::get('/new-industrial-zones', 'FrontController@newindustrial')->name('front.newindustrial');
    Route::get('/digital-province', 'FrontController@digitalprovince')->name('front.digitalprovince');
    Route::get('/social-development', 'FrontController@socialdevelopment')->name('front.socialdevelopment');
    Route::get('/stated-owned-enterprise', 'FrontController@statedowned')->name('front.statedownedenterprise');
    Route::get('/tourism-investment', 'FrontController@tourisminvest')->name('front.tourisminvestment');
    Route::get('/trading-comodities', 'FrontController@trading')->name('front.tradingcomodities');

    Route::get('/companies', 'FrontController@companies')->name('front.companies');
    Route::get('/companies/search', 'FrontController@searchcompanies')->name('searchcompanies');
    Route::get('/companies/{slug}', 'FrontController@companies')->name('front.companiesshow');
    Route::get('/companies/product/{id}', 'FrontController@companyproduct')->name('companyproduct');

    Route::get('/fintech', 'Fintechfront@index')->name('front.fintech');
    Route::get('/fintech/search', 'Fintechfront@search')->name('searchfintech');
    Route::get('/fintech/{slug}', 'Fintechfront@show')->name('front.fintech-detail');

    Route::get('/industries', 'IndustriesController@index')->name('front.industries');
    Route::get('/industries-new', 'IndustriesController@home')->name('front.industries-home');
    Route::get('/industries/{slug}', 'IndustriesController@show')->name('front.industries.show');

    Route::get('/investment-oportunity', 'InvestmentOportunity@index')->name('investment-oportunity.index');
    Route::get('/investment-oportunity/{slug}', 'InvestmentOportunity@show')->name('investment-oportunity.show');

    Route::get('/articles', 'Articles@index')->name('articles.index');
    Route::get('/articles/{slug}', 'Articles@show')->name('articles.show');

    Route::get('/publication', 'Publication@index')->name('publication.index');
    Route::get('/publication/{slug}', 'Publication@index')->name('publication.show');

    Route::get('/profiles', 'Profiles@index')->name('profiles.index');
    Route::get('/profiles/{slug}', 'Profiles@show')->name('profiles.show');

    Route::get('/contact', 'FrontController@contact')->name('contact');
    Route::post('/contact/store', 'ContactsController@store')->name('contact.store');
    Route::post('/newsletter/store', 'NewsletterController@store')->name('newsletter.store');

    Route::get('/inf/json/toll_road/{status}', 'InfrastructureController@toll_road');
    Route::get('/inf/json/railway/{status}', 'InfrastructureController@railway');
    Route::get('/inf/json/railway_hst/{status}', 'InfrastructureController@railway_hst');
    Route::get('/inf/json/airport/{status}', 'InfrastructureController@airport');
    Route::get('/inf/json/seaport/{status}', 'InfrastructureController@seaport');
    Route::get('/inf/json/hst/{status}', 'InfrastructureController@hst');
    Route::get('/inf/json/lrt/{status}', 'InfrastructureController@lrt');
    Route::get('/inf/json/solid_waste/{status}', 'InfrastructureController@solid_waste');
    Route::get('/inf/json/dam/{status}', 'InfrastructureController@dam');
    Route::get('/inf/json/hpp1/{status}', 'InfrastructureController@hpp1');
    Route::get('/inf/json/hpp2/{status}', 'InfrastructureController@hpp2');
    Route::get('/inf/json/rwtp1/{status}', 'InfrastructureController@rwtp1');
    Route::get('/inf/json/rwtp2/{status}', 'InfrastructureController@rwtp2');
    Route::get('/inf/json/rwtp3/{status}', 'InfrastructureController@rwtp3');

});

Route::get('/lang/{key}', function ($key) {
    session()->put('locale', $key);
    return redirect()->back();
})->name('setlanguage');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'cekadmin:' || 'cekadmin:user dinas'], function () {
        Route::get('/home', 'HomeController@index')->name('home');
        Route::get('/files', 'HomeController@filemanager')->name('filemanager');
        Route::get('/settings', 'HomeController@settings')->name('settings');
        Route::put('/settings/change/{id}', 'HomeController@settingschange')->name('settings.change');

        //Users
        Route::get('/backend/users', 'UsersController@index')->name('users.index');
        Route::get('/backend/users/create', 'UsersController@create')->name('users.create');
        Route::post('/backend/users/store', 'UsersController@store')->name('users.store');
        Route::get('/backend/users/show/{id}', 'UsersController@show')->name('users.show');
        Route::get('/backend/users/edit/{id}', 'UsersController@edit')->name('users.edit');
        Route::put('/backend/users/update/{id}', 'UsersController@update')->name('users.update');
        Route::get('/backend/users/destroy/{id}', 'UsersController@destroy')->name('users.destroy');

        //User Dinas
        Route::get('/userdinas', 'UserdinasController@index')->name('userdinas.index');
        Route::get('/userdinas/create', 'UserdinasController@create')->name('userdinas.create');
        Route::post('/userdinas/store', 'UserdinasController@store')->name('userdinas.store');
        Route::get('/userdinas/show/{id}', 'UserdinasController@show')->name('userdinas.show');
        Route::get('/userdinas/edit/{id}', 'UserdinasController@edit')->name('userdinas.edit');
        Route::put('/userdinas/update/{id}', 'UserdinasController@update')->name('userdinas.update');
        Route::get('/userdinas/destroy/{id}', 'UserdinasController@destroy')->name('userdinas.destroy');

        //why invest
        Route::get('/whyinvest', 'WhyInvestController@index')->name('whyinvest.index');
        Route::get('/whyinvest/create', 'WhyInvestController@create')->name('whyinvest.create');
        Route::post('/whyinvest/store', 'WhyInvestController@store')->name('whyinvest.store');
        Route::get('/whyinvest/show/{Id}', 'WhyInvestController@show')->name('whyinvest.show');
        Route::get('/whyinvest/edit/{Id}', 'WhyInvestController@edit')->name('whyinvest.edit');
        Route::put('/whyinvest/update/{Id}', 'WhyInvestController@update')->name('whyinvest.update');
        Route::get('/whyinvest/destroy/{Id}', 'WhyInvestController@destroy')->name('whyinvest.destroy');

        //Economy Statistic
        Route::get('/economyStatistic', 'EconomyStatisticController@index')->name('economyStatistic.index');
        Route::get('/economyStatistic/create', 'EconomyStatisticController@create')->name('economyStatistic.create');
        Route::post('/economyStatistic/store', 'EconomyStatisticController@store')->name('economyStatistic.store');
        Route::get('/economyStatistic/show/{Id}', 'EconomyStatisticController@show')->name('economyStatistic.show');
        Route::get('/economyStatistic/edit/{Id}', 'EconomyStatisticController@edit')->name('economyStatistic.edit');
        Route::put('/economyStatistic/update/{Id}', 'EconomyStatisticController@update')->name('economyStatistic.update');
        Route::get('/economyStatistic/destroy/{Id}', 'EconomyStatisticController@destroy')->name('economyStatistic.destroy');

        //Economy Graphic
        Route::get('/economyGraphic', 'EconomyGraphicController@index')->name('economyGraphic.index');
        Route::get('/economyGraphic/create', 'EconomyGraphicController@create')->name('economyGraphic.create');
        Route::post('/economyGraphic/store', 'EconomyGraphicController@store')->name('economyGraphic.store');
        Route::get('/economyGraphic/show/{Id}', 'EconomyGraphicController@show')->name('economyGraphic.show');
        Route::get('/economyGraphic/edit/{Id}', 'EconomyGraphicController@edit')->name('economyGraphic.edit');
        Route::put('/economyGraphic/update/{Id}', 'EconomyGraphicController@update')->name('economyGraphic.update');
        Route::get('/economyGraphic/destroy/{Id}', 'EconomyGraphicController@destroy')->name('economyGraphic.destroy');

        //WJIS Registration
        Route::get('/wjisRegistration', 'WJISRegistrationController@index')->name('wjisRegistration.index');
        Route::get('/wjisRegistration/show/{Id}', 'WJISRegistrationController@show')->name('wjisRegistration.show');
        Route::get('/wjisRegistration/edit/{Id}', 'WJISRegistrationController@edit')->name('wjisRegistration.edit');
        Route::put('/wjisRegistration/update/{Id}', 'WJISRegistrationController@update')->name('wjisRegistration.update');
        Route::get('/wjisRegistration/destroy/{Id}', 'WJISRegistrationController@destroy')->name('wjisRegistration.destroy');

        //Profiles
        Route::get('/profile', 'ProfileController@index')->name('profile.index');
        Route::get('/profile/create', 'ProfileController@create')->name('profile.create');
        Route::post('/profile/store', 'ProfileController@store')->name('profile.store');
        Route::get('/profile/show/{id}', 'ProfileController@show')->name('profile.show');
        Route::get('/profile/edit/{id}', 'ProfileController@edit')->name('profile.edit');
        Route::put('/profile/update/{id}', 'ProfileController@update')->name('profile.update');
        Route::get('/profile/destroy/{id}', 'ProfileController@destroy')->name('profile.destroy');

        //Member Usaha
        Route::get('/memberusaha', 'MemberusahaController@index')->name('memberusaha.index');
        Route::get('/memberusaha/create', 'MemberusahaController@create')->name('memberusaha.create');
        Route::post('/memberusaha/store', 'MemberusahaController@store')->name('memberusaha.store');
        Route::get('/memberusaha/show/{id}', 'MemberusahaController@show')->name('memberusaha.show');
        Route::get('/memberusaha/edit/{id}', 'MemberusahaController@edit')->name('memberusaha.edit');
        Route::put('/memberusaha/update/{id}', 'MemberusahaController@update')->name('memberusaha.update');
        Route::get('/memberusaha/destroy/{id}', 'MemberusahaController@destroy')->name('memberusaha.destroy');

        //investasi
        Route::get('/investasi', 'InvestasiController@index')->name('investasi.index');
        Route::get('/investasi/create', 'InvestasiController@create')->name('investasi.create');
        Route::post('/investasi/store', 'InvestasiController@store')->name('investasi.store');
        Route::get('/investasi/show/{invest_id}', 'InvestasiController@show')->name('investasi.show');
        Route::get('/investasi/edit/{invest_id}', 'InvestasiController@edit')->name('investasi.edit');
        Route::put('/investasi/update/{invest_id}', 'InvestasiController@update')->name('investasi.update');
        Route::get('/investasi/destroy/{invest_id}', 'InvestasiController@destroy')->name('investasi.destroy');
        Route::get('/investasi/list', 'InvestasiController@list')->name('investasi.list');;

        //fintech
        Route::get('/backend/fintech', 'FintechController@index')->name('fintech.index');
        Route::get('/backend/fintech/create', 'FintechController@create')->name('fintech.create');
        Route::post('/backend/fintech/store', 'FintechController@store')->name('fintech.store');
        Route::get('/backend/fintech/edit/{id}', 'FintechController@edit')->name('fintech.edit');
        Route::put('/backend/fintech/update/{id}', 'FintechController@update')->name('fintech.update');
        Route::get('/backend/fintech/destroy/{id}', 'FintechController@destroy')->name('fintech.destroy');

        //publikasi
        Route::get('/publikasi', 'PublikasiController@index')->name('publikasi.index');
        Route::get('/publikasi/create', 'PublikasiController@create')->name('publikasi.create');
        Route::post('/publikasi/store', 'PublikasiController@store')->name('publikasi.store');
        Route::get('/publikasi/show/{pub_id}', 'PublikasiController@show')->name('publikasi.show');
        Route::get('/publikasi/edit/{pub_id}', 'PublikasiController@edit')->name('publikasi.edit');
        Route::put('/publikasi/update/{pub_id}', 'PublikasiController@update')->name('publikasi.update');
        Route::get('/publikasi/destroy/{pub_id}', 'PublikasiController@destroy')->name('publikasi.destroy');

        //publikasi
        Route::get('/artikel', 'ArtikelController@index')->name('artikel.index');
        Route::get('/artikel/create', 'ArtikelController@create')->name('artikel.create');
        Route::post('/artikel/store', 'ArtikelController@store')->name('artikel.store');
        Route::get('/artikel/show/{art_id}', 'ArtikelController@show')->name('artikel.show');
        Route::get('/artikel/edit/{art_id}', 'ArtikelController@edit')->name('artikel.edit');
        Route::put('/artikel/update/{art_id}', 'ArtikelController@update')->name('artikel.update');
        Route::get('/artikel/destroy/{art_id}', 'ArtikelController@destroy')->name('artikel.destroy');

        //industri
        Route::get('/industri', 'IndustryController@index')->name('industri.index');
        Route::get('/industri/create', 'IndustryController@create')->name('industri.create');
        Route::post('/industri/store', 'IndustryController@store')->name('industri.store');
        Route::get('/industri/show/{id}', 'IndustryController@show')->name('industri.show');
        Route::get('/industri/edit/{id}', 'IndustryController@edit')->name('industri.edit');
        Route::put('/industri/update/{id}', 'IndustryController@update')->name('industri.update');
        Route::get('/industri/destroy/{id}', 'IndustryController@destroy')->name('industri.destroy');

        //new industri
        Route::get('/industri/new/', 'NewIndustryController@index')->name('industri-new.index');
        Route::get('/industri/new/create', 'NewIndustryController@create')->name('industri-new.create');
        Route::post('/industri/new/store', 'NewIndustryController@store')->name('industri-new.store');
        Route::get('/industri/new/show/{id}', 'NewIndustryController@show')->name('industri-new.show');
        Route::get('/industri/new/edit/{id}', 'NewIndustryController@edit')->name('industri-new.edit');
        Route::put('/industri/new/update/{id}', 'NewIndustryController@update')->name('industri-new.update');
        Route::get('/industri/new/destroy/{id}', 'NewIndustryController@destroy')->name('industri-new.destroy');

        //infrastructure
        Route::get('/backend/infrastructure', 'InfrastructureController@index')->name('infrastructure.index');
        Route::get('/backend/infrastructure/create', 'InfrastructureController@create')->name('infrastructure.create');
        Route::post('/backend/infrastructure/store', 'InfrastructureController@store')->name('infrastructure.store');
        Route::get('/backend/infrastructure/edit/{id}', 'InfrastructureController@edit')->name('infrastructure.edit');
        Route::put('/backend/infrastructure/update/{id}', 'InfrastructureController@update')->name('infrastructure.update');
        Route::get('/backend/infrastructure/destroy/{id}', 'InfrastructureController@destroy')->name('infrastructure.destroy');

        //Commodities
        Route::get('/commodities/', 'TradingComoditiesController@index')->name('comodities.index');
        Route::get('/commodities/create', 'TradingComoditiesController@create')->name('comodities.create');
        Route::post('/commodities/store', 'TradingComoditiesController@store')->name('comodities.store');
        Route::get('/commodities/show/{id}', 'TradingComoditiesController@show')->name('comodities.show');
        Route::get('/commodities/edit/{id}', 'TradingComoditiesController@edit')->name('comodities.edit');
        Route::put('/commodities/update/{id}', 'TradingComoditiesController@update')->name('comodities.update');
        Route::get('/commodities/destroy/{id}', 'TradingComoditiesController@destroy')->name('comodities.destroy');

        //Tourism
        Route::get('/tourism/', 'TourismController@index')->name('tourism.index');
        Route::get('/tourism/create', 'TourismController@create')->name('tourism.create');
        Route::post('/tourism/store', 'TourismController@store')->name('tourism.store');
        Route::get('/tourism/show/{id}', 'TourismController@show')->name('tourism.show');
        Route::get('/tourism/edit/{id}', 'TourismController@edit')->name('tourism.edit');
        Route::put('/tourism/update/{id}', 'TourismController@update')->name('tourism.update');
        Route::get('/tourism/destroy/{id}', 'TourismController@destroy')->name('tourism.destroy');

        //Contact
        Route::get('/backend/contact', 'ContactsController@index')->name('contact.index');

        //Newsletter
        Route::get('/backend/newsletter', 'NewsletterController@index')->name('backend.newsletter.index');
        Route::post('/backend/newsletter/store', 'NewsletterController@store')->name('backend.newsletter.store');

        //West Java Sector Management
        Route::get('/westjavasectormanagement', 'WestJavaSectorManagementController@index')->name('westjavasectormanagement.index');
        Route::get('/westjavasectormanagement/create', 'WestJavaSectorManagementController@create')->name('westjavasectormanagement.create');
        Route::post('/westjavasectormanagement/store', 'WestJavaSectorManagementController@store')->name('westjavasectormanagement.store');
        Route::get('/westjavasectormanagement/show/{Id}', 'WestJavaSectorManagementController@show')->name('westjavasectormanagement.show');
        Route::get('/westjavasectormanagement/edit/{Id}', 'WestJavaSectorManagementController@edit')->name('westjavasectormanagement.edit');
        Route::put('/westjavasectormanagement/update/{Id}', 'WestJavaSectorManagementController@update')->name('westjavasectormanagement.update');
        Route::get('/westjavasectormanagement/destroy/{Id}', 'WestJavaSectorManagementController@destroy')->name('westjavasectormanagement.destroy');

        //Agenda
        Route::get('/agenda', 'AgendaController@index')->name('agenda.index');
        Route::get('/agenda/create', 'AgendaController@create')->name('agenda.create');
        Route::post('/agenda/store', 'AgendaController@store')->name('agenda.store');
        Route::get('/agenda/show/{Id}', 'AgendaController@show')->name('agenda.show');
        Route::get('/agenda/edit/{Id}', 'AgendaController@edit')->name('agenda.edit');
        Route::put('/agenda/update/{Id}', 'AgendaController@update')->name('agenda.update');
        Route::get('/agenda/destroy/{Id}', 'AgendaController@destroy')->name('agenda.destroy');

        //Homepage
        Route::get('/homepage', 'HomepageController@index')->name('homepage.index');
        Route::get('/homepage/create', 'HomepageController@create')->name('homepage.create');
        Route::post('/homepage/store', 'HomepageController@store')->name('homepage.store');
        Route::get('/homepage/show/{Id}', 'HomepageController@show')->name('homepage.show');
        Route::get('/homepage/edit/{Id}', 'HomepageController@edit')->name('homepage.edit');
        Route::put('/homepage/update/{Id}', 'HomepageController@update')->name('homepage.update');
        Route::get('/homepage/destroy/{Id}', 'HomepageController@destroy')->name('homepage.destroy');

        //Banner
        Route::get('/banner', 'BannerController@index')->name('banner.index');
        Route::get('/banner/create', 'BannerController@create')->name('banner.create');
        Route::post('/banner/store', 'BannerController@store')->name('banner.store');
        Route::get('/banner/show/{Id}', 'BannerController@show')->name('banner.show');
        Route::get('/banner/edit/{Id}', 'BannerController@edit')->name('banner.edit');
        Route::put('/banner/update/{Id}', 'BannerController@update')->name('banner.update');
        Route::get('/banner/destroy/{Id}', 'BannerController@destroy')->name('banner.destroy');

    });

    Route::group(['middleware' => 'cekadmin:member usaha'], function () {
        Route::get('/member', 'MemberController@index')->name('member.index');
        Route::get('/member/create', 'MemberController@create')->name('member.create');
        Route::get('/member/manage', 'MemberController@manage')->name('member.manage');
        Route::post('/member/store', 'MemberController@store')->name('member.store');
        Route::get('/member/product/{id}', 'MemberController@view')->name('member.show');
        Route::post('/member/updateprofile/{id}', 'MemberController@updateprofile')->name('member.updateprofile');
        Route::get('/member/destroy/{id}', 'MemberController@destroy')->name('member.destroy');
    });

});
