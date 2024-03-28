
@extends('layouts.app')

@section('content')
        <!-- Contact Section-->
        <section class="masthead php -vpage-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Edytujesz klienta {{ $customer->id }}</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Invoice Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <form action="{{ route('customers.update', ['klienci' => $customer->id]) }}" method="POST" id="contactForm" >
                            {{ csrf_field() }}
                            @method('PUT')
                            <!-- Number input-->
                            <div class="form-floating mb-3">
                                <input value="{{ $customer->name }}" class="form-control" id="name" name="name" type="text" placeholder="Nazwa klienta" data-sb-validations="required" />
                                <label for="name">Nazwę klienta</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Wpisz nazwę klienta.</div>
                            </div>
                            <!-- Data input-->
                            <div class="form-floating mb-3">
                                <input value="{{ $customer->address }}" class="form-control" id="address" name="address" type="text" placeholder="Adres" data-sb-validations="required" />
                                <label for="address">Adres klienta</label>
                                <div class="invalid-feedback" data-sb-feedback="address:required">Wprowadź adres.</div>
                            </div>
                            <!-- Total input-->
                            <div class="form-floating mb-3">
                                <input value="{{ $customer->nip }}" class="form-control" id="nip" name="nip" type="text" placeholder="Numer NIP" data-sb-validations="required" />
                                <label for="nip">NIP</label>
                                <div class="invalid-feedback" data-sb-feedback="nip:required">Wprowadź NIP.</div>
                            </div>
                            <!-- Submit invoice-->

                            <!-- Submit Button-->
                            <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Zapisz dane klienta</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection
