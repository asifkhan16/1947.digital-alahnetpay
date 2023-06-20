<x-layout.app>
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Wallets</div>
        <div class="ps-3">
        </div>
        <div class="ms-auto">
            {{-- <a href="{{ route('deposit-methods') }}" class="btn btn-light px-3"><i class='lni lni-arrow-left'></i>Back</a> --}}
        </div>
    </div>
    <hr />
    <!--end breadcrumb-->

    <div style="padding: 1rem 3rem">
        <div class="row">
            @forelse ($wallets as $wallet)
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="chip chip-md bg-light text-white">
                                <img src="{{ asset('dashtreme/assets/flags/1x1/ae.svg') }}">{{ $wallet->name }}
                            </div>
                            <div class="ps-3">
                                <p class="card-text text">Balance <span class="badge bg-success"
                                        style="font-size: 1rem">{{ $wallet->balance }}</span></p>
                                <p class="mt-4 mb-1">Wallet Address</p>
                                <span>{{ $wallet->address }}</span>
                            </div>
                            <hr>
                            <div>
                                <a href="#" class="btn btn-light btn-sm px-3">
                                    <i class='lni lni-pulse'></i>Deposit</a>
                                <a href="{{ route('user.wallet.send', $wallet) }}" class="btn btn-light btn-sm px-3 ms-2">
                                    <i class='lni lni-pulse'></i>Send</a>
                                <a href="#" class="btn btn-light btn-sm px-3 ms-2">
                                    <i class='lni lni-pulse'></i>Withdraw</a>
                                <a href="#" class="btn btn-light btn-sm px-3 ms-2">
                                    <i class='lni lni-pulse'></i>Transactions</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <span>No wallet yet...</span>
            @endforelse
        </div>
    </div>

</x-layout.app>
<script>
    $(document).ready(function() {
        $('#kycs_datatable').DataTable()
    });
</script>
