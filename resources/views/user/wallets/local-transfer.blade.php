<x-layout.app>
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Wallets</div>
        <div class="ps-3">
        </div>
        <div class="ms-auto">
            {{-- <a href="{{ route('deposit-methods') }}" class="btn btn-light px-3"><i class='lni lni-arrow-left'></i>Back</a> --}}
        </div>
    </div>
    <hr />
    <!--end breadcrumb-->

    <div style="padding: 1rem 3rem">

        <div class="card p-3">
            <h4>Choose Transfer Type</h4>
            <div class="mt-3">
                <p> <span>Method : </span> Local transfer</p>
                <p><span>Description : </span> Send funds to ProWallet Demo customers instantlly.</p>
                <hr>
                <a href="{{ route('user.wallet.send.local_transfer',$wallet) }}" class="btn btn-light px-3"><i class='lni lni-pulse'></i>Create
                    Transfer</a>

            </div>
        </div>
    </div>

</x-layout.app>
<script>
    $(document).ready(function() {
        $('#kycs_datatable').DataTable()
    });
</script>
