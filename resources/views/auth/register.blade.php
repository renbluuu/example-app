<x-authentication>

    <div class="container mt-5">

        <div class="row justify-content-center">

            <div class="col-md-5">

                <div class="card shadow-lg border-0 rounded-4">

                    <div class="card-body p-4">

                        {{-- Title --}}
                        <div class="text-center mb-4">

                            <h2 class="fw-bold">
                                Register
                            </h2>

                            <p class="text-muted">
                                Buat akun baru
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
                        <form action="/register" method="POST">

                            @csrf

                            {{-- Name --}}
                            <div class="mb-3">

                                <label class="form-label">
                                    Nama
                                </label>

                                <input 
                                    type="text"
                                    name="name"
                                    class="form-control"
                                    placeholder="Masukkan nama"
                                    value="{{ old('name') }}"
                                >

                            </div>

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
                            <div class="mb-3">

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

                            {{-- Confirm Password --}}
                            <div class="mb-4">

                                <label class="form-label">
                                    Konfirmasi Password
                                </label>

                                <input 
                                    type="password"
                                    name="password_confirmation"
                                    class="form-control"
                                    placeholder="Konfirmasi password"
                                >

                            </div>

                            {{-- Button --}}
                            <button 
                                type="submit"
                                class="btn btn-primary w-100"
                            >
                                Register
                            </button>

                        </form>

                        {{-- Link Login --}}
                        <div class="text-center mt-3">

                            <small>
                                Sudah punya akun?

                                <a href="/login">
                                    Login
                                </a>
                            </small>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</x-authentication>