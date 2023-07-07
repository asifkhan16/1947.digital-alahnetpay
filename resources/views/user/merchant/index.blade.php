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
    <x-alerts />

    <div class="row">
        <div class="col-xl-7 mx-auto">
            <div class="card border-top border-0 border-4 border-white">
                <div class="card-body px-5 py-4">
                    <div class="">
                        <p style="font-size: 1rem" class="mb-4">Apply for Merchant</p>

                    </div>
                    <form action="{{ route('user.merchant.store') }}" method="POST" class="row g-3"  enctype="multipart/form-data">
                        @csrf
                        <div class="col-12">
                            <label for="store_name" class="form-label">Store Name</label>
                            <input type="text" class="form-control" placeholder="0.00" id="store_name"
                                name="store_name" value="{{ old('store_name') }}">
                            @error('store_name')
                                <span class="text-warning">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="store_address" class="form-label">Store Address</label>
                            <input type="text" class="form-control" id="store_address"
                                value="{{ old('store_address') }}" name="store_address">
                            @error('store_address')
                                <span class="text-warning">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="website_url" class="form-label">Website Url</label>
                            <input type="text" class="form-control" placeholder="www.example.com" id="website_url"
                                name="website_url">
                            @error('website_url')
                                <span class="text-warning">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="document_one" class="form-label">Document one</label>
                            <input type="file" class="form-control" value={{ old('document_one') }} id="document_one"
                                name="document_one">
                            @error('document_one')
                                <span class="text-warning">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="document_two" class="form-label">Document Two</label>
                            <input type="file" class="form-control" value={{ old('document_two') }} id="document_two"
                                name="document_two">
                            @error('document_two')
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
