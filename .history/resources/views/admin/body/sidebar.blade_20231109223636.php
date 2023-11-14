<nav class="sidebar">
    <div class="sidebar-header">
        <a href="{{ route('admin.dashboard') }}" class="sidebar-brand">
            AWES
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link">
                    <i class="link-icon" data-feather="home"></i>
                    <span class="link-title">Home</span>
                </a>
            </li>
            <li class="nav-item nav-category">Task Manager</li>
            <li class="nav-item">
                <a href="{{ route('admin.calendar') }}" class="nav-link">
                    <i class="link-icon" data-feather="calendar"></i>
                    <span class="link-title">Calendar</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('index.user.roles') }}" class="nav-link">
                    <i class="link-icon" data-feather="bookmark"></i>
                    <span class="link-title">User Roles</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false"
                    aria-controls="emails">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Email</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="emails">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('admin.inbox') }}" class="nav-link">Inbox</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Compose</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item nav-category">Activities</li>
            <li class="nav-item">
                <a href="{{ route('index.ticket') }}" class="nav-link">
                    <i class="link-icon" data-feather="bookmark"></i>
                    <span class="link-title">Tickets</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('index.customer') }}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Customer</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="link-icon" data-feather="bookmark"></i>
                    <span class="link-title">History Logs</span>
                </a>
            </li>
            <li class="nav-item nav-category">Inventory & Orders</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#charts" role="button" aria-expanded="false"
                    aria-controls="charts">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Inventory</span>
                </a>
                <div class="collapse" id="charts">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('materials.inventory') }}" class="nav-link">Material List</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('equipment.inventory') }}" class="nav-link">Equipment List</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#forms" role="button" aria-expanded="false"
                    aria-controls="forms">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Order</span>
                </a>
                <div class="collapse" id="forms">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('index.purchaseOrder') }}" class="nav-link">Orders List</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('add.purchaseOrder.materials') }}" class="nav-link">Purchase Order
                                (Materials)</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('add.purchaseOrder.equipment') }}" class="nav-link">Purchase Order
                                (Equipment)</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
