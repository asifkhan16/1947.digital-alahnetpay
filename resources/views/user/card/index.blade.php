<x-layout.app>
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Cards</div>
        <div class="ps-3">
        </div>
        <div class="ms-auto">
            <a href="{{ route('user.card.create') }}" class="btn btn-light px-3"><i class='lni lni-circle-plus'></i>New
                Card</a>
        </div>
    </div>
    <hr />
    <!--end breadcrumb-->
    <x-alerts />
    <div class="card">
        <div class="card-body">
            <div class="row">
                @forelse ($cards as $card)
                    <div class="col-md-6">
                        <div class="glass-card">
                            <div class="glass-content">
                                <div class="card-logo">
                                    <img src="{{ asset('assets/images/card.png') }}" alt="Mastercard Logo">
                                </div>
                                <div class="card-number">
                                    <span>{{ $card->card_number }}</span>
                                </div>
                                <div class="card-info">
                                    <div class="card-holder">
                                        <span>{{ $card->user->name }}</span>
                                    </div>
                                    <div class="card-expiry">
                                        <span>Exp: {{ $card->expiry_date }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <span>no card yet !</span>
                @endforelse



            </div>
        </div>
    </div>
</x-layout.app>
<script>
    $(document).ready(function() {
        $('#deposits_datatable').DataTable()
    });
</script>
