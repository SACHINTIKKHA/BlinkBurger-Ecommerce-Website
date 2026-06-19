@extends('layout')

@section('main')

<form action="payment" method="post">
    @csrf

    <div class="container py-5">
        <div class="row g-4 align-items-stretch">

            <!-- Left Side Image -->
            <div class="col-lg-6">
                <div class="h-100">
                    <img src="{{ asset('img/payment.png') }}"
                         class="w-100 h-100 rounded shadow"
                         
                         alt="Payment Banner">
                </div>
            </div>

            <!-- Right Side Payment Form -->
            <div class="col-lg-6">
                <div class="card shadow border-0 p-4 h-100">

                    <h2 class="text-center fw-bold mb-4">
                        Complete Your Payment
                    </h2>

                    <!-- QR Code -->
                    <div class="text-center mb-4">
                        <img src="{{ asset('img/qr.jpg') }}"
                             class="img-fluid border rounded p-2"
                             style="max-height:200px;"
                             alt="QR Code">
                    </div>

                    <!-- Payment Fields -->
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Bank Name</label>
                        <input type="text"
                               name="bank_name"
                               class="form-control"
                               placeholder="STATE BANK OF INDIA"
                               disabled>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Account Number</label>
                        <input type="text"
                               name="account_number"
                               class="form-control"
                               placeholder="SBI001122334455"
                                disabled>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Branch Name</label>
                        <input type="text"
                               name="branch"
                               class="form-control"
                               placeholder="SBI0011001"
                               disabled>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-semibold">UTR Number</label>
                        <input type="text"
                               name="utr"
                               class="form-control"
                               placeholder="Enter UTR Number"
                               required>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                            class="btn btn-success w-100 py-3 fw-bold">
                        Confirm Payment
                    </button>

                </div>
            </div>

        </div>
    </div>

</form>

@endsection