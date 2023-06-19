<x-layout.app>
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Deposit Methods</div>
        <div class="ps-3">
        </div>
        <div class="ms-auto">
            <a href="{{ route('deposit-method.create') }}" class="btn btn-light px-3"><i
                    class='lni lni-circle-plus'></i>Add new Method</a>
        </div>
    </div>
    <hr />
    <!--end breadcrumb-->
    <div class="row">
        <div class="col-12 col-lg-9 mx-auto">
            <div class="row">
                @forelse ($deposit_methods as $method)
                    <div class="col-md-6">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="{{ $method->image_url }} "
                                        class="rounded-circle p-1 border" width="90" height="90" alt="...">
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mt-0">{{ $method->name }}</h5>
                                        <span> Status </span>
                                        @if ($method->status == 1)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Not Active</span>
                                        @endif
                                        <div class="d-flex justify-content-end mt-3">
                                            <a href="{{ route('deposit-method.edit', $method) }}" class="btn btn-sm btn-light px-3"><i class='lni lni-control-panel'></i>Configure</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse

            </div>

        </div>
    </div>
</x-layout.app>
<script>
    $(document).ready(function() {
        $('#kycs_datatable').DataTable()
    });
</script>
