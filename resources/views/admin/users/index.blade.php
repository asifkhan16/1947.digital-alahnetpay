<x-layout.app>
    <h6 class="mb-0 text-uppercase">DataTable Example</h6>
    <hr />
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="users_datatable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>UserName</th>
                            <th>Email address</th>
                            <th>Email Verified</th>
                            <th>Kyc Verified</th>
                            <th>Balance</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if ($user->email_verified_at == '')
                                        N/A
                                    @else
                                        {{ $user->email_verified_at }}
                                    @endif
                                </td>
                                <td>
                                    @if($user->kyc_verification == '')
                                    <span>N/A</span>
                                    @elseif ($user->kyc_verification->status == 0)
                                        <span>Pending</span>
                                    @elseif ($user->kyc_verification->status == 1)
                                        <span>Completed</span>
                                    @else
                                        <span>Canceled</span>
                                    @endif
                                </td>
                                <td>$320,800</td>
                                <td>{{ $user->roles()->first()->name }}</td>
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
        $('#users_datatable').DataTable()
    });
</script>
