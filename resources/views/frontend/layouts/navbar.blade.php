<section id="navbar_top" class="fixed-top" <?php echo isset($indexPage) ? "style='background: #00000066;background: rgba(0, 0, 0, 0.4)'" : "" ?>>
    <div class="container pl-0 pr-0" style="height: 117px;">
      <nav class="navbar container navbar-expand-md max-auto" style="padding: .1rem 5rem;padding-top: 5px;position: fixed;">
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <a class="navbar-brand logo_link" href="{{ asset('') }}">
                <img class="logo_img" src="{{ asset('assets/frontend/img/logo.png') }}" alt="main logo">
            </a>
            <div class="flex-column main_menu_hr">
                <div class="d-flex flex-md-row flex-sm-column top_header_area">
                    <div class="flex-grow-1 text-center">
                        <img class="header_logo" src="{{ asset('assets/frontend/img/top-header-logo.png') }}" alt="">
                    </div>
                    <div class="d-flex">
                        <span class="p_13 font-weight-bold text-white">Language: </span>
                        <a class="p_13 pl-2 text-white text-decoration-none" href="javascript:dynamicLanguageLibrary('eng')"> English | </a>
                        <a class="p_13 pl-2 text-white text-decoration-none" href="javascript:dynamicLanguageLibrary('bng')"> বাংলা</a>
                    </div>
                </div>
                <ul class="navbar-nav  mx-auto mt-2 mt-lg-0 menu_ul w-100"> 
                    
                    <li class="nav-item dropdown menu_li">
                        <a class="nav-link dropdown-toggle menu_a" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          About Us
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="{{ url('aboutus/who-we-are') }}">Who we are</a></li> 
                          <li><a class="dropdown-item" href="{{ url('aboutus/iibl-glance') }}">IIBL At A Glance</a></li> 
                          <li><a class="dropdown-item" href="{{ url('aboutus/key-corporate') }}">Key and Corporate Information</a></li> 
                          <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="#">Organizational Structure</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownSubMenuLink">
                              <li><a class="dropdown-item" href="{{ url('aboutus/board-of-director') }}">Board of Directors </a></li> 
                              <li class="dropdown-submenu">
                                <a class="dropdown-item  " href="">Executive  Committee</a> 
                              </li>
                              <li class="dropdown-submenu">
                                <a class="dropdown-item  " href="">Nomination  &amp; Remuneration Committee</a> 
                              </li>
                              <li class="dropdown-submenu">
                                <a class="dropdown-item  " href="">Claims  Committee</a> 
                              </li>
                              <li class="dropdown-submenu">
                                <a class="dropdown-item  " href="">Board Audit Committee</a> 
                              </li>
                              <li class="dropdown-submenu">
                                <a class="dropdown-item  " href="">Shariah Council</a> 
                              </li>
                              <li class="dropdown-submenu">
                                <a class="dropdown-item  " href="">Senior Management Team</a> 
                              </li>
                            </ul>
                          </li>
                          <li><a class="dropdown-item" href="">Message From Chairman</a></li> 
                          <li><a class="dropdown-item" href="">Message From CEO</a></li> 
                          <li><a class="dropdown-item" href="">Valued Clients</a></li> 
                        </ul>
                      </li>
                    <li class="nav-item menu_li dropdown">
                        <a class="nav-link menu_a dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Financial Indicators</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Shareholding Structure </a>
                            <a class="dropdown-item" href="#">Credit Rating </a>
                            <a class="dropdown-item" href="#">Value Added Statement </a> 
                            <a class="dropdown-item" href="#">Financial Highlights </a> 
                            <a class="dropdown-item" href="#">Corporate Governance Guideline </a> 
                            <a class="dropdown-item" href="#">Performance   
                            </a> 
                            <a class="dropdown-item" href="#">Quarterly Reports     
                            </a> 
                            <a class="dropdown-item" href="#">Annual Reports </a> 
                            <a class="dropdown-item" href="#">Price Sensitive Information </a> 
                            <a class="dropdown-item" href="#">Directors' Report </a> 
                        </div>
                    </li>
                    <li class="nav-item menu_li dropdown">
                        <a class="nav-link menu_a dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Products &amp; Services</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="">Fire Takaful</a>  
                            <a class="dropdown-item" href="">Marine Takaful</a>  
                            <a class="dropdown-item" href="">Motor Takaful</a>  
                            <a class="dropdown-item" href="">Engineering Takaful</a>  
                            <a class="dropdown-item" href="">Miscellaneous Takaful</a>  
                        </div> 
                    </li>
                    <li class="nav-item menu_li dropdown">
                        <a class="nav-link menu_a dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Media</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Audio Visuals</a>
                            <a class="dropdown-item" href="#">News &amp; Events</a>
                            <a class="dropdown-item" href="#">Blog</a>   
                            <a class="dropdown-item" href="#">Achievements &amp; Awards </a>  
                        </div> 
                    </li>
                    <li class="nav-item menu_li dropdown">
                        <a class="nav-link menu_a dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Career</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Vacancy Announcements</a>
                            <a class="dropdown-item" href="#">Submit Your Resume</a>  
                        </div>
                    </li>
                    <li class="nav-item dropdown menu_li">
                        <a class="nav-link dropdown-toggle menu_a" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Downloads
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="#">Unsettled Claim Information</a></li> 
                          <li><a class="dropdown-item" href="#">Human Resource</a></li> 
                          <li><a class="dropdown-item" href="#">Credit Rating Report</a></li> 
                          <li><a class="dropdown-item" href="#">Registration certificate</a></li> 
                          <li><a class="dropdown-item" href="#">Re-ins Treaty</a></li> 
                          <li><a class="dropdown-item" href="#">TIN Certificate</a></li> 
                          <li><a class="dropdown-item" href="#">VAT Registration Certificate</a></li> 
                          <li><a class="dropdown-item" href="#">Proxy Form</a></li> 
                          <li><a class="dropdown-item" href="#">KYC Profile Form</a></li> 
                          <li><a class="dropdown-item" href="#">Personal Form</a></li> 
                          <li><a class="dropdown-item" href="#">Claim Form</a></li> 
                        </ul>
                    </li>
                    <li class="nav-item dropdown menu_li">
                        <a class="nav-link dropdown-toggle menu_a" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Digital Insurance
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="#">Unsettled Claim Information</a></li> 
                          <li><a class="dropdown-item" href="#">Travel Insurance</a></li> 
                          <li><a class="dropdown-item" href="#">Personal Accident Insurance</a></li> 
                        </ul>
                    </li>
                    <li class="nav-item menu_li" style="display: none;"> 
                        <a class="nav-link menu_a" href="#">Mujib Corner </a>
                    </li> 
                    <li class="nav-item menu_li dropdown">
                        <a class="nav-link menu_a dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Contact Us</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Find Us In Google Map</a>
                            <a class="dropdown-item" href="#">Head office</a>
                            <a class="dropdown-item" href="#">Branches</a> 
                        </div>  
                    </li>
                </ul>
                  
            </div>
        </div>
      </nav>
    </div>
</section>