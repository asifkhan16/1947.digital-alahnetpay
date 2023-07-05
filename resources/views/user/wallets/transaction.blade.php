<x-layout.app>
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Wallet Transaction</div>
        <div class="ps-3">
        </div>
        <div class="ms-auto">
            <a href="{{ route('user.wallets') }}" class="btn btn-light px-3"><i class='lni lni-arrow-left'></i>Back</a>
        </div>
    </div>
    <hr />
    <!--end breadcrumb-->
    <x-alerts />
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="transaction_datatable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Transaction ID</th>
                            <th>Credit</th>
                            <th>Debit</th>
                            <th>Charges</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($wallet_transactions as $transaction)
                            <tr>
                                <td>{{ $transaction->transaction_unqiue_id }}</td>
                                <td>{{ $transaction->credit }}</td>
                                <td>{{ $transaction->debit }}</td>
                                <td>{{ $transaction->charges }}</td>
                                <td>{{ $transaction->description }}</td>
                                <td>
                                    @if ($transaction->status == 0)
                                        <span class="badge bg-primary">Pending</span>
                                    @elseif ($transaction->status == 1)
                                        <span class="badge bg-primary">Accepted</span>
                                    @elseif ($transaction->status == 2)
                                        <span class="badge bg-danger">Cancelled</span>
                                    @elseif ($transaction->status == 3)
                                        <span class="badge bg-success">Hold</span>
                                    @elseif ($transaction->status == 4)
                                        <span class="badge bg-success">Completed</span>
                                    @endif
                                </td>
                                <td>{{ $transaction->created_at }}</td>
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
        $('#transaction_datatable').DataTable()
    });
</script>
