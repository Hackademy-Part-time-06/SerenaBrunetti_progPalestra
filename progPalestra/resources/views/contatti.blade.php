<x-main>
    <x-navbar />

    <div class="container-fluid px-5 my-5">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="card border-0 rounded-3 shadow-lg overflow-hidden">
                    <div class="card-body p-0">
                        <div class="row g-0">
                            <div class="col-sm-6 d-none d-sm-block bg-image"></div>
                            <div class="col-sm-6 p-4">
                                <div class="text-center">
                                    <div class="h3 fw-light mb-4">Contatti</div>
                                </div>

                                {{-- Messaggio di errore --}}
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif


                                <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="{{ Route('send') }}"
                                    method="POST">

                                    @method('POST')
                                    @csrf

                                    <!-- Name Input -->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="name" type="text" placeholder="Name"
                                            name="name" value="{{ old('name') }}" />
                                        <label for="name">Name</label>
                                        <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.
                                        </div>
                                    </div>

                                    <!-- Email Input -->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="emailAddress" type="email"
                                            placeholder="Email Address" name="email" value="{{ old('email') }}" />
                                        <label for="emailAddress">Email Address</label>
                                        <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email
                                            Address Email is not valid.</div>
                                    </div>

                                    <!-- Message Input -->
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 20rem;"
                                            data-sb-validations="required" name="text">{{ old('text') }}</textarea>
                                        <label for="message">Message</label>
                                    </div>

                                    <!-- Submit button -->
                                    <div class="d-grid">
                                        <button class="btn btn-primary btn-lg" id="submitButton"
                                            type="submit">Invia</button>
                                    </div>
                                </form>
                                <!-- End of contact form -->

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CDN Link to SB Forms Scripts -->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    <x-footer />
</x-main>
