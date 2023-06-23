<x-layout.app>
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">New Card</div>
        <div class="ps-3">
        </div>
        <div class="ms-auto">
            <a href="{{ route('user.card') }}" class="btn btn-light px-3"><i class='lni lni-arrow-left'></i>Back</a>

        </div>
    </div>
    <hr />
    <!--end breadcrumb-->
    <x-alerts />
    <div class="row">
        <div class="col-xl-7 mx-auto">
            <div class="card border-top border-0 border-4 border-white">
                <div class="card-body p-5">
                    <p>Select your preferred wallet from the options below.</p>
                    <form action="{{ route('user.card.store') }}" method="POST" class="row g-3"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="col-12">
                            <label for="wallet_id" class="form-label">Wallets</label>
                            <select id="wallet_id" class="form-select" name="wallet_id">
                                <option value="">Choose your wallet</option>
                                @forelse ($wallets as $wallet)
                                    <option value="{{ $wallet->id }}">{{ $wallet->name }}</option>
                                @empty
                                    <span>no wallet yet !</span>
                                @endforelse
                            </select>
                            @error('wallet_id')
                                <span class="text-warning">{{ $message }}</span>
                            @enderror

                        </div>

                        <div class="col-12 mt-4 d-flex justify-content-end">
                            <button type="submit" class="btn btn-sm btn-light px-5">Apply</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout.app>
<script>
    $(document).ready(function() {
        $('#deposits_datatable').DataTable()
    });
</script>
