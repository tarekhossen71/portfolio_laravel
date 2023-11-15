<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
        <a href="index.html">
            <div class="iq-light-logo">
                <img src="{{ asset('backend') }}/images/logo.gif" class="img-fluid" alt="">
            </div>
            <div class="iq-dark-logo">
                <img src="{{ asset('backend') }}/images/logo-dark.gif" class="img-fluid" alt="">
            </div>
            <span>Vito</span>
        </a>
        <div class="iq-menu-bt-sidebar">
            <div class="iq-menu-bt align-self-center">
                <div class="wrapper-menu">
                    <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
                    <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div id="sidebar-scrollbar">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="iq-menu-title"><i class="ri-subtract-line"></i>
                    <span>Home</span></li>
                @permission('app.dashboard')
                <li>
                    <a href="{{ route('app.dashboard') }}" class="iq-waves-effect"><i
                            class="ri-home-4-line"></i><span>Dashboard</span></a>
                </li>
                @endpermission
                <li class="iq-menu-title"><i class="ri-subtract-line"></i>
                    <span>Apps</span></li>

                <li><a href="todo.html" class="iq-waves-effect" aria-expanded="false">
                    <i class="ri-chat-check-line"></i><span>Todo</span></a>
                </li>
                @permission('app.roles.index')
                <li>
                    <a href="#roles_permisstion" class="iq-waves-effect {{ Request::is('app/roles*') ? '' : 'collapsed' }}"  data-toggle="collapse" aria-expanded="{{ Request::is('app/roles*') ? 'true' : 'false' }}"><i class="fa-solid fa-gear"></i><span>Roles & Permissions</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="roles_permisstion" class="iq-submenu collapse {{ Request::is('app/roles*') ? 'show' : '' }}" data-parent="#iq-sidebar-toggle">
                        <li><a href="{{ route('app.roles.index') }}"><i class="ri-profile-line"></i>Roles</a></li>
                        <li><a href=""><i class="ri-file-edit-line"></i>Roles Edit</a></li>
                        <li><a href="add-user.html"><i class="fa-solid fa-plus"></i>Roles Add</a></li>
                        <li><a href="user-list.html"><i class="ri-file-list-line"></i>Roles List</a></li>
                    </ul>
                </li>
                @endpermission
                <li>
                    <a href="#userinfo" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-user-line"></i><span>User</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="userinfo" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="profile.html"><i class="ri-profile-line"></i>User Profile</a></li>
                        <li><a href="profile-edit.html"><i class="ri-file-edit-line"></i>User Edit</a></li>
                        <li><a href="add-user.html"><i class="ri-user-add-line"></i>User Add</a></li>
                        <li><a href="user-list.html"><i class="ri-file-list-line"></i>User List</a></li>
                    </ul>
                </li>
                <li>
                    <a href="todo.html" class="iq-waves-effect" aria-expanded="false">
                        {{-- <i class="ri-pencil-ruler-line"></i> --}}
                        <i class="fa-brands fa-vuejs"></i>
                        <span>Theme Settings</span>
                    </a>
                </li>
                <li class="iq-menu-title"><i class="ri-subtract-line">
                    </i>
                    <span>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </span>
                </li>
                
            </ul>
        </nav>
        <div class="p-3"></div>
    </div>
</div>