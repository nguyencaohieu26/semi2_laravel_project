<!-- sidebar menu area start -->
<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="{{route('user-home-index')}}" class="text-white">
                <h4 class="mb-2 text-uppercase">Welcome</h4>
                <div class="d-flex align-items-center flex-wrap">
                    <img width="35px" class="rounded-circle mr-2" src="images_store/accounts/{{$user->avatar}}" alt="{{$user->lastname ."-".$user->firstname.'avatar'}}">
                    <p class="mb-0 text-white">{{$user->lastname ." ".$user->firstname}}</p>
                </div>
            </a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    <li class="active">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-info" aria-hidden="true"></i><span>Personal</span></a>
                        <ul class="collapse">
                            <li><a href="{{route('user-home-index')}}">Info</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Cart Auction</span></a>
                        <ul class="collapse">
                            <li><a href="{{route('user-cart')}}">Cart</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
