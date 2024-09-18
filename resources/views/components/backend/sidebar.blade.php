<div class="right-sidebar">
    <div class="sidebar-title">
        <h3 class="weight-600 font-16 text-blue">
            Layout Settings
            <span class="btn-block font-weight-400 font-12">User Interface Settings</span>
        </h3>
        <div class="close-sidebar" data-toggle="right-sidebar-close">
            <i class="icon-copy ion-close-round"></i>
        </div>
    </div>
    <div class="right-sidebar-body customscroll">
        <div class="right-sidebar-body-content">
            <h4 class="weight-600 font-18 pb-10">Header Background</h4>
            <div class="sidebar-btn-group pb-30 mb-10">
                <a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
                <a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
            </div>

            <h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
            <div class="sidebar-btn-group pb-30 mb-10">
                <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light">White</a>
                <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
            </div>

            <h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
            <div class="sidebar-radio-group pb-10 mb-10">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebaricon-1" name="menu-dropdown-icon"
                        class="custom-control-input" value="icon-style-1" checked="" />
                    <label class="custom-control-label" for="sidebaricon-1"><i
                            class="fa fa-angle-down"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebaricon-2" name="menu-dropdown-icon"
                        class="custom-control-input" value="icon-style-2" />
                    <label class="custom-control-label" for="sidebaricon-2"><i
                            class="ion-plus-round"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebaricon-3" name="menu-dropdown-icon"
                        class="custom-control-input" value="icon-style-3" />
                    <label class="custom-control-label" for="sidebaricon-3"><i
                            class="fa fa-angle-double-right"></i></label>
                </div>
            </div>

            <h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
            <div class="sidebar-radio-group pb-30 mb-10">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-1" name="menu-list-icon"
                        class="custom-control-input" value="icon-list-style-1" checked="" />
                    <label class="custom-control-label" for="sidebariconlist-1"><i
                            class="ion-minus-round"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-2" name="menu-list-icon"
                        class="custom-control-input" value="icon-list-style-2" />
                    <label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o"
                            aria-hidden="true"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-3" name="menu-list-icon"
                        class="custom-control-input" value="icon-list-style-3" />
                    <label class="custom-control-label" for="sidebariconlist-3"><i
                            class="dw dw-check"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-4" name="menu-list-icon"
                        class="custom-control-input" value="icon-list-style-4" checked="" />
                    <label class="custom-control-label" for="sidebariconlist-4"><i
                            class="icon-copy dw dw-next-2"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-5" name="menu-list-icon"
                        class="custom-control-input" value="icon-list-style-5" />
                    <label class="custom-control-label" for="sidebariconlist-5"><i
                            class="dw dw-fast-forward-1"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-6" name="menu-list-icon"
                        class="custom-control-input" value="icon-list-style-6" />
                    <label class="custom-control-label" for="sidebariconlist-6"><i
                            class="dw dw-next"></i></label>
                </div>
            </div>

            <div class="reset-options pt-30 text-center">
                <button class="btn btn-danger" id="reset-settings">
                    Reset Settings
                </button>
            </div>
        </div>
    </div>
</div>

