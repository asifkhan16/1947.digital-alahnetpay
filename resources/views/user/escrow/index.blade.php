<x-layout.app>
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Escrow</div>
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
                            <th>Title</th>
                            <th>Seller</th>
                            <th>Buyer</th>
                            <th>Amount</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($escrows as $escrow)
                            <tr>
                                <td>{{ $escrow->id }}</td>
                                <td>{{ $escrow->title }}</td>
                                <td>{{ $escrow->seller->name }}</td>
                                <td>{{ $escrow->buyer->name }}</td>
                                <td>{{ $escrow->amount }}</td>
                                <td>{{ $escrow->description }}</td>
                               <!-- statuses -->
                                <td>
                                    @if (Auth::id() == $escrow->seller_id)
                                        @if ($escrow->status == 0)
                                            <span class="badge bg-primary">Pending</span>
                                        @elseif ($escrow->status == 1)
                                            <span class="badge bg-primary">Accepted</span>
                                        @elseif ($escrow->status == 2)
                                            <span class="badge bg-danger">Cancelled</span>
                                        @elseif ($escrow->status == 3)
                                            <span class="badge bg-success">Hold</span>
                                        @elseif ($escrow->status == 4)
                                            <span class="badge bg-success">Completed</span>
                                        @endif
                                    @endif

                                    @if (Auth::id() == $escrow->buyer_id)
                                        @if ($escrow->status == 0)
                                            <span class="badge bg-primary">Pending</span>
                                        @elseif ($escrow->status == 1)
                                            <span class="badge bg-primary">Accepted</span>
                                        @elseif ($escrow->status == 2)
                                            <span class="badge bg-danger">Cancelled</span>
                                        @elseif ($escrow->status == 3)
                                            <span class="badge bg-warning">Hold</span>
                                        @elseif ($escrow->status == 4)
                                            <span class="badge bg-success">Completed</span>
                                        @endif
                                    @endif
                                </td>

                                <!-- Actions -->
                                <td class="text-center" style="width: 12rem">
                                    <!-- for Seller -->
                                    @if (Auth::id() == $escrow->seller_id)
                                        @if ($escrow->status == 0 && $escrow->role == 2)
                                            <a href="{{ route('user.escrow.accept', $escrow) }}"
                                                class="btn btn-sm btn-success">Accept</a>
                                        @else
                                            N/A
                                        @endif
                                    @endif

                                    <!-- for Buyer -->
                                    @if (Auth::id() == $escrow->buyer_id)
                                        @if ($escrow->status == 0 && $escrow->role == 2)
                                            <a href="{{ route('user.escrow.accept', $escrow) }}"
                                                class="btn btn-sm btn-success">Accept</a>
                                        @elseif ($escrow->status == 1)
                                            <a href="{{ route('user.escrow.release', $escrow) }}"
                                                class="btn btn-sm btn-success">Release</a>
                                        @elseif ($escrow->status == 2)
                                            <span class="badge bg-danger">Cancelled</span>
                                        @else
                                            N/A
                                        @endif
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
