<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">

                <li class="nav-item {{  request()->routeIs('admin.users') ? 'active' : '' }}">
                    <a href="{{ route('admin.users') }}">
                        <i class="fas fa-user"></i>
                        <p>Admin</p>
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


                <li class="nav-item {{  request()->routeIs('admin.course') ? 'active' : '' }}">
                    <a href="{{ route('admin.course') }}">
                        <i class="bi bi-file-earmark-break"></i>
                        <p>Kurs ishlar</p>
                    </a>
                </li>

                <li class="nav-item {{  request()->routeIs('contacts') ? 'active' : '' }}">
                    <a href="{{ route('contacts') }}">
                        <i class="bi bi-chat-dots"></i>
                        <p>Xabarlar</p>
                    </a>
                </li>

                <li class="nav-item {{  request()->routeIs('information') ? 'active' : '' }}">
                    <a href="{{ route('admin.information') }}">
                        <i class="bi bi-envelope-plus"></i>
                        <p>Qiziqarli ma'lumotlar</p>
                    </a>
                </li>


            </ul>
        </div>
    </div>
</div>



