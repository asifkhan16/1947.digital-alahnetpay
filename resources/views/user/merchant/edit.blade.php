<x-layout.app>
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Merchant</div>
        <div class="ps-3">
        </div>
        <div class="ms-auto">
            {{-- <a href="{{ route('user.wallets') }}" class="btn btn-light px-3"><i class='lni lni-arrow-left'></i>Back</a> --}}
        </div>
    </div>
    <hr />
    <!--end breadcrumb-->
    {{-- <x-alerts /> --}}

    <div class="row">
        <div class="col-xl-7 mx-auto">
            <div class="card border-top border-0 border-4 border-white">
                <div class="card-body px-5 py-4">
                    <div class="">
                        <p style="font-size: 1rem" class="mb-4">
                            {{ $merchant->store_name }}
                            <span>
                                @if ($merchant->status == 0)
                                    <span class="badge bg-primary text-light">Requested</span>
                                @elseif ($merchant->status == 1)
                                    <span class="badge bg-primary text-light">Approved</span>
                                @elseif($merchant->status == 2)
                                    <span class="badge bg-danger text-light">Rejected</span>
                                @endif
                            </span>
                        </p>
                    </div>
                    <form action="{{ route('user.merchant.update',$merchant) }}" method="POST" class="row g-3"  enctype="multipart/form-data">
                        @csrf
                        <div class="col-12">
                            <label for="store_name" class="form-label">Store Name</label>
                            <input type="text" class="form-control" placeholder="" id="store_name"
                                name="store_name" value="{{ $merchant->store_name }}">
                            @error('store_name')
                                <span class="text-warning">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="store_address" class="form-label">Store Address</label>
                            <input type="text" class="form-control" id="store_address"
                                value="{{ $merchant->store_address }}" name="store_address">
                            @error('store_address')
                                <span class="text-warning">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="client_id" class="form-label">Client Id</label>
                            <input type="text" class="form-control muted" id="store_address"
                                value="{{ $merchant->client_id }}" disabled name="client_id">
                            @error('client_id')
                                <span class="text-warning">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="client_secret" class="form-label">Client Secret</label>
                            <input type="text" class="form-control" id="store_address"
                                value="{{ $merchant->client_secret }}" name="client_secret">
                            @error('client_secret')
                                <span class="text-warning">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="website_url" class="form-label">Website Url</label>
                            <input type="text" class="form-control" value="{{ $merchant->website_url }}" placeholder="www.example.com" id="website_url"
                                name="website_url">
                            @error('website_url')
                                <span class="text-warning">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 mt-4 d-flex justify-content-end">
                            <button type="submit" class="btn btn-sm btn-light px-5">Submit</button>
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
