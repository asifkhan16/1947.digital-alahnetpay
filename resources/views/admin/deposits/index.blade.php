<x-layout.app>
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
       <div class="breadcrumb-title pe-3">Kyc Verification</div>
       <div class="ps-3">
       </div>
       <div class="ms-auto">
       </div>
   </div>
   <hr />
   <!--end breadcrumb-->
   <div class="card">
       <div class="card-body">
           <div class="table-responsive">
               <table id="deposits_datatable" class="table table-striped table-bordered" style="width:100%">
                   <thead>
                       <tr>
                           <th>ID</th>
                           <th>Date</th>
                           <th>Unique Deposit Id</th>
                           <th>Activity</th>
                           <th>Username</th>
                           <th>Wallet</th>
                           <th>Referrence</th>
                           <th>Amount</th>
                           <th>Status</th>
                           <th>Action</th>
                       </tr>
                   </thead>
                   <tbody>
                       @foreach ($deposits as $deposit)
                           <tr>
                               <td>{{ $deposit->id }}</td>
                               <td>{{ $deposit->created_at }}</td>
                               <td>{{ $deposit->transaction_unqiue_id }}</td>
                               <td>{{ $deposit->description }}</td>
                               <td>{{ $deposit->user->name }}</td>
                               <td>{{ $deposit->wallet->address }}</td>
                               <td>
                                    @if ($deposit->transaction_detail->proof_file)
                                        <a href="{{ $deposit->transaction_detail->proof_file }}" target="blank"
                                        class="btn btn-sm btn-primary">Preview
                                        </a>
                                    @else
                                        N/A
                                    @endif
                                </td>
                               <td>{{ $deposit->credit . " " . $deposit->wallet->currency->code }}</td>
                               <td>
                                   @if ($deposit->status == 0)
                                       <span>Pending</span>
                                   @elseif ($deposit->status == 1)
                                       <span>Completed</span>
                                   @else
                                       <span>Cancelled</span>
                                   @endif
                               </td>
                               <td>
                                    @if ($deposit->transaction_detail->proof_file != null && $deposit->status == 0)
                                        <a href="{{ route('deposit.update.status',['deposit' => $deposit->id,'status' => 1]) }}" 
                                         class="btn btn-sm btn-warning">Approve
                                        </a>
                                        <a href="{{ route('deposit.update.status',['deposit' => $deposit->id,'status' => 2]) }}"
                                        class="btn btn-sm btn-danger">Cancel
                                        </a>
                                    @else
                                        N/A
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
