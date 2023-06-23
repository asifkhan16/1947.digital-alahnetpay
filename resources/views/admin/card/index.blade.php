<x-layout.app>
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Currencies</div>
        <div class="ps-3">
        </div>
        <div class="ms-auto">
            <a href="{{ route('currencies.create') }}" class="btn btn-light px-3"><i
                    class='lni lni-circle-plus'></i>Add New Currency</a>
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
                                        <span class="badge bg-light text-success">Activated</span>
                                    @else
                                        <span class="badge bg-light text-info">Not Activated</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($card->is_freeze == 1)
                                    <span class="badge bg-light text-success">Freezed</span>
                                    @else
                                    <span class="badge bg-light text-info">Not Freezed</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($card->status == 0)
                                        <span class="badge bg-light text-primary">Requested</span>
                                    @elseif($card->status == 1)
                                        <span class="badge bg-light text-info">Approved</span>
                                    @elseif($card->status == 2)
                                        <span class="badge bg-light text-danger">Cancelled</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex order-actions">
                                        <a href="" class=""><i class='bx bxs-edit'></i></a>
                                        <form action="" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            {{-- <button type="submit" class="ms-3" style="border: none"><i class='bx bxs-trash'></i></button> --}}
                                            <a type="submit" href="javascript:void(0)" onclick="event.preventDefault(); this.closest('form').submit();" class="ms-3"><i class='bx bxs-trash'></i></a>
                                        </form>
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