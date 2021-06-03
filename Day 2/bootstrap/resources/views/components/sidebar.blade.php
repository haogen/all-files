<div style="height:88vh;" class="bg-dark d-flex flex-column flex-shrink-0 p-3">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap"></use>
        </svg>
        <span class="fs-4 text-white">PAYROLL IS</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="layout" class=" text-white nav-link link-dark">
                <i class="fa fa-user"></i>
                Home
            </a>
        </li>
        <li>
            <a href="/layout" class=" text-white nav-link @if($active == 'layout') active @endif " aria-current="page">
                <i class="fa fa-bar-chart"></i>
                Dashboard
            </a>
        </li>
        <li>
            <a href="/department" class=" text-white nav-link @if($active == 'department') active @endif "
                aria-current="page">
                        <i class=" fa fa-university"></i>
                Department
            </a>
        </li>
        <li>
            <a href="/employees" class=" text-white nav-link @if($active == 'employees') active @endif "
                aria-current="page">
                <i class="fa fa-list"></i>
                Employees
            </a>
        </li>
        <li>
            <a href="/loans" class=" text-white nav-link @if($active == 'loans') active @endif " aria-current="page">
                <i class="fa fa-folder"></i>
                Loans
            </a>
        </li>
        <li>
            <a href="/leaves" class=" text-white nav-link @if($active == 'leaves') active @endif " aria-current="page">
                <i class="fa fa-users"></i>
                Leaves
            </a>
        </li>
        <li>
            <a href="/mandatory-deductions"
                class=" text-white nav-link @if($active == 'mandatory-deductions') active @endif " aria-current="page">
                <i class="fa fa-address-book"></i>
                Mandatory Deductions
            </a>
        </li>
        <li>
            <a href="/timekeeping" class=" text-white nav-link @if($active == 'timekeeping') active @endif "aria-current="page">
                <i class=" fa fa-hourglass-half"></i>
                Time Keeping
            </a>
        </li>
        <li>
            <a href="/payslips" class=" text-white nav-link @if($active == 'payslips') active @endif "aria-current="page">
                <i class=" fa fa-clone"></i>
                Payslips
            </a>
        </li>
        <li>
            <a href="/settings" class=" text-white nav-link @if($active == 'settings') active @endif "aria-current="page">
                <i class=" fa fa-cogs"></i>
                Settings
            </a>
        </li>      
    </ul>
    <hr>
</div>