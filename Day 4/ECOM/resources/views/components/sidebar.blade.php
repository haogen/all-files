<div style="height:88vh;" class="bg-dark d-flex flex-column flex-shrink-0 p-3">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap"></use>
        </svg>
        <span class="fs-4 text-white">ECOM</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
        <li>
            <a href="/products" class=" text-white nav-link @if($active == 'department') active @endif "
                aria-current="page">
                        <i class=" fa fa-shopping-cart"></i>
                Products
            </a>
        </li>
        <li>
            <a href="/categories" class=" text-white nav-link @if($active == 'employees') active @endif "
                aria-current="page">
                <i class="fa fa-list"></i>
                Categories
            </a>
        </li>
        <li>
            <a href="/orders" class=" text-white nav-link @if($active == 'loans') active @endif " aria-current="page">
                <i class="fa fa-folder"></i>
                Orders
            </a>
        </li>
        <li>
            <a href="/customers" class=" text-white nav-link @if($active == 'leaves') active @endif " aria-current="page">
                <i class="fa fa-users"></i>
                Customers
            </a>
        </li>    
    </ul>
    <hr>
</div>