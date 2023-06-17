<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('dashtreme/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">AlahnetPay</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('dashboard.index') }}">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li class="menu-label">User Management</li>
        <li>
            <a href="{{ route('users.index') }}">
                <div class="parent-icon"><i class='lni lni-users'></i>
                </div>
                <div class="menu-title">Users</div>
            </a>
        </li>
        <li>
            <a href="{{ route('users.kyc-verification') }}">
                <div class="parent-icon"><i class='lni lni-users'></i>
                </div>
                <div class="menu-title">Kyc Verification</div>
            </a>
        </li>
        <li>
            <a href="{{ route('users.kyc-verification.pending') }}">
                <div class="parent-icon"><i class='lni lni-use'></i>
                </div>
                <div class="menu-title">Pending</div>
            </a>
        </li>
        <li>
            <a href="{{ route('users.kyc-verification.completed') }}">
                <div class="parent-icon"><i class='lni lni-use'></i>
                </div>
                <div class="menu-title">Completed</div>
            </a>
        </li>
        <li>
            <a href="{{ route('users.kyc-verification.canceled') }}">
                <div class="parent-icon"><i class='lni lni-use'></i>
                </div>
                <div class="menu-title">Canceled</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>
