<x-layout.app>
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Wallets | Create local transfer</div>
        <div class="ps-3">
        </div>
        <div class="ms-auto">
            <a href="{{ route('user.wallets') }}" class="btn btn-light px-3"><i class='lni lni-arrow-left'></i>Back</a>
        </div>
    </div>
    <hr />
    <!--end breadcrumb-->
    <x-alerts />

    <div class="row">
        <div class="col-xl-7 mx-auto">
            <div class="card border-top border-0 border-4 border-white">
                <div class="card-body px-5 py-4">
                    <div class="d-flex justify-content-between">
                        <p style="font-size: 1rem" class="mb-4">Send USD from your {{ $wallet->address }} account</p>
                        <div>
                            <p class="m-0">Current Balance</p>
                            <div class="text-end">
                                <span style="font-size: 15px" class="text-end badge bg-success">${{ $wallet->balance }}</span>
                            </div>
                        </div>
                    </div>
                    <form action="{{ route('user.wallet.send.local_transfer.submit', $wallet) }}" method="POST"
                        class="row g-3">
                        @csrf
                        <div class="col-12">
                            <label for="amount" class="form-label">Amount</label>
                            <input type="text" class="form-control" placeholder="0.00" id="amount" name="amount"
                                value="{{ old('recipient') }}">
                            @error('amount')
                                <span class="text-warning">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="recipient" class="form-label">Recipient</label>
                            <input type="text" class="form-control" id="recipient" value="{{ old('recipient') }}"
                                name="recipient">
                            @error('recipient')
                                <span class="text-warning">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" class="form-control" placeholder="Enter a payment discription"
                                id="description" name="description">
                            @error('description')
                                <span class="text-warning">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 mt-4 d-flex justify-content-end">
                            <button type="submit" class="btn btn-sm btn-light px-5">Send</button>
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
