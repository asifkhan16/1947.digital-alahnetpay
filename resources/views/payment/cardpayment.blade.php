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
                                    <form class="row g-3" method="POST" action="http://127.0.0.1:8000/pay">
                                        @csrf
                                        <input type="hidden" name="store_name" value="">
                                        <input type="hidden" name="client_id" value="">
                                        <input type="hidden" name="client_secret" value="">
                                        <div class="col-12">
                                            <label for="card_number" class="form-label">Card Number</label>
                                            <input type="text" class="form-control" name="card_number" :value={{ old('card_number') }} id="card_number" placeholder="0123456789">
                                            @error('card_number'    )
                                                <span class="text-white">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="csv" class="form-label">CSV</label>
                                            <input type="text" class="form-control" name="csv" :value={{ old('csv') }} id="csv" placeholder="123">
                                            @error('csv')
                                                <span class="text-white">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="expiry_date" class="form-label">Expiry Date</label>
                                            <input type="date" class="form-control" name="expiry_date" :value={{ old('expiry_date') }} id="expiry_date" placeholder="123">
                                            @error('expiry_date')
                                                <span class="text-white">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-light">Submit</button>
                                            </div>
                                        </div>
                                        <!--<div class="col-12">
                                            <div class="text-center ">
                                                <p class="mb-0">Don't have an account yet? <a href="auth-basic-signup.html">Sign up here</a>
                                                </p>
                                            </div>
                                        </div> -->
                                    </form>
                                </div>
                                <!-- <div class="login-separater text-center mb-5"> <span>OR SIGN IN WITH</span>
                                    <hr/>
                                </div>
                                <div class="list-inline contacts-social text-center">
                                    <a href="javascript:;" class="list-inline-item bg-light text-white border-0 rounded-3"><i class="bx bxl-facebook"></i></a>
                                    <a href="javascript:;" class="list-inline-item bg-light text-white border-0 rounded-3"><i class="bx bxl-twitter"></i></a>
                                    <a href="javascript:;" class="list-inline-item bg-light text-white border-0 rounded-3"><i class="bx bxl-google"></i></a>
                                    <a href="javascript:;" class="list-inline-item bg-light text-white border-0 rounded-3"><i class="bx bxl-linkedin"></i></a>
                                </div> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
</x-layout.auth>
