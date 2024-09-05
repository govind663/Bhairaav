<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\PreventBackHistoryMiddleware;

// ===== Backend
use App\Http\Controllers\backend\Auth\LoginController;
use App\Http\Controllers\backend\HomeController as BackendHomeController;
use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\backend\LegacyOfExcellence;
use App\Http\Controllers\backend\WhyChooseBhairaavController;
use App\Http\Controllers\backend\TestimonialController;
use App\Http\Controllers\backend\LatestUpdatesController;
use App\Http\Controllers\backend\TheJourneyController;
use App\Http\Controllers\backend\MemberController;
use App\Http\Controllers\backend\TheProgressDetailController;
use App\Http\Controllers\backend\LegacyController;
use App\Http\Controllers\backend\StrengthController;
use App\Http\Controllers\backend\OurLogoController;
use App\Http\Controllers\backend\OurLeaderController;
use App\Http\Controllers\backend\OurTeamsController;
use App\Http\Controllers\backend\PartnerController;
use App\Http\Controllers\backend\BackingPartnerController;
use App\Http\Controllers\backend\ProjectsController;
use App\Http\Controllers\backend\LocationAdvantageController;
use App\Http\Controllers\backend\ProjectDetailsController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\LoyaltyProgramController;
use App\Http\Controllers\backend\HowWorkLoyaltyProgramController;
use App\Http\Controllers\backend\ReInvestmentLoyaltyProgramController;
use App\Http\Controllers\backend\ReferLoyaltyProgramController;
use App\Http\Controllers\backend\BlogsController;
use App\Http\Controllers\backend\GalleryController;

// ===== Frontend
use App\Http\Controllers\frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\WhoWeAreController;
use App\Http\Controllers\frontend\LeadershipController;
use App\Http\Controllers\frontend\OurTeamController;
use App\Http\Controllers\frontend\AssociatesController;
use App\Http\Controllers\frontend\OngoingProjectController;
use App\Http\Controllers\frontend\ResidentialProjectController;
use App\Http\Controllers\frontend\CommercialProjectController;
use App\Http\Controllers\frontend\CompletedProjectController;
use App\Http\Controllers\frontend\UpcomingProjectController;
use App\Http\Controllers\frontend\ChannelPartnerController;
use App\Http\Controllers\frontend\ChannelReferController;
use App\Http\Controllers\frontend\MediaController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\ContactUsController;

// ===== Import Model
use App\Models\LatestUpdate;
use App\Models\Slider;
use App\Models\LegacyOfExcellence as ModelsLegacyOfExcellence;
use App\Models\Testimonial;
use App\Models\WhyChooseBhairaav;

Route::get('/', function () {
    // ==== Fetch Banner
    $sliders = Slider::orderBy("id","desc")->whereNull('deleted_at')->get();

    // ==== Fetch Legacy of Excellence
    $legacy = ModelsLegacyOfExcellence::orderBy("id","desc")->whereNull('deleted_at')->first();

    // ==== Fetch Why Choose Bhairaav
    $whyChooseBhairaavs = WhyChooseBhairaav::orderBy("id","desc")->whereNull('deleted_at')->first();

    // ==== Fetch Testimonials
    $testimonials = Testimonial::orderBy("id","desc")->whereNull('deleted_at')->get();

    // ==== Fetch NEWS & MEDIA
    $latestUpdates = LatestUpdate::orderBy("id","desc")->whereNull('deleted_at')->get();

    return view('frontend.home', [
        'sliders' => $sliders,
        'legacy' => $legacy,
        'whyChooseBhairaavs' => $whyChooseBhairaavs,
        'testimonials' => $testimonials,
        'latestUpdates' => $latestUpdates
    ]);
})->name('/');

Route::group(['prefix' => 'bhairaav'],function(){

    // ======================= Admin Login/Logout
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::get('/admin/login', [LoginController::class, 'login'])->name('admin.login');
    Route::post('/admin/login/store', [LoginController::class, 'authenticate'])->name('admin.login.store');

    // ==== Logout
    Route::post('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');
});

// ======================= Admin Dashboard
Route::group(['prefix' => 'bhairaav', 'middleware'=>['auth', PreventBackHistoryMiddleware::class]],function(){

    // ==== Dashboard
    Route::get('/dashboard', [BackendHomeController::class, 'Admin_Home'])->name('admin.dashboard');

    // ==== Update Password
    Route::get('/change-password', [BackendHomeController::class, 'changePassword'])->name('change-password');
    Route::post('/change-password', [BackendHomeController::class, 'updatePassword'])->name('update-password');

    // ==== Manage Slider resource
    Route::resource('sliders', SliderController::class);

    // ==== Manage Legacy of Excellence
    Route::resource('legacy_of_excellence', LegacyOfExcellence::class);

    // ==== Manage Why Choose Bhairaav
    Route::resource('why_choose_bhiraavs', WhyChooseBhairaavController::class);

    // ==== Manage Testimonial
    Route::resource('testimonials', TestimonialController::class);

    // ==== Manage Latest Updates
    Route::resource('latest_update', LatestUpdatesController::class);

    // ==== Manage The Journey
    Route::resource('the_journeys', TheJourneyController::class);

    // ==== Manage Member
    Route::resource('members', MemberController::class);

    // ==== Manage The Progress
    Route::resource('the_progress', TheProgressDetailController::class);

    // ==== Manage The Legacy
    Route::resource('the_legacy', LegacyController::class);

    // ==== Manage Strengths
    Route::resource('strengths', StrengthController::class);

    // ==== Manage Our Logo
    Route::resource('our_logos', OurLogoController::class);

    // ==== Manage Our Leaders
    Route::resource('our-leader', OurLeaderController::class);

    // ==== Manage Our Team
    Route::resource('our_teams', OurTeamsController::class);

    // ==== Manage Partners
    Route::resource('partners', PartnerController::class);

    // ==== Manage Banking Partners
    Route::resource('banking_partners', BackingPartnerController::class);

    // ==== Manage Projects
    Route::resource('bhairaav_projects', ProjectsController::class);

    // === list all project with status
    Route::get('projects-list/{status}', [ProjectsController::class, 'projectList'])->name('projects.index');

    // ==== Manage Location Advantages
    Route::resource('location-advantage', LocationAdvantageController::class);

    // ==== manage Projects Details
    Route::resource('project_details', ProjectDetailsController::class);

    // ==== fetch api/fetch-projects
    Route::post('fetch-projects', [ProjectDetailsController::class, 'fetchProjects'])->name('fetch-projects');

    // ==== Manage Category resource
    Route::resource('categories', CategoryController::class);

    // ==== Manage Loyalty Program
    Route::resource('loyalty_programs', LoyaltyProgramController::class);

    // ==== Manage How Work Loyalty Program
    Route::resource('how_work_loyalty_programs', HowWorkLoyaltyProgramController::class);

    // ==== Manage Re-Invest Loyalty Program
    Route::resource('re_investment_loyalty_programs', ReInvestmentLoyaltyProgramController::class);

    // ==== Manage Refer Loyalty Program
    Route::resource('refer_loyalty_programs', ReferLoyaltyProgramController::class);

    // ==== Manage Gallary
    Route::resource('gallery', GalleryController::class);

    // ==== Manage Blog resource
    Route::resource('blogs', BlogsController::class);

});


// ======================= Frontend
Route::group(['prefix'=> 'bhairaav', 'middleware'=>[PreventBackHistoryMiddleware::class]],function(){

    // ==== Home
    Route::get('/home', [FrontendHomeController::class, 'index'])->name('frontend.home');

    // ==== About Sub Section
    Route::group(['prefix'=>'about-bhairaav'], function(){

        // ==== Who We Are
        Route::get('who-we-are', [WhoWeAreController::class, 'whoWeAre'])->name('frontend.about.who-we-are');

        // ==== Leadership
        Route::get('leadership', [LeadershipController::class, 'leadership'])->name('frontend.about.leadership');

        // ==== Our Team
        Route::get('our-team', [OurTeamController::class, 'ourTeam'])->name('frontend.about.our-team');

        // ==== Associates
        Route::get('associates', [AssociatesController::class, 'associates'])->name('frontend.about.associates');
    });

    // ==== Projects Sub Section
    Route::group(['prefix'=> 'projects'],function(){

        Route::group(['prefix'=> 'ongoing-project'],function(){

            // ==== Residential Projects
            Route::get('/residential-project', [ResidentialProjectController::class, 'residentalProject'])->name('frontend.project.ongoing-project.residential-project');

            // ==== Commercial Projects
            Route::get('/commercial-project', [CommercialProjectController::class, 'commercialProject'])->name('frontend.project.ongoing-project.commercial-project');

        });

        // ==== Completed Projects
        Route::get('/completed-project', [CompletedProjectController::class, 'completedProject'])->name('frontend.project.completed-project');

        // ==== Upcoming Projects
        Route::get('/upcoming-project', [UpcomingProjectController::class, 'upcomingProject'])->name('frontend.project.upcoming-project');

    });

    // ==== Become an associate
    Route::group(['prefix'=> 'becone-an-associate'],function(){

        // ==== Channel Partner
        Route::get('/channel-partner', [ChannelPartnerController::class, 'channelPartner'])->name('frontend.becone-an-associate.channel-partner');

        // ==== Channel Refer
        Route::get('/chanel-refer', [ChannelReferController::class, 'chanelRefer'])->name('frontend.becone-an-associate.chanel-refer');

    });

    // ==== Media
    Route::get('/our-media', [MediaController::class, 'media'])->name('frontend.media');

    Route::group(['prefix'=> 'blog'],function(){

        // ==== Blog
        Route::get('/blog_list', [BlogController::class, 'blogList'])->name('frontend.blog');

        // ==== Blog Details
        Route::get('/blog-details', [BlogController::class, 'blogDetails'])->name('frontend.blog.blog-details');
    });

    // ==== Contact Us
    Route::get('/contact-us', [ContactUsController::class, 'contactUs'])->name('frontend.contact-us');
});
