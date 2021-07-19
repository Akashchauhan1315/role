<div id="sidebar-menu">

            <ul id="side-menu">
                <li class="menu-title">Dashboard</li>
                                <li>
                    <a href="{{ route('home.index')}}">
                        <i data-feather="airplay"></i>
                            <span>Dashboard</span>
                    </a>
                </li>
                <li class="menu-title mt-2">Apps</li>
                
                <li>
                    <a href="#Users" data-toggle="collapse">
                        <i data-feather="users"></i>
                        <span> Users </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="Users">
                        <ul class="nav-second-level">
                            
                            <li>
                                <a href="{{ route('user.index')}}">Users</a>
                            </li>
                        </ul>
                    </div>
                </li>
                
                                                                    
                
                            </ul>

        </div>