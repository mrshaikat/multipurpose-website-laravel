
<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>

                <li class="menu-title">
                    <span>Main</span>
                </li>

                <li class="active">
                    <a href="{{ route('home') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a>
                </li>

                {{-- <li class="">
                    <a href="index.html"><i class="fa fa-plus"></i> <span>Post</span></a>
                </li>

                <li class="">
                    <a href="index.html"><i class="fa fa-list-alt"></i> <span>Category</span></a>
                </li>

                <li class="">
                    <a href="index.html"><i class="fe fe-tag"></i> <span>Tag</span></a>
                </li> --}}


                <li class="">
                    <a href="index.html"><i class="fe fe-users"></i> <span>Users</span></a>
                </li>




                <li class="submenu">
                    <a href="#"><i class="fa fa-plus"></i> <span> Posts</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('post.index') }}">All Posts</a></li>
                        <li><a href="{{ route('post-category.index') }}">Categorys</a></li>
                        <li><a href="{{ route('tag.index') }}">Tags</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fe fe-vector"></i> <span>Home Settings</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">

                        <li><a href="{{ route('slider.index') }}">Slider</a></li>
                        <li><a href="">Who We Are</a></li>
                        <li><a href="">Vision</a></li>
                        <li><a href="{{ route('clients.index') }}">Clients</a></li>
                        <li><a href="">Testimonials</a></li>
                        <li><a href="">Home SetUp</a></li>

                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fe fe-vector"></i> <span> Settings</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('logo.index') }}">Logo</a></li>

                        <li><a href="{{ route('social.index') }}">Social Icon</a></li>
                        <li><a href="#">Footer</a></li>


                    </ul>
                </li>



            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
