<div class="sidebar" data-color="green" data-image="{{asset('public/admin_assets/img/sidebar-2.jpg')}}">
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text">
            Admin
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                <a href="{{url('/admin')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{ Request::is('dashboard/add-category') ? 'active' : '' }}">
                <a href="{{url('/dashboard/add-category')}}">
                    <i class="material-icons">view_list</i>
                    <p>Categories</p>
                </a>
            </li>
            <li>
                <a href="./table.html">
                    <i class="material-icons">content_paste</i>
                    <p>Table List</p>
                </a>
            </li>
            <li>
                <a href="./typography.html">
                    <i class="material-icons">library_books</i>
                    <p>Typography</p>
                </a>
            </li>
            <li>
                <a href="./icons.html">
                    <i class="material-icons">bubble_chart</i>
                    <p>Icons</p>
                </a>
            </li>
            <li>
                <a href="./maps.html">
                    <i class="material-icons">location_on</i>
                    <p>Maps</p>
                </a>
            </li>
            <li>
                <a href="./notifications.html">
                    <i class="material-icons text-gray">notifications</i>
                    <p>Notifications</p>
                </a>
            </li>
            <li class="active-pro">
                <a href="upgrade.html">
                    <i class="material-icons">settings</i>
                    <p>Settings</p>
                </a>
            </li>
        </ul>
    </div>
</div>