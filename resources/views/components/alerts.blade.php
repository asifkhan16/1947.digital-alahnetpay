@if (Session::has('success'))
  <div class="alert border-0 border-start border-5 border-white alert-dismissible fade show py-2">
    <div class="d-flex align-items-center">
        <div class="font-35 text-white"><i class='bx bx-bookmark-heart'></i>
        </div>
        <div class="ms-3">
            <h6 class="mb-0 text-white">{{Session::get('success')}}</h6>
            {{-- <div>A simple primary alert—check it out!</div> --}}
        </div>
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (Session::has('error'))
<div class="alert border-0 border-start border-5 border-white alert-dismissible fade show py-2">
    <div class="d-flex align-items-center">
        <div class="font-35 text-white"><i class='bx bxs-message-square-x'></i>
        </div>
        <div class="ms-3">
            <h6 class="mb-0 text-white">{{Session::get('error')}}</h6>
            {{-- <div>A simple danger alert—check it out!</div> --}}
        </div>
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
