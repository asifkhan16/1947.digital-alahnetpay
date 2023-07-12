<x-layout.auth page_title="Login">
    <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                <div class="col mx-auto">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="p-4">
                                <div class="mb-3 text-center">
                                    <img src="assets/images/logo-icon.png" width="60" alt="" />
                                </div>
                                <div class="text-center mb-4">
                                    <h5 class="">Payment Card</h5>
                                    <p class="mb-0"></p>
                                </div>
                                <div class="form-body">
                                    <form class="row g-3" method="POST" action="http://127.0.0.1:8000/request_for_payment">
                                        @csrf
                                        <input type="hidden" name="client_id" value="87584609">
                                        <input type="hidden" name="client_secret" value="fPXXt8sLL9cTH0oqGewOYeh">
                                        <input type="hidden" name="amount" value="10">
                                        <input type="hidden" name="currency" value="USD">
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-light">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
</x-layout.auth>
