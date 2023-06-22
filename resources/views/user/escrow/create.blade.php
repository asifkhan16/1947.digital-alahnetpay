<x-layout.app>
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Escrow</div>
        <div class="ps-3">
        </div>
        <div class="ms-auto">
            {{-- <a href="{{ route('user.wallets') }}" class="btn btn-light px-3"><i class='lni lni-arrow-left'></i>Back</a> --}}
        </div>
    </div>
    <hr />
    <!--end breadcrumb-->
    <x-alerts />

    <div class="row">
        <div class="col-xl-7 mx-auto">
            <div class="card border-top border-0 border-4 border-white">
                <div class="card-body px-5 py-4">
                    <p style="font-size: 1.3rem" class="mb-4">Create new Escrow</p>
                    <hr>
                    <form action="{{ route('user.escrow.store') }}" method="POST" class="row g-3">
                        @csrf
                        <div class="col-12">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" placeholder="The title of your transaction."
                                id="title" name="title" value="{{ old('title') }}">
                            @error('title')
                                <span class="text-warning">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="amount" class="form-label">Amount</label>
                            <input type="amount" class="form-control" placeholder="0.00"
                                id="amount" name="amount" value="{{ old('amount') }}">
                            @error('amount')
                                <span class="text-warning">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="receiver_wallet_address" class="form-label">Recipient Wallet Address</label>
                            <input type="text" class="form-control" placeholder="US20NETP12345678U12"
                                id="receiver_wallet_address" name="receiver_wallet_address" value="{{ old('receiver_wallet_address') }}">
                            @error('receiver_wallet_address')
                                <span class="text-warning">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="user_wallet_id" class="form-label">Wallets</label>
                            <select id="user_wallet_id" class="form-select" name="user_wallet_id">
                                <option value="">Choose your wallet</option>
                                @forelse ($wallets as $wallet )
                                <option value="{{ $wallet->id }}">{{ $wallet->name }}</option>
                                @empty
                                <span>no wallet yet !</span>
                                @endforelse
                            </select>
                            @error('user_wallet_id') <span class="text-warning">{{ $message }}</span> @enderror

                        </div>
                        <div class="col-12">
                            <label for="type" class="form-label">Escrow</label>
                            <select id="type" class="form-select" name="type">
                                <option value="1" selected>Seller</option>
                                <option value="2">Buyer</option>
                            </select>
                            @error('type') <span class="text-warning">{{ $message }}</span> @enderror

                        </div>
                        <div class="col-12">
                            <label for="description" class="form-label">Description</label>
                            <textarea type="text" class="form-control" id="description" name="description"></textarea>
                            @error('description')
                                <span class="text-warning">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 mt-4 d-flex justify-content-end">
                            <button type="submit" class="btn btn-sm btn-light px-5">Create Escrow</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-layout.app>
<script>
    $(document).ready(function() {
        $('#kycs_datatable').DataTable()
    });
</script>
