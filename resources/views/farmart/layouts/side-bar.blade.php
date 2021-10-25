<ul class="sidebar-dash">
    <li class="{{ (request()->is('farmart/vendor/dashboard')) ? 'active' : '' }}"><a href="{{ route('dashboard.index')}}">Dashboard</a>
    </li>
    <li class="@if(request()->is('farmart/vendor/product')) {{ 'active' }} @elseif(request()->is('farmart/vendor/product/create')) {{ 'active' }} @endif"><a href="{{ route('product.index')}}">Product Management</a>
    </li>
    <li><a href=""> Order Management</a>
    </li>
    <li><a href=""> Earnings</a></li>
</ul>