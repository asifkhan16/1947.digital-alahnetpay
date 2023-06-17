<x-layout.app>
    <h6 class="mb-0 text-uppercase">DataTable Example</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="users_datatable" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>ID</th>
										<th>Name</th>
                                        <th>Position</th>
										<th>Office</th>
										<th>Age</th>
										<th>Start date</th>
										<th>Salary</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->email_verified_at }}</td>
                                            <td>{{ $user->roles()->first()->name }}</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
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