<x-layout.auth page_title="Regsiter">
    <div class="wrapper">
        <div class="d-flex align-items-center justify-content-center my-5">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                    <div class="col mx-auto">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="p-4">
                                    <div class="mb-3 text-center">
                                        <img src="assets/images/logo-icon.png" width="60" alt="" />
                                    </div>
                                    <div class="text-center mb-4">
                                        <h5 class="">Alphanetpay</h5>
                                        <p class="mb-0">Please fill the below details to create your account</p>
                                    </div>
                                    <div class="form-body">
                                        <form class="row g-3" method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="col-12">
                                                <label for="name" class="form-label">Username</label>
                                                <input name="name" :value="old('name')" required autofocus
                                                    autocomplete="name" type="text" class="form-control"
                                                    id="name" placeholder="Jhon">
                                                @error('name')
                                                    <span class="text-white">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label for="email" class="form-label">Email Address</label>
                                                <input type="email" class="form-control" id="email"
                                                    placeholder="example@user.com" name="email" :value="old('email')"
                                                    required autocomplete="username">
                                                </div>
                                                @error('email')
                                                    <span class="text-white">{{ $message }}</span>
                                                @enderror
                                            <div class="col-12">
                                                <label for="password" class="form-label">Password</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input type="password" class="form-control border-end-0"
                                                        id="password" class="block mt-1 w-full" type="password"
                                                        name="password" required autocomplete="new-password"> <a
                                                        href="javascript:;" class="input-group-text bg-transparent"><i
                                                            class='bx bx-hide'></i></a>
                                                        </div>
                                                        @error('password')
                                                            <span class="text-white">{{ $message }}</span>
                                                        @enderror
                                            </div>
                                            <div class="col-12">
                                                <label for="password_confirmation" class="form-label">Password</label>
                                                <div class="input-group">
                                                    <input type="password" class="form-control border-end-0"
                                                        id="password_confirmation" class="block mt-1 w-full"
                                                        type="password" name="password_confirmation" required
                                                        autocomplete="new-password">
                                                    </div>
                                                    @error('password_confirmation')
                                                        <span class="text-white">{{ $message }}</span>
                                                    @enderror
                                            </div>

                                            <div class="col-12">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckChecked">
                                                    <label class="form-check-label" for="flexSwitchCheckChecked">I read
                                                        and agree to Terms & Conditions</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-light">Sign up</button>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="text-center ">
                                                    <p class="mb-0">Already have an account? <a
                                                            href="{{ route('login') }}">Sign in here</a></p>
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
    </div>
</x-layout.auth>
