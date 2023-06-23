<x-layout.app>
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Cards</div>
        <div class="ps-3">
        </div>
        <div class="ms-auto">
            {{-- <a href="{{ route('currencies.create') }}" class="btn btn-light px-3"><i
                    class='lni lni-circle-plus'></i>Add New Currency</a> --}}
        </div>
    </div>
    <hr />
    <!--end breadcrumb-->
    <x-alerts/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="cards_datatable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Card Number</th>
                            <th>User</th>
                            <th>Issue Date</th>
                            <th>Expiry Date</th>
                            <th>Card Activation</th>
                            <th>Freeze</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cards as $card)
                            <tr>
                                <td>{{ $card->id }}</td>
                                <td>{{ $card->card_number }}</td>
                                <td>{{ $card->user->name }}</td>
                                <td>{{ $card->issue_date }}</td>
                                <td>{{ $card->expiry_date }}</td>
                                <td>
                                    @if ($card->is_activated == 1)
                                        <span class="badge text-light bg-success">Activated</span>
                                    @else
                                        <span class="badge text-light bg-info">Not Activated</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($card->is_freeze == 1)
                                    <span class="badge text-light bg-success">Freezed</span>
                                    @else
                                    <span class="badge text-light bg-info">Not Freezed</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($card->status == 0)
                                        <span class="badge bg-primary text-light">Requested</span>
                                    @elseif($card->status == 1)
                                        <span class="badge bg-info text-light">Approved</span>
                                    @elseif($card->status == 2)
                                        <span class="badge bg-danger text-light">Cancelled</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex order-action">
                                        @if($card->status == 0)
                                            <a href="{{ route('card.update.status',['card' => $card,'status' => 1]) }}"
                                                class="btn btn-sm btn-warning me-2">Approve
                                            </a>
                                            <a href="{{ route('card.update.status',['card' => $card,'status' => 2]) }}"
                                            class="btn btn-sm btn-danger">Cancel
                                        @else
                                            N/A
                                        @endif
                                        </a>
                                    </div>
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
        $('#cards_datatable').DataTable()
    });
</script>
