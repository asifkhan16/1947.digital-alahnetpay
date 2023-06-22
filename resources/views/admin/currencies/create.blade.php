<x-layout.app>
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Add new Currency</div>
        <div class="ps-3">
        </div>
        <div class="ms-auto">
            <a href="{{ route('currencies.index') }}" class="btn btn-light px-3"><i class='lni lni-arrow-left'></i>Back</a>
        </div>
    </div>
    <hr />
    <!--end breadcrumb-->
    <div class="row">
        <div class="col-xl-7 mx-auto">
            <div class="card border-top border-0 border-4 border-white">
                <div class="card-body p-5">
                    <form action="{{ route('currencies.store') }}" method="POST" class="row g-3" enctype="multipart/form-data">
                        @csrf
                        <div class="col-12">
                            <label for="country_name" class="form-label">Country Name</label>
                            <input type="text" class="form-control" id="country_name" name="country_name">
                            @error('country_name') <span class="text-warning">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12">
                            <label for="country_code" class="form-label">Country Code</label>
                            <input type="text" class="form-control" placeholder="0.00" id="country_code" name="country_code">
                            @error('country_code') <span class="text-warning">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12">
                            <label for="currency_code" class="form-label">Currency Code</label>
                            <input type="text" class="form-control" placeholder="0.00" id="currency_code" name="currency_code">
                            @error('currency_code') <span class="text-warning">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12">
                            <label for="image" class="form-label">Country Flag</label>
                            <input type="file" class="form-control" placeholder="0.00" id="image" name="image">
                            @error('image') <span class="text-warning">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12 mt-4 d-flex justify-content-end">
                            <button type="submit" class="btn btn-sm btn-light px-5">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout.app>
