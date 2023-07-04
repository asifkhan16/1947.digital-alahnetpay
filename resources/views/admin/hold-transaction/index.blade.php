<x-layout.app>
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
       <div class="breadcrumb-title pe-3">Hold Transactions</div>
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
               <table id="hold_transaction_datatable" class="table table-striped table-bordered" style="width:100%">
                   <thead>
                       <tr>
                           <th>ID</th>
                           <th>amount</th>
                           <th>Status</th>
                           <th>Action</th>
                       </tr>
                   </thead>
                   <tbody>
                       @foreach ($hold_transactions as $hold_transaction)
                           <tr>
                               <td>{{ $hold_transaction->id }}</td>
                               <td>{{ $hold_transaction->amount }}</td>
                               <td>
                                   @if ($hold_transaction->status == 1)
                                        <span class="badge bg-primary text-light">Active</span>
                                   @elseif ($hold_transaction->status == 2)
                                        <span class="badge bg-info text-light">Released</span>
                                   @elseif ($hold_transaction->status == 3)
                                        <span class="badge bg-danger text-light">Cancelled</span>
                                    @endif
                               </td>
                               <td>
                                    actions
                               </td>
                               <td>
                                    @if($hold_transaction->status == 1)
                                        <a href="{{ route('hold-transaction.approve',$hold_transaction) }}" 
                                            class="btn btn-sm btn-warning me-2">Release
                                        </a>
                                        {{-- <a href="{{ route('hold-transaction.reject',$hold_transaction) }}"
                                        class="btn btn-sm btn-danger">Cancel --}}
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
       $('#hold_transaction_datatable').DataTable()
   });
</script>