<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{ route('admin.dashboard') }}">
            <img src="{{ asset('assets/src/images/bhairaav_dark_logo.png') }}" alt="" class="dark-logo" />
            <img src="{{ asset('assets/src/images/bhairaav_logo.png') }}" alt="" class="light-logo" />
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li class="dropdown {{ ($currentRoute === 'sliders.index') || ($currentRoute === 'sliders.create') || ($currentRoute === 'sliders.edit') || ($currentRoute === 'legacy_of_excellence.index') || ($currentRoute === 'legacy_of_excellence.create') || ($currentRoute === 'legacy_of_excellence.edit') || ($currentRoute === 'testimonials.index') || ($currentRoute === 'testimonials.create') || ($currentRoute === 'testimonials.edit') || ($currentRoute === 'statistics.index') || ($currentRoute === 'statistics.create') || ($currentRoute === 'statistics.edit') ? 'show' : '' }}">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-house"></span>
                        <span class="mtext">Home</span>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="{{ route('sliders.index') }}" class="{{ ($currentRoute === 'sliders.index') || ($currentRoute === 'sliders.create') || ($currentRoute === 'sliders.edit') ? 'active' : '' }}">Banner</a>
                        </li>
                        <li>
                            <a href="{{ route('legacy_of_excellence.index') }}" class="{{ ($currentRoute === 'legacy_of_excellence.index') || ($currentRoute === 'legacy_of_excellence.create') || ($currentRoute === 'legacy_of_excellence.edit') ? 'active' : '' }}">Legacy of Excellence</a>
                        </li>
                        <li>
                            <a href="{{ route('statistics.index') }}" class="{{ ($currentRoute === 'statistics.index') || ($currentRoute === 'statistics.create') || ($currentRoute === 'statistics.edit') ? 'active' : '' }}">Statistics</a>
                        </li>
                        {{-- <li>
                            <a href="{{ route('why_choose_bhiraavs.index') }}" class="{{ ($currentRoute === 'why_choose_bhiraavs.index') || ($currentRoute === 'why_choose_bhiraavs.create') || ($currentRoute === 'why_choose_bhiraavs.edit') ? 'active' : '' }}">Why Choose Bhairaav</a>
                        </li> --}}
                        <li>
                            <a href="{{ route('testimonials.index') }}" class="{{ ($currentRoute === 'testimonials.index') || ($currentRoute === 'testimonials.create') || ($currentRoute === 'testimonials.edit') ? 'active' : '' }}">Testimonials</a>
                        </li>
                        <li>
                            <a href="{{ route('latest_update.index') }}" class="{{ ($currentRoute === 'latest_update.index') || ($currentRoute === 'latest_update.create') || ($currentRoute === 'latest_update.edit') ? 'active' : '' }}">Latest Updates</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown {{
                ($currentRoute === 'the_journeys.index') || ($currentRoute === 'the_journeys.create') || ($currentRoute === 'the_journeys.edit') ||
                ($currentRoute === 'members.index') || ($currentRoute === 'members.create') || ($currentRoute === 'members.edit') ||
                ($currentRoute === 'the_progress.index') || ($currentRoute === 'the_progress.create') || ($currentRoute === 'the_progress.edit') ||
                ($currentRoute === 'the_legacy.index') || ($currentRoute === 'the_legacy.create') || ($currentRoute === 'the_legacy.edit') ||
                ($currentRoute === 'strengths.index') || ($currentRoute === 'strengths.create') || ($currentRoute === 'strengths.edit') ||
                ($currentRoute === 'our_logos.index') || ($currentRoute === 'our_logos.create') || ($currentRoute === 'our_logos.edit') ||
                ($currentRoute === 'our-leader.index') || ($currentRoute === 'our-leader.create') || ($currentRoute === 'our-leader.edit') ||
                ($currentRoute === 'our_teams.index') || ($currentRoute === 'our_teams.create') || ($currentRoute === 'our_teams.edit') ||
                ($currentRoute === 'partners.index') || ($currentRoute === 'partners.create') || ($currentRoute === 'partners.edit') ||
                ($currentRoute === 'banking_partners.index') || ($currentRoute === 'banking_partners.create') || ($currentRoute === 'banking_partners.edit')
                ? 'show' : '' }}" >
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-diagram-2"></span>
                        <span class="mtext">About Bhairaav</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('the_journeys.index') }}" class="{{ ($currentRoute === 'the_journeys.index') || ($currentRoute === 'the_journeys.create') || ($currentRoute === 'the_journeys.edit') ? 'active' : '' }}">The Journey</a></li>
                        <li><a href="{{ route('members.index') }}" class="{{ ($currentRoute === 'members.index') || ($currentRoute === 'members.create') || ($currentRoute === 'members.edit') ? 'active' : '' }}">Member</a></li>
                        <li><a href="{{ route('the_progress.index') }}" class="{{ ($currentRoute === 'the_progress.index') || ($currentRoute === 'the_progress.create') || ($currentRoute === 'the_progress.edit') ? 'active' : '' }}">The Progress</a></li>
                        <li><a href="{{ route('the_legacy.index') }}" class="{{ ($currentRoute === 'the_legacy.index') || ($currentRoute === 'the_legacy.create') || ($currentRoute === 'the_legacy.edit') ? 'active' : '' }}">The Legacy</a></li>
                        <li><a href="{{ route('strengths.index') }}" class="{{ ($currentRoute === 'strengths.index') || ($currentRoute === 'strengths.create') || ($currentRoute === 'strengths.edit') ? 'active' : '' }}">Why Choose Bhairaav</a></li>
                        <li><a href="{{ route('our_logos.index') }}" class="{{ ($currentRoute === 'our_logos.index') || ($currentRoute === 'our_logos.create') || ($currentRoute === 'our_logos.edit') ? 'active' : '' }}">Our Logo</a></li>
                        <li><a href="{{ route('our-leader.index') }}" class="{{ ($currentRoute === 'our-leader.index') || ($currentRoute === 'our-leader.create') || ($currentRoute === 'our-leader.edit') ? 'active' : '' }}">Leader</a></li>
                        <li><a href="{{ route('our_teams.index') }}" class="{{ ($currentRoute === 'our_teams.index') || ($currentRoute === 'our_teams.create') || ($currentRoute === 'our_teams.edit') ? 'active' : '' }}">Team</a></li>
                        <li><a href="{{ route('partners.index') }}" class="{{ ($currentRoute === 'partners.index') || ($currentRoute === 'partners.create') || ($currentRoute === 'partners.edit') ? 'active' : '' }}">Partners</a></li>
                        <li><a href="{{ route('banking_partners.index') }}" class="{{ ($currentRoute === 'banking_partners.index') || ($currentRoute === 'banking_partners.create') || ($currentRoute === 'banking_partners.edit') ? 'active' : '' }}">Banking Partners</a></li>
                    </ul>
                </li>

                <li class="dropdown {{
                    (request()->routeIs('projects.index') && in_array(request('project_type'), [1, 2, 3])) ||
                        in_array($currentRoute, [
                            'bhairaav_projects.index', 'bhairaav_projects.create', 'bhairaav_projects.edit',
                            'location-advantage.index', 'location-advantage.create', 'location-advantage.edit',
                            'project-details.index', 'project-details.create', 'project-details.edit'
                        ]) ? 'show' : ''
                    }}" >
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-receipt-cutoff"></span>
                        <span class="mtext">Project Manage</span>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="{{ route('bhairaav_projects.create') }}"  class="{{ in_array($currentRoute, ['bhairaav_projects.index', 'bhairaav_projects.create', 'bhairaav_projects.edit']) ? 'active' : '' }}">
                                <span class="mtext">Add Projects</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('projects.index', ['project_type' => 1]) }}" class="{{ (request()->routeIs('projects.index') && request('project_type') == 1) ? 'active' : '' }}">
                                <span class="mtext">Ongoing Projects</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('projects.index', ['project_type' => 2]) }}" class="{{ (request()->routeIs('projects.index') && request('project_type') == 2) ? 'active' : '' }}">
                                <span class="mtext">Completed Projects</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('projects.index', ['project_type' => 3]) }}" class="{{ (request()->routeIs('projects.index') && request('project_type') == 3) ? 'active' : '' }}">
                                <span class="mtext">Upcoming Projects</span>
                            </a>
                        </li>

                        {{-- <li>
                            <a href="{{ route('location-advantage.index') }}" class="{{ in_array($currentRoute, ['location-advantage.index', 'location-advantage.create', 'location-advantage.edit']) ? 'active' : '' }}">
                                <span class="mtext">Location Advantages</span>
                            </a>
                        </li> --}}

                        <li>
                            <a href="{{ route('project-details.index') }}" class="{{ in_array($currentRoute, ['project-details.index', 'project-details.create', 'project-details.edit']) ? 'active' : '' }}">
                                <span class="mtext">Project Details</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('admin.channel_partner') }}" class="dropdown-toggle no-arrow {{ ($currentRoute === 'admin.channel_partner') ? 'active' : '' }}">
                        <span class="micon bi bi-hdd-stack"></span>
                        <span class="mtext">Channel Partner</span>
                    </a>
                </li>

                <li class="dropdown {{ ($currentRoute === 'loyalty_programs.index') || ($currentRoute === 'loyalty_programs.create') || ($currentRoute === 'loyalty_programs.edit') || ($currentRoute === 'how_work_loyalty_programs.index') || ($currentRoute === 'how_work_loyalty_programs.create') || ($currentRoute === 'how_work_loyalty_programs.edit') || ($currentRoute === 're_investment_loyalty_programs.index') || ($currentRoute === 're_investment_loyalty_programs.create') || ($currentRoute === 're_investment_loyalty_programs.edit') || ($currentRoute === 'refer_loyalty_programs.index') || ($currentRoute === 'refer_loyalty_programs.create') || ($currentRoute === 'refer_loyalty_programs.edit') ? 'show' : '' }}">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-receipt"></span>
                        <span class="mtext">Refer a friend</span>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="{{ route('loyalty_programs.index') }}" class="{{ ($currentRoute === 'loyalty_programs.index') || ($currentRoute === 'loyalty_programs.create') || ($currentRoute === 'loyalty_programs.edit') ? 'active' : '' }}">
                                <span class="mtext">Loyalty Program</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('how_work_loyalty_programs.index') }}" class="{{ ($currentRoute === 'how_work_loyalty_programs.index') || ($currentRoute === 'how_work_loyalty_programs.create') || ($currentRoute === 'how_work_loyalty_programs.edit') ? 'active' : '' }}">
                                <span class="mtext">How Work</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('re_investment_loyalty_programs.index') }}" class="{{ ($currentRoute === 're_investment_loyalty_programs.index') || ($currentRoute === 're_investment_loyalty_programs.create') || ($currentRoute === 're_investment_loyalty_programs.edit') ? 'active' : '' }}">
                                <span class="mtext">Re-Invest</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('refer_loyalty_programs.index') }}" class="{{ ($currentRoute === 'refer_loyalty_programs.index') || ($currentRoute === 'refer_loyalty_programs.create') || ($currentRoute === 'refer_loyalty_programs.edit') ? 'active' : '' }}">
                                <span class="mtext">Refer</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('admin.member_details') }}" class="dropdown-toggle no-arrow {{ ($currentRoute === 'admin.member_details') ? 'active' : '' }}">
                        <span class="micon bi bi-people"></span>
                        <span class="mtext">Member Details</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('gallery.index') }}" class="dropdown-toggle no-arrow {{ ($currentRoute === 'gallery.index') || ($currentRoute === 'gallery.create') || ($currentRoute === 'gallery.edit') ? 'active' : '' }}">
                        <span class="micon bi bi-images"></span>
                        <span class="mtext">Recognition</span>
                    </a>
                </li>

                <li class="dropdown {{ ($currentRoute === 'categories.index') || ($currentRoute === 'categories.create') || ($currentRoute === 'categories.edit') || ($currentRoute === 'blogs.index') || ($currentRoute === 'blogs.create') || ($currentRoute === 'blogs.edit') ? 'show' : '' }}">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-book"></span>
                        <span class="mtext">Blog</span>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="{{ route('categories.index') }}" class="{{ ($currentRoute === 'categories.index') || ($currentRoute === 'categories.create') || ($currentRoute === 'categories.edit') ? 'active' : '' }}">
                                <span class="mtext">Category</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('blogs.index') }}" class="{{ ($currentRoute === 'blogs.index') || ($currentRoute === 'blogs.create') || ($currentRoute === 'blogs.edit') ? 'active' : '' }}">
                                <span class="mtext">Blog</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('admin.contact_us') }}" class="dropdown-toggle no-arrow {{ ($currentRoute === 'admin.contact_us') ? 'active' : '' }}">
                        <span class="micon bi bi-envelope"></span>
                        <span class="mtext">Contact Us</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.properties_request') }}" class="dropdown-toggle no-arrow {{ ($currentRoute === 'admin.properties_request') ? 'active' : '' }}">
                        <span class="micon bi bi-geo-alt"></span>
                        <span class="mtext">Properties Request</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>
