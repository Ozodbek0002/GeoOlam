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
                        <i class="bi bi-newspaper"></i>
                        <p>Maqolalar</p>
                    </a>
                </li>

                <li class="nav-item {{  request()->routeIs('admin.slides') ? 'active' : '' }}">
                    <a href="{{ route('admin.slides') }}">
                        <i class="bi bi-file-earmark-ppt"></i>
                        <p>Slaydlar</p>
                    </a>
                </li>

                <li class="nav-item {{  request()->routeIs('admin.books') ? 'active' : '' }}">
                    <a href="{{ route('admin.books') }}">
                        <i class="bi bi-book"></i>
                        <p>Kitoblar</p>
                    </a>
                </li>


                <li class="nav-item {{  request()->routeIs('admin.cources') ? 'active' : '' }}">
                    <a href="{{ route('admin.cources') }}">

                        <p>Kurslar</p>
                    </a>
                </li>


            </ul>
        </div>
    </div>
</div>



