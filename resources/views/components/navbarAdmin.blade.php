<!-- sidebar menu area start -->
<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="{{route('admin-home-index')}}" class="text-white">Welcome Admin</a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    <li class="active">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                        <ul class="collapse">
                            <li class="active"><a href="{{route('admin-home-index')}}">dashboard</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-user"></i><span>Users</span></a>
                        <ul class="collapse">
                            <li><a href="{{route('admin-users')}}">List User</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-square" aria-hidden="true"></i><span>Category</span></a>
                        <ul class="collapse">
                            <li><a href="{{route('admin-categories')}}">Categories</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-product-hunt" aria-hidden="true"></i><span>Product</span></a>
                        <ul class="collapse">
                            <li><a href="{{route('admin-products')}}">Products</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-male" aria-hidden="true"></i><span>Artist</span></a>
                        <ul class="collapse">
                            <li><a href="{{route('admin-artists')}}">Artists</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-newspaper-o" aria-hidden="true"></i><span>Blog</span></a>
                        <ul class="collapse">
                            <li><a href="{{route('admin-blogs')}}">Blogs</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-certificate" aria-hidden="true"></i><span>Bid</span></a>
                        <ul class="collapse">
                            <li><a href="{{route('admin-bids')}}">Bids</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-gavel" aria-hidden="true"></i><span>Auction Result</span></a>
                        <ul class="collapse">
                            <li><a href="{{route('admin-auction-result')}}">Auction Result</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
