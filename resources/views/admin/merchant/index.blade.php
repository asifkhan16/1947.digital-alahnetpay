<x-layout.app>
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Merchants</div>
        <div class="ps-3">
        </div>
        <div class="ms-auto">
        </div>
    </div>
    <hr />
    <!--end breadcrumb-->
    <x-alerts />
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="kycs_datatable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Store Name</th>
                            <th>Client ID</th>
                            <th>Document 1</th>
                            <th>Document 2</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($merchants as $merchant)
                            <tr>
                                <td>{{ $merchant->id }}</td>
                                <td>{{ $merchant->user->name }}</td>
                                <td>{{ $merchant->store_name }}</td>
                                <td>{{ $merchant->client_id }}</td>
                                <td><a href="{{ $merchant->business_kyc_verification->document_one }}" target="blank"
                                        class="btn btn-sm btn-primary">Preview</a></td>
                                <td>
                                    @if ($merchant->business_kyc_verification->document_two)
                                        <a href="{{ $merchant->business_kyc_verification->document_two }}" class="btn btn-sm btn-primary">Preview</a>
                                    @else
                                        <span>N/A</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($merchant->status == 0)
                                        <span>Pending</span>
                                    @elseif ($merchant->status == 1)
                                        <span>Approved</span>
                                    @else
                                        <span>Rejected</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($merchant->status == 0)
                                        <a href="{{ route('merchant.approved', ['merchant' => $merchant, 'status' => 1]) }}"
                                            class="btn btn-sm btn-warning me-2">Approve
                                        </a>
                                        <a href="{{ route('merchant.reject', ['merchant' => $merchant, 'status' => 2]) }}"
                                            class="btn btn-sm btn-danger">Reject
                                        @else
                                            N/A
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout.app>
<script>
    $(document).ready(function() {
        $('#kycs_datatable').DataTable()
    });
</script>
