<x-authentication>

    <div class="container mt-5">

        <div class="row justify-content-center">

            <div class="col-md-5">

                <div class="card shadow-lg border-0 rounded-4">

                    <div class="card-body p-4">

                        {{-- Title --}}
                        <div class="text-center mb-4">

                            <h2 class="fw-bold">
                                Login
                            </h2>

                            <p class="text-muted">
                                Silahkan login ke akun Anda
                            </p>

                        </div>

                        {{-- Error Validation --}}
                        @if ($errors->any())

                            <div class="alert alert-danger">

                                <ul class="mb-0">

                                    @foreach ($errors->all() as $error)

                                        <li>{{ $error }}</li>

                                    @endforeach

                                </ul>

                            </div>

                        @endif

                        {{-- Form --}}
                        <form action="/login" method="POST">

                            @csrf

                            {{-- Email --}}
                            <div class="mb-3">

                                <label class="form-label">
                                    Email
                                </label>

                                <input 
                                    type="email"
                                    name="email"
                                    class="form-control"
                                    placeholder="Masukkan email"
                                    value="{{ old('email') }}"
                                >

                            </div>

                            {{-- Password --}}
                            <div class="mb-4">

                                <label class="form-label">
                                    Password
                                </label>

                                <input 
                                    type="password"
                                    name="password"
                                    class="form-control"
                                    placeholder="Masukkan password"
                                >

                            </div>

                            {{-- Button --}}
                            <button 
                                type="submit"
                                class="btn btn-success w-100"
                            >
                                Login
                            </button>

                        </form>

                        {{-- Link Register --}}
                        <div class="text-center mt-3">

                            <small>
                                Belum punya akun?

                                <a href="/register">
                                    Register
                                </a>
                            </small>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</x-authentication>