<x-layouts.auth title="{{ $title }}">
    <!-- Content Start -->
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-75">
                <x-templates>
                    <x-templates.row>
                        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-8">
                                <div class="card-header pb-0 text-left bg-transparent">
                                    <h3 class="font-weight-bolder text-info text-gradient">Welcome back</h3>
                                    <p class="mb-0">Enter your email and password to sign in</p>
                                </div>
                                <div class="card-body">
                                    @if (session()->has('message'))
                                        <div class="alert alert-info text-light" role="alert">
                                            {{ session('message') }}
                                        </div>
                                    @endif
                                    <form action="{{ route('auth.signin') }}" method="POST" role="form">
                                        @csrf
                                        <label for="email">Email</label>
                                        <div class="mb-3">
                                            <input type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                id="email" placeholder="Email" aria-label="Email"
                                                aria-describedby="email" value="{{ old('email') }}">
                                            @error('email')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <label for="password">Password</label>
                                        <div class="mb-3">
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" id="password" placeholder="Password"
                                                aria-label="Password" aria-describedby="password">
                                            @error('password')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign
                                                in</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                                    style="background-image:url('/img/curved-images/curved6.jpg')"></div>
                            </div>
                        </div>
                    </x-templates.row>
                </x-templates>
            </div>
        </section>
    </main>
    <!-- Content End -->
</x-layouts.auth>
