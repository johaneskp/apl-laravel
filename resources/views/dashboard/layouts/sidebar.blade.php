<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard')? 'active': '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home" class="align-text-bottom"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/posts*')? 'active': '' }}" href="/dashboard/posts">
            <span data-feather="file" class="align-text-bottom"></span>
            My Active Listing
          </a>
        </li>
      </ul>

      @can('admin')

      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1">
        <span>Administrasi</span>
      </h6>
      <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/categories*')? 'active': '' }}" href="/dashboard/categories">
                <span data-feather="grid" class="align-text-bottom"></span>
               post categories
              </a>
        </li>
      </ul>

      @endcan
    </div>
  </nav>