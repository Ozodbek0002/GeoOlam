<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">

                <li class="nav-item {{  request()->routeIs('admin.users') ? 'active' : '' }}">
                    <a href="{{ route('admin.users') }}">
                        <i class="fas fa-user"></i>
                        <p>Foydalanuvchilar</p>
                    </a>
                </li>

                <li class="nav-item {{  request()->routeIs('admin.articles') ? 'active' : '' }}">
                    <a href="{{ route('admin.articles') }}">
                        <i class="fas fa-user"></i>
                        <p>Maqolalar</p>
                    </a>
                </li>

                <li class="nav-item {{  request()->routeIs('admin.books') ? 'active' : '' }}">
                    <a href="{{ route('admin.books') }}">
                        <i class="fas fa-user"></i>
                        <p>Kitoblar</p>
                    </a>
                </li>



            </ul>
        </div>
    </div>
</div>



