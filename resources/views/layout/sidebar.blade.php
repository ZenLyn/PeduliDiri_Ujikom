<aside id="sidebar-wrapper">
    <div class="sidebar-brand" style="background-color: rgb(43, 29, 165)">
      <a href="index.html" style="color: rgb(255, 251, 251)">Dashboard</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">PD</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Main Menu</li>
        <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
          <a href="/dashboard" class="nav-link"><i></i><span style="color: black">Dashboard</span></a>
        </li>
        <li class="nav-item {{ request()->is('inputPerjalanan') ? 'active' : '' }}">
          <a href="/inputPerjalanan" class="nav-link"><i></i><span style="color: black">Input Data</span></a>
        </li>
  </aside>
