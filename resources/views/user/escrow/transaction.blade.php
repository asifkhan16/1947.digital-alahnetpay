<x-layout.app>
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Escrow Transactions</div>
        <div class="ps-3">
        </div>
        <div class="ms-auto">
            {{-- <a href="{{ route('user.wallets') }}" class="btn btn-light px-3"><i class='lni lni-arrow-left'></i>Back</a> --}}
        </div>
    </div>
    <hr />
    <!--end breadcrumb-->
    <x-alerts />
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="deposits_datatable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Transaction ID</th>
                            <th>Description</th>
                            <th>Credit</th>
                            <th>Debit</th>
                            <th>charges</th>
                            <th>Status</th>
                            {{-- <th class="text-center">Action</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $transaction)
                            <tr>
                                <td>{{ $transaction->id }}</td>
                                <td>{{ $transaction->transaction_unqiue_id }}</td>
                                <td>{{ $transaction->description }}</td>
                                <td>{{ $transaction->credit }}</td>
                                <td>{{ $transaction->debit }}</td>
                                <td>{{ $transaction->charges }}</td>
                                <td>
                                    @if ($transaction->status == 0)
                                        <span class="badge bg-primary">Pending</span>
                                    @elseif ($transaction->status == 1)
                                        <span class="badge bg-primary">Completed</span>
                                    @elseif ($transaction->status == 2)
                                        <span class="badge bg-primary">Cancelled</span>
                                    @elseif ($transaction->status == 3)
                                        <span class="badge bg-warning">Hold</span>
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
        $('#deposits_datatable').DataTable()
    });
</script>
