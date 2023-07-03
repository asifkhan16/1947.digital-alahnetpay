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
                                <td>
                                    @if($escrow->role == 1)
                                        @if ($escrow->status == 0)
                                            <span class="badge bg-primary">buyer Pending</span>
                                        @elseif ($escrow->status == 1)
                                            <span class="badge bg-primary">Accepted</span>
                                        @elseif ($escrow->status == 2)
                                            <span class="badge bg-danger">Cancelled</span>
                                        @elseif ($escrow->status == 3)
                                            <span class="badge bg-success">Completed</span>
                                        @endif
                                    @endif

                                    @if($escrow->role == 2)
                                        @if ($escrow->status == 0)
                                            <span class="badge bg-primary">buyer Pending</span>
                                        @elseif ($escrow->status == 1)
                                            <span class="badge bg-primary">Accepted</span>
                                        @elseif ($escrow->status == 2)
                                            <span class="badge bg-danger">Cancelled</span>
                                        @elseif ($escrow->status == 3)
                                            <span class="badge bg-success">Completed</span>
                                        @endif
                                    @endif
                                    
                                </td>
                                <td class="text-center" style="width: 12rem">
                                    @if($escrow->role == 1)
                                        @if ($escrow->status == 0)
                                            <span class="badge bg-primary">buyer Pending</span>
                                        @elseif ($escrow->status == 1)
                                            <span class="badge bg-primary">Accepted</span>
                                        @elseif ($escrow->status == 2)
                                            <span class="badge bg-danger">Cancelled</span>
                                        @elseif ($escrow->status == 3)
                                            <span class="badge bg-success">Completed</span>
                                        @endif
                                    @endif

                                    @if($escrow->role == 2)
                                        @if ($escrow->status == 0)
                                            <span class="badge bg-primary">buyer Pending</span>
                                        @elseif ($escrow->status == 1)
                                            <span class="badge bg-primary">Accepted</span>
                                        @elseif ($escrow->status == 2)
                                            <span class="badge bg-danger">Cancelled</span>
                                        @elseif ($escrow->status == 3)
                                            <span class="badge bg-success"> </span>
                                        @endif
                                    @endif  
                                            <a href="{{ route('user.escrow.accept', $escrow) }}"
                                                class="btn btn-sm btn-success">Accept</a>
                                            <a href="{{ route('user.escrow.reject', $escrow) }}"
                                                class="btn btn-sm btn-danger">Reject</a>
                                            <a href="{{ route('user.escrow.release', $escrow) }}"
                                                class="btn btn-sm btn-success">Release</a>
                                        
                                </td>
                                {{-- @elseif($escrow->status == 1 && $escrow->creator_id == Auth::id()) --}}
                                @if($escrow->type == 1 && $escrow->creator_id != Auth::id() && $escrow->status == 1 )
                                    <td class="text-center" style="width: 12rem">
                                        <a href="{{ route('user.escrow.release', $escrow) }}"
                                            class="btn btn-sm btn-success">Release</a>
                                    </td>
                                @else
                                    {{-- <td class="text-center" style="width: 12rem"><span
                                            class="badge bg-light">Requested</span></td> --}}
                                @endif
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
