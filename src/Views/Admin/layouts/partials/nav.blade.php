<nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
<div class="logo d-flex justify-content-between">
<a href="index-2.html"><img src="{{ asset('assets/admin/img/logo.png')}}" alt></a>
<div class="sidebar_close_icon d-lg-none">
<i class="ti-close"></i>
</div>
</div>
<ul id="sidebar_menu">
<li class="mm-active">
<a class="has-arrow" href="#" aria-expanded="false">
<div class="icon_menu">
<img src="{{ asset('assets/admin/img/menu-icon/dashboard.svg')}}" alt>
</div>
<span>Dashboard</span>
</a>
</li>
<li class>
<a href="{{ url('admin/users')}}" aria-expanded="false">
<div class="icon_menu">
<img src="{{ asset('assets/admin/img/menu-icon/5.svg')}}" alt>
</div>
<span>Danh sách User</span>
</a>
</li>
<li class>
<a href="{{ url('admin/products')}}" aria-expanded="false">
<div class="icon_menu">
<img src="{{ asset('assets/admin/img/menu-icon/5.svg')}}" alt>
</div>
<span>Danh sách sản phẩm</span>
</a>
</li>
</ul>
</nav>