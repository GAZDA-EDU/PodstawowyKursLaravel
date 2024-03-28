
@extends('layouts.app')

@section('content')
        <!-- Contact Section-->
        <section class="masthead php -vpage-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Dodaj klienta</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Invoice Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <form action="{{ route('customers.store') }}" method="POST" id="contactForm" >
                            {{ csrf_field() }}
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" name="name" type="text" placeholder="Nazwa" data-sb-validations="required" />
                                <label for="name">Nazwa klienta</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Wpisz nazwę klenta.</div>
                            </div>
                            <!-- Data input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="address" name="address" type="text" placeholder="Adres" data-sb-validations="required" />
                                <label for="address">Adres</label>
                                <div class="invalid-feedback" data-sb-feedback="address:required">Wprowadź adres.</div>
                            </div>
                            <!-- Nip input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="nip" name="nip" type="text" placeholder="Numer NIP" data-sb-validations="required" />
                                <label for="nip">NIP</label>
                                <div class="invalid-feedback" data-sb-feedback="nip:required">Wprowadź numer NIP.</div>
                            </div>
                            <!-- Submit invoice-->

                            <!-- Submit Button-->
                            <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Dodaj klieta</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection
