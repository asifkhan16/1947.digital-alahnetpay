<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('dashtreme/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">AlphanetPay</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        {{-- admin links --}}
        @role('Admin')
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
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"> <i class="bx bx-donate-blood"></i>
                    </div>
                    <div class="menu-title">Kyc Verification</div>
                </a>
                <ul>
                    <li> <a href="{{ route('kyc_verification.index', ['status' => -1]) }}"><i
                                class='bx bx-radio-circle'></i>All KYC</a>
                    </li>
                    <li> <a href="{{ route('kyc_verification.index', ['status' => 0]) }}"><i
                                class='bx bx-radio-circle'></i>Pending Kyc</a>
                    </li>
                    <li> <a href="{{ route('kyc_verification.index', ['status' => 1]) }}"><i
                                class='bx bx-radio-circle'></i>Completed Kyc</a>
                    </li>
                    <li> <a href="{{ route('kyc_verification.index', ['status' => 2]) }}"><i
                                class='bx bx-radio-circle'></i>Cancelled Kyc</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"> <i class="bx bx-donate-blood"></i>
                    </div>
                    <div class="menu-title">Deposits</div>
                </a>
                <ul>
                    <li> <a href="{{ route('deposit.index', ['status' => -1]) }}"><i class='bx bx-radio-circle'></i>All
                            Deposits</a>
                    </li>
                    <li> <a href="{{ route('deposit.index', ['status' => 0]) }}"><i class='bx bx-radio-circle'></i>Pending
                            Deposits</a>
                    </li>
                    <li> <a href="{{ route('deposit.index', ['status' => 1]) }}"><i class='bx bx-radio-circle'></i>Completed
                            Deposits</a>
                    </li>
                    <li> <a href="{{ route('deposit.index', ['status' => 2]) }}"><i class='bx bx-radio-circle'></i>Cancelled
                            Deposits</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"> <i class="bx bx-donate-blood"></i>
                    </div>
                    <div class="menu-title">Cards</div>
                </a>
                <ul>
                    <li> <a href="{{ route('card.index', ['status' => -1]) }}"><i class='bx bx-radio-circle'></i>All
                            Cards</a>
                    </li>
                    <li> <a href="{{ route('card.index', ['status' => 0]) }}"><i class='bx bx-radio-circle'></i>Requested
                            Cards</a>
                    </li>
                    <li> <a href="{{ route('card.index', ['status' => 1]) }}"><i class='bx bx-radio-circle'></i>Approved
                            Cards</a>
                    </li>
                    <li> <a href="{{ route('card.index', ['status' => 2]) }}"><i class='bx bx-radio-circle'></i>Cancelled
                            Cards</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"> <i class="bx bx-donate-blood"></i>
                    </div>
                    <div class="menu-title">Hold Transactions</div>
                </a>
                <ul>
                    <li> <a href="{{ route('hold-transaction.index', ['status' => -1]) }}"><i
                                class='bx bx-radio-circle'></i>All Hold Transactions</a>
                    </li>
                    <li> <a href="{{ route('hold-transaction.index', ['status' => 1]) }}"><i
                                class='bx bx-radio-circle'></i>Active Transactions</a>
                    </li>
                    <li> <a href="{{ route('hold-transaction.index', ['status' => 2]) }}"><i
                                class='bx bx-radio-circle'></i>Released Transactions</a>
                    </li>
                    <li> <a href="{{ route('hold-transaction.index', ['status' => 3]) }}"><i
                                class='bx bx-radio-circle'></i>Cancelled Transactions</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('deposit-methods') }}">
                    <div class="parent-icon"><i class='lni lni-users'></i>
                    </div>
                    <div class="menu-title">Deposit Methods</div>
                </a>
            </li>
            <li>
                <a href="{{ route('currencies.index') }}">
                    <div class="parent-icon"><i class='lni lni-money-protection'></i>
                    </div>
                    <div class="menu-title">Currencies</div>
                </a>
            </li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"> <i class="bx bx-donate-blood"></i>
                    </div>
                    <div class="menu-title">Merchants</div>
                </a>
                <ul>
                    <li> <a href="{{ route('merchant.index', ['status' => -1]) }}"><i
                                class='bx bx-radio-circle'></i>All Merchants</a>
                    </li>
                    <li> <a href="{{ route('merchant.index', ['status' => 1]) }}"><i
                                class='bx bx-radio-circle'></i>Approved Merchants</a>
                    </li>
                    <li> <a href="{{ route('merchant.index', ['status' => 2]) }}"><i
                                class='bx bx-radio-circle'></i>Rejected Merchants</a>
                    </li>
                </ul>
            </li>
        @endrole

        {{-- user links --}}
        @role('User')
            <li>
                <a href="{{ route('user.dashboard.index') }}">
                    <div class="parent-icon"><i class='bx bx-home-alt'></i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>
            <li>
                <a href="{{ route('user.wallets') }}">
                    <div class="parent-icon"><i class='bx bx-home-alt'></i>
                    </div>
                    <div class="menu-title">Wallets</div>
                </a>
            </li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"> <i class="bx bx-donate-blood"></i>
                    </div>
                    <div class="menu-title">Escrow</div>
                </a>
                <ul>
                    <li> <a href="{{ route('user.escrow') }}"><i class='bx bx-radio-circle'></i>All Escrow</a>
                    </li>
                    <li> <a href="{{ route('user.escrow.create') }}"><i class='bx bx-radio-circle'></i>New Escrow</a>
                    </li>
                    <li> <a href="{{ route('user.escrow.transaction') }}"><i
                                class='bx bx-radio-circle'></i>Transactions</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="{{ route('user.card') }}">
                    <div class="parent-icon"><i class='lni lni-credit-cards'></i>
                    </div>
                    <div class="menu-title">AlphaCard</div>
                </a>
            </li>
            <li>
                <a href="{{ route('user.merchant') }}">
                    <div class="parent-icon"><i class='lni lni-credit-cards'></i>
                    </div>
                    <div class="menu-title">Merchant</div>
                </a>
            </li>
        @endrole
    </ul>
    <!--end navigation-->
</div>
