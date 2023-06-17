<x-layout.app>
    <h6 class="mb-0 text-uppercase">Pending Kyc Verification</h6>
    <hr />
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="kycs_datatable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>kycname</th>
                            <th>Front side</th>
                            <th>Back side</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pending_kyc as $kyc)
                            <tr>
                                <td>{{ $kyc->id }}</td>
                                <td>{{ $kyc->user->name }}</td>
                                <td><a href="{{ $kyc->document_front }}" target="blank"
                                        class="btn btn-sm btn-primary">Preview</a></td>
                                <td><a href="{{ $kyc->document_back }}" class="btn btn-sm btn-primary">Preview</a></td>
                                <td>
                                    @if ($kyc->status == 0)
                                        <span>Pending</span>
                                    @elseif ($kyc->status == 1)
                                        <span>Completed</span>
                                    @else
                                        <span>Cancelled</span>
                                    @endif
                                </td>
                                <td>N/A</td>
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
