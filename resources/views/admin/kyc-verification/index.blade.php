<x-layout.app>
     <!--breadcrumb-->
     <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Kyc Verification</div>
        <div class="ps-3">
        </div>
        <div class="ms-auto">
        </div>
    </div>
    <hr />
    <!--end breadcrumb-->
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="kycs_datatable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>username</th>
                            <th>Front side</th>
                            <th>Back side</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kyc_s as $kyc)
                            <tr>
                                <td>{{ $kyc->id }}</td>
                                <td>{{ $kyc->user->name }}</td>
                                <td><a href="{{ $kyc->document_front }}" target="blank"
                                        class="btn btn-sm btn-primary">Preview</a></td>
                                <td>
                                    @if($kyc->document_back)
                                        <a href="{{ $kyc->document_back }}" class="btn btn-sm btn-primary">Preview</a>
                                    @else
                                        <span>N/A</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($kyc->status == 0)
                                        <span>Pending</span>
                                    @elseif ($kyc->status == 1)
                                        <span>Completed</span>
                                    @else
                                        <span>Cancelled</span>
                                    @endif
                                </td>
                                <td>
                                    @if($kyc->status == 0)
                                    <a href="{{ route('kyc_verification.update.status',['kyc' => $kyc,'status' => 1]) }}" 
                                        class="btn btn-sm btn-warning me-2">Approve
                                    </a>
                                    <a href="{{ route('kyc_verification.update.status',['kyc' => $kyc,'status' => 2]) }}"
                                    class="btn btn-sm btn-danger">Cancel
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
