<x-layout.app>
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Cards</div>
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
                <table id="currencies_datatable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Country Name</th>
                            <th>Country Code</th>
                            <th>Currency Code</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($currencies as $currency)
                            <tr>
                                <td>{{ $currency->id }}</td>
                                <td>{{ $currency->country_name }}</td>
                                <td>{{ $currency->country_code }}</td>
                                <td>{{ $currency->currency_code }}</td>
                                <td>
                                    <div class="d-flex order-actions">
                                        <a href="{{ route('currencies.edit',$currency) }}" class=""><i class='bx bxs-edit'></i></a>
                                        <form action="{{  route('currencies.destroy',$currency) }}" method="POST">
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
        $('#currencies_datatable').DataTable()
    });
</script>
