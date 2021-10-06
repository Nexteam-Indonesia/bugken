<div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <div class="d-flex justify-content-between">
            <div class="logo">
                <a href="index.html"><img src="{{ asset('images/logo/Bugken.png') }}" alt="Logo" class="h-100 w-25 object-cover" srcset=""></a>
            </div>
            <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>
            <li
                class="sidebar-item">
                <a href="{{url('/')}}" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li
                class="sidebar-item">
                <a href="{{url('/project')}}" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Project</span>
                </a>
            </li>

        </ul>
    </div>
</div>
