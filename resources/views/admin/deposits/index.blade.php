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
                               <td>{{ $kyc->user->name }}</td>
                               <td><a href="{{ $kyc->document_front }}" target="blank"
                                       class="btn btn-sm btn-primary">Preview</a></td>
                               <td><a href="{{ $kyc->document_back }}" class="btn btn-sm btn-primary">Preview</a></td>
                               <td>
                                   @if ($kyc->status == 0)
                                       <span>Pending</span>
                                   @elseif ($kyc->status == 1)
                                       <span>Completed</span>
                                   @else
                                       <span>Cancelled</span>
                                   @endif
                               </td>
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
       $('#deposits_datatable').DataTable()
   });
</script>
