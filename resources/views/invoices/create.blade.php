@extends('layouts.app')

@section('content')
<!-- Contact Section-->
<section class="masthead php -vpage-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Dodaj fakturę</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- Invoice Section Form-->
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <form action="{{ route('invoices.store') }}" method="POST" id="contactForm">
                    {{ csrf_field() }}
                    <select name = "customer" class="form-select" aria-label="Default select example">
                        <option selected>Wybierz klienta...</option>
                        @foreach (App\Models\Customer::all() as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    <!-- Number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="number" name="number" type="text" placeholder="Numer faktury" data-sb-validations="required" />
                        <label for="name">Numer faktury</label>
                        <div class="invalid-feedback" data-sb-feedback="number:required">Wpisz numer faktury.</div>
                    </div>
                    <!-- Data input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="date" name="date" type="text" placeholder="Data wystawienia" data-sb-validations="required" />
                        <label for="date">Data wystawienia</label>
                        <div class="invalid-feedback" data-sb-feedback="date:required">Wprowadź datę.</div>
                    </div>
                    <!-- Total input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="total" name="total" type="text" placeholder="Kwota faktury" data-sb-validations="required" />
                        <label for="total">Kwota</label>
                        <div class="invalid-feedback" data-sb-feedback="total:required">Wprowadź kwotę.</div>
                    </div>
                    <!-- Submit invoice-->

                    <!-- Submit Button-->
                    <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Dodaj fakturę</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
