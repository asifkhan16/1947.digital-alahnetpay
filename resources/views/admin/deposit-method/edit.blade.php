<x-layout.app>
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Configurate {{ $method->name }}</div>
        <div class="ps-3">
        </div>
        <div class="ms-auto">
            <a href="{{ route('deposit-methods') }}" class="btn btn-light px-3"><i class='lni lni-arrow-left'></i>Back</a>
        </div>
    </div>
    <hr />
    <!--end breadcrumb-->
    <div class="row">
        <div class="col-xl-7 mx-auto">
            <div class="card border-top border-0 border-4 border-white">
                <div class="card-body p-5">
                    <form action="{{ route('deposit-method.update', $method) }}" method="POST" class="row g-3"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="col-12">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $method->name }}">
                            @error('name')
                                <span class="text-warning">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="fixed_deposit_fee" class="form-label">Fixed Depoit fee</label>
                            <input type="text" class="form-control" placeholder="0.00" id="fixed_deposit_fee"
                                name="fixed_deposit_fee" value="{{ $method->fixed_deposit_fee }}">
                            @error('fixed_deposit_fee')
                                <span class="text-warning">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="percentage_deposit_fee" class="form-label">Percentage Depoit fee</label>
                            <input type="text" class="form-control" placeholder="0.00" id="percentage_deposit_fee"
                                name="percentage_deposit_fee" value="{{ $method->percentage_deposit_fee }}">
                            @error('percentage_deposit_fee')
                                <span class="text-warning">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="status" class="form-label">Status</label>
                            <select id="status" class="form-select" name="status">
                                <option value="1" selected>Active</option>
                                <option value="0">Not Active</option>
                            </select>
                            @error('status')
                                <span class="text-warning">{{ $message }}</span>
                            @enderror

                        </div>
                        <div class="col-12">
                            <label for="image" class="form-label">Upload Image</label>
                            <input type="file" class="form-control" placeholder="0.00" id="image" name="image">
                            @error('image')
                                <span class="text-warning">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 mt-4 d-flex justify-content-end">
                            {{-- <button type="submit" class="btn btn-sm btn-light px-5">Save changes</button> --}}
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
