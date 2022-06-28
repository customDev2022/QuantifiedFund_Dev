<div class="sidebar" data-color="orange" data-image="{{ asset('storage') }}/assets/img/sidebar-5.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="https://wellbuiltdigital.com/" target="_blank" class="simple-text logo-mini">
                WD
            </a>
            <a href="https://wellbuiltdigital.com/" target="_blank" class="simple-text logo-normal">
                WellBuilt Digital
            </a>
        </div>
        <div class="user">
            <div class="photo">
                <img src="{{ asset('storage') }}/assets/img/default-avatar.png" />
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    <span><?=Auth::user()->fname ?> <?=Auth::user()->lname ?>
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a class="profile-dropdown" href="#pablo">
                                <span class="sidebar-mini">MP</span>
                                <span class="sidebar-normal">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a class="profile-dropdown" href="#pablo">
                                <span class="sidebar-mini">EP</span>
                                <span class="sidebar-normal">Edit Profile</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin::dashboard') }}">
                    <i class="nc-icon nc-chart-pie-35"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#pages">
                    <i class="nc-icon nc-app"></i>
                    <p>
                        Pages
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="pages">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin::page.index') }}">
                                <span class="sidebar-mini">M</span>
                                <span class="sidebar-normal">Manage Pages</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin::page.create') }}">
                                <span class="sidebar-mini">A</span>
                                <span class="sidebar-normal">Add Page</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#news">
                    <i class="nc-icon nc-app"></i>
                    <p>
                        News
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="news">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin::news.index') }}">
                                <span class="sidebar-mini">M</span>
                                <span class="sidebar-normal">Manage News</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin::news.create') }}">
                                <span class="sidebar-mini">A</span>
                                <span class="sidebar-normal">Add News</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#funds">
                    <i class="nc-icon nc-app"></i>
                    <p>
                        Funds
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="funds">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin::fund.index') }}">
                                <span class="sidebar-mini">M</span>
                                <span class="sidebar-normal">Manage Funds</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin::fund.create') }}">
                                <span class="sidebar-mini">A</span>
                                <span class="sidebar-normal">Add Fund</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
