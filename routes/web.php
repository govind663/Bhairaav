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
use App\Http\Controllers\backend\StatisticController;
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
use App\Http\Controllers\backend\AdminContactUsController;
use App\Http\Controllers\backend\AdminChannelPartnerController;
use App\Http\Controllers\backend\AdminMemberController;
use App\Http\Controllers\backend\AdminPropertiesRequestController;
use App\Http\Controllers\backend\ChanelController;
use App\Http\Controllers\backend\PhaseController;

// ===== Frontend
use App\Http\Controllers\frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\frontend\WhoWeAreController;
use App\Http\Controllers\frontend\LeadershipController;
use App\Http\Controllers\frontend\OurTeamController;
use App\Http\Controllers\frontend\AssociatesController;
use App\Http\Controllers\frontend\ResidentialProjectController;
use App\Http\Controllers\frontend\CommercialProjectController;
use App\Http\Controllers\frontend\CompletedProjectController;
use App\Http\Controllers\frontend\UpcomingProjectController;
use App\Http\Controllers\frontend\ChannelPartnerController;
use App\Http\Controllers\frontend\ChannelReferController;
use App\Http\Controllers\frontend\MediaController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\ContactUsController;
use App\Http\Controllers\frontend\PropertiesRequestController;
use App\Http\Controllers\frontend\DisclaimerController;
use App\Http\Controllers\frontend\PrivacyPolicyController;
use App\Http\Controllers\frontend\CareerController;
use App\Http\Controllers\frontend\SitemapController;

// ===== Import Model
use App\Models\LatestUpdate;
use App\Models\Slider;
use App\Models\Statistics;
use App\Models\LegacyOfExcellence as ModelsLegacyOfExcellence;
use App\Models\Testimonial;
use App\Models\WhyChooseBhairaav;
use App\Models\Blog as ModelBlog;
use App\Models\Projects as ModelProject;

Route::get('/', function () {

    // ==== Fetch Banner
    $sliders = Slider::orderBy("id","asc")->where('status', 1)->whereNull('deleted_at')->get();

    // === Fetch The Statistics
    $statistics = Statistics::orderBy("id","asc")->whereNull('deleted_at')->get();

    // ==== Fetch Legacy of Excellence
    $legacy = ModelsLegacyOfExcellence::orderBy("id","desc")->whereNull('deleted_at')->first();

    // ==== Fetch Why Choose Bhairaav
    $whyChooseBhairaavs = WhyChooseBhairaav::orderBy("id","desc")->whereNull('deleted_at')->first();

    // ==== Fetch Testimonials
    $testimonials = Testimonial::orderBy("id","asc")->whereNull('deleted_at')->get();

    // Get latest 5 blog entries
    $latestPosts = ModelBlog::orderBy('inserted_at', 'asc')->whereNull('deleted_at')->get();
    // dd($latestPosts);

    // ==== Fetch Upcoming Projects
    $upcomingProjects = ModelProject::orderBy("id","asc")->where('project_type', 1)->whereNull('deleted_at')->limit(3)->get();
    // dd($upcomingProjects);

    // Extract phase IDs and RERA numbers
    $reraNumbers = $upcomingProjects->pluck('maha_rera_registration_number', 'phase_id')->toArray();

    // Convert arrays to strings
    foreach ($reraNumbers as $phaseId => $numbers) {
        // Check if $numbers is an array and convert it to a string
        if (is_array($numbers)) {
            $reraNumbers[$phaseId] = implode(', ', $numbers);
        } else {
            $reraNumbers[$phaseId] = $numbers;
        }
    }

    // ==== Fetch Completed Projects with latest 3
    $completedProjects = ModelProject::orderBy("id","asc")->where('project_type', 2)->whereNull('deleted_at')->limit(3)->get();

    return view('frontend.home', [
        'sliders' => $sliders,
        'statistics' => $statistics,
        'legacy' => $legacy,
        'whyChooseBhairaavs' => $whyChooseBhairaavs,
        'testimonials' => $testimonials,
        'latestPosts' => $latestPosts,
        'upcomingProjects' => $upcomingProjects,
        'completedProjects' => $completedProjects,
        'reraNumbers' => $reraNumbers
    ]);

})->name('/');

Route::group(['prefix' => ''],function(){

    // ======================= Admin Login/Logout
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::get('/admin/login', [LoginController::class, 'login'])->name('admin.login');
    Route::post('/admin/login/store', [LoginController::class, 'authenticate'])->name('admin.login.store');

    // ==== Logout
    Route::post('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');
});

// ======================= Admin Dashboard
Route::group(['prefix' => '', 'middleware'=>['auth', PreventBackHistoryMiddleware::class]],function(){

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

    // ==== Manage Statistics
    Route::resource('statistics', StatisticController::class);

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
    Route::get('projects-list/{project_type}', [ProjectsController::class, 'projectList'])->name('projects.index');

    // ==== Manage Location Advantages
    Route::resource('location-advantage', LocationAdvantageController::class);

    // ==== manage Projects Details
    Route::resource('project-details', ProjectDetailsController::class);

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

    // ==== Contact Us List Route
    Route::get('contact_us_list', [AdminContactUsController::class, 'contactUs'])->name('admin.contact_us');

    // ==== Channel Partner List Route
    Route::get('channel_partner_list', [AdminChannelPartnerController::class, 'channelPartner'])->name('admin.channel_partner');

    // ==== View Chanel Partner
    Route::get('view_channel_partner/{id?}', [AdminChannelPartnerController::class, 'viewChannelPartner'])->name('view_channel_partner');

    // ==== Member Details List
    Route::get('member_details_list', [AdminMemberController::class, 'memberDetails'])->name('admin.member_details');

    // ==== Member Details View
    Route::get('member_details_view/{id?}', [AdminMemberController::class, 'memberDetailsView'])->name('member_details_view');

    // ==== Properties Request List
    Route::get('properties_request_list', [AdminPropertiesRequestController::class, 'propertiesRequest'])->name('admin.properties_request');

    // ==== Manage Chanel Name
    Route::resource('chanel_name', ChanelController::class);

    // ==== Manage Multiple Phase
    Route::resource('multiple_phase', PhaseController::class);
});


// ======================= Frontend
Route::group(['prefix'=> '', 'middleware'=>[PreventBackHistoryMiddleware::class]],function(){

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
            Route::get('/residential-project/view-project-details/{id?}', [ResidentialProjectController::class, 'viewProjectDetails'])->name('frontend.project.residential-project.view-project-details');

            // ==== Commercial Projects
            Route::get('/commercial-project', [CommercialProjectController::class, 'commercialProject'])->name('frontend.project.ongoing-project.commercial-project');

        });

        Route::group(['prefix'=> 'completed-project'],function(){

            // ==== Residential Projects
            Route::get('/completed-project/{projectId?}', [CompletedProjectController::class, 'completedProject'])->name('frontend.project.completed-project');
            Route::get('/completed-project/view-project-details/{id?}', [CompletedProjectController::class, 'viewProjectDetails'])->name('frontend.project.completed-project.view-project-details');

        });

        // ==== Upcoming Projects
        Route::get('/upcoming-project', [UpcomingProjectController::class, 'upcomingProject'])->name('frontend.project.upcoming-project');

    });

    // ==== Become an associate
    Route::group(['prefix'=> 'becone-an-associate'],function(){

        // ==== Channel Partner
        Route::get('/channel-partner', [ChannelPartnerController::class, 'channelPartner'])->name('frontend.becone-an-associate.channel-partner');
        // ==== Store Channel Partner
        Route::post('/store-channel-partner', [ChannelPartnerController::class,'storeChannelPartner'])->name('store-channel-partner');

        // ==== Channel Refer
        Route::get('/chanel-refer', [ChannelReferController::class, 'chanelRefer'])->name('frontend.becone-an-associate.chanel-refer');

        // ==== Store Member Details
        Route::post('/store-member-details', [ChannelReferController::class, 'storeMemberDetails'])->name('store-member-details');
    });

    // ==== Media
    Route::get('/our-media', [MediaController::class, 'media'])->name('frontend.media');

    Route::group(['prefix'=> 'blog'],function(){

        // ==== Blog
        Route::get('/blog_list', [BlogController::class, 'blogList'])->name('frontend.blog');

        // ==== Blog Details
        Route::get('/blog-details/{id}', [BlogController::class, 'blogDetails'])->name('frontend.blog.blog-details');
    });

    // ==== Contact Us
    Route::get('/contact-us', [ContactUsController::class, 'contactUs'])->name('frontend.contact-us');

    // ==== Store Contact Us
    Route::post('/store-contact-us', [ContactUsController::class, 'storeContactUs'])->name('store-contact-us');

    // ==== Store Properties Request
    Route::post('/properties-request-store', [PropertiesRequestController::class, 'storePropertiesRequest'])->name('frontend.properties-request.store');

    // ==== Disclaimer
    Route::get('/disclaimer', [DisclaimerController::class, 'disclaimer'])->name('frontend.disclaimer');

    // ==== Privacy Policy
    Route::get('/privacy-policy', [PrivacyPolicyController::class, 'privacyPolicy'])->name('frontend.privacy-policy');

    // ==== Career
    Route::get('/career', [CareerController::class, 'career'])->name('frontend.career');

    // ===== Site Map
    Route::get('/sitemap', [SitemapController::class, 'sitemap'])->name('frontend.sitemap');
});
