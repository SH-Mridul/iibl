<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item">
        <div class="nav-link" onclick="vueCli.loadVueComponent('content-dashboard');">
          <img src="{{ asset('/assets/backend/img/left_menubar/dashboard.png') }}" class="nav-icon">
          <p>
            Dashboard
          </p>
        </div>
      </li>

      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <img src="{{ asset('/assets/backend/img/left_menubar/about_us.png') }}" class="nav-icon">
          <p>
            About us
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">

          <li class="nav-item">
            <div class="nav-link" onclick="vueCli.loadVueComponent('admin/aboutus/who-we-are/index');">
              <img src="{{ asset('/assets/backend/img/left_menubar/sub_menu_arrow.png') }}" class="nav-icon">
              <p>
                Who we are
              </p>
            </div>
          </li>
          <li class="nav-item">
            <div class="nav-link" onclick="vueCli.loadVueComponent('admin/aboutus/iibl-glance/index');">
              <img src="{{ asset('/assets/backend/img/left_menubar/sub_menu_arrow.png') }}" class="nav-icon">
              <p>
                IIBL At A Glance
              </p>
            </div>
          </li>
          <li class="nav-item">
            <div class="nav-link" onclick="vueCli.loadVueComponent('admin/aboutus/key-corporate/index');">
              <img src="{{ asset('/assets/backend/img/left_menubar/sub_menu_arrow.png') }}" class="nav-icon">
              <p>
                Key and Corporate
              </p>
            </div>
          </li>
          <li class="nav-item">
            <div class="nav-link">
              <img src="{{ asset('/assets/backend/img/left_menubar/sub_menu_arrow.png') }}" class="nav-icon">
              <p>
                Message From Chairman
              </p>
            </div>
          </li>
          <li class="nav-item">
            <div to="" class="nav-link">
              <img src="{{ asset('/assets/backend/img/left_menubar/sub_menu_arrow.png') }}" class="nav-icon">
              <p>
                Message From CEO
              </p>
            </div>
          </li>
          <li class="nav-item">
            <div to="" class="nav-link">
              <img src="{{ asset('/assets/backend/img/left_menubar/sub_menu_arrow.png') }}" class="nav-icon">
              <p>
                Valued Clients
              </p>
            </div>
          </li>
        </ul>
      </li>

      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <img src="{{ asset('/assets/backend/img/left_menubar/financial_indicators.png') }}" class="nav-icon">
          <p>
            Financial Indicators
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">

          <li class="nav-item">
            <div to="" class="nav-link">
              <img src="{{ asset('/assets/backend/img/left_menubar/sub_menu_arrow.png') }}" class="nav-icon">
              <p>
                Shareholding Structure 
              </p>
            </div>
          </li>
          <li class="nav-item">
            <div to="" class="nav-link">
              <img src="{{ asset('/assets/backend/img/left_menubar/sub_menu_arrow.png') }}" class="nav-icon">
              <p>
                Credit Rating 
              </p>
            </div>
          </li>
          <li class="nav-item">
            <div to="" class="nav-link">
              <img src="{{ asset('/assets/backend/img/left_menubar/sub_menu_arrow.png') }}" class="nav-icon">
              <p>
                Value Added Statement 
              </p>
            </div>
          </li>
          <li class="nav-item">
            <div to="" class="nav-link">
              <img src="{{ asset('/assets/backend/img/left_menubar/sub_menu_arrow.png') }}" class="nav-icon">
              <p>
                Financial Highlights 
              </p>
            </div>
          </li>
          <li class="nav-item">
            <div to="" class="nav-link">
              <img src="{{ asset('/assets/backend/img/left_menubar/sub_menu_arrow.png') }}" class="nav-icon">
              <p>
                Corporate Governance 
              </p>
            </div>
          </li>
          <li class="nav-item">
            <div to="" class="nav-link">
              <img src="{{ asset('/assets/backend/img/left_menubar/sub_menu_arrow.png') }}" class="nav-icon">
              <p>
                Performance  
              </p>
            </div>
          </li>
          <li class="nav-item">
            <div to="" class="nav-link">
              <img src="{{ asset('/assets/backend/img/left_menubar/sub_menu_arrow.png') }}" class="nav-icon">
              <p>
                Quarterly Reports     
              </p>
            </div>
          </li>
          <li class="nav-item">
            <div to="" class="nav-link">
              <img src="{{ asset('/assets/backend/img/left_menubar/sub_menu_arrow.png') }}" class="nav-icon">
              <p>
                Annual Reports 
              </p>
            </div>
          </li>
          <li class="nav-item">
            <div to="" class="nav-link">
              <img src="{{ asset('/assets/backend/img/left_menubar/sub_menu_arrow.png') }}" class="nav-icon">
              <p>
                Price Sensitive Information 
              </p>
            </div>
          </li>
          <li class="nav-item">
            <div to="" class="nav-link">
              <img src="{{ asset('/assets/backend/img/left_menubar/sub_menu_arrow.png') }}" class="nav-icon">
              <p>
                Directors' Report 
              </p>
            </div>
          </li>
        </ul>
      </li>


      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <img src="{{ asset('/assets/backend/img/left_menubar/about_us.png') }}" class="nav-icon">
          <p>
            demo
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">

          <li class="nav-item">
            <div to="" class="nav-link">
              <img src="{{ asset('/assets/backend/img/left_menubar/sub_menu_arrow.png') }}" class="nav-icon">
              <p>
                demo
              </p>
            </div>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          <i class="nav-icon fas fa-power-off red"></i>
          <p>
            {{ __('Logout') }}
          </p>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </li>
    </ul>
  </nav>