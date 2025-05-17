@extends('layouts.master')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 py-5">
        <div class="container">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Report Abuse</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Report Abuse</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Report Abuse Start -->
    <div class="container-xxl py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                @include('partials.bootstrap_alert')
                @include('partials.validation_message')
                <div class="card shadow-lg border-0">
                    <div class="card-header bg-primary text-white text-center">
                        <h4 class="mb-0">Child Abuse Reporting Form</h4>
                        <small>Your information will be kept confidential</small>
                    </div>
                    <div class="card-body p-4">
                        <form method="POST" action="{{ route('report.abuse.store') }}" enctype="multipart/form-data">
                            @csrf

                            <!-- Reporter Info -->
                            <h5 class="mb-3">Reporter Information</h5>

                            <div class="form-check form-switch mb-3">
                                <input class="form-check-input" type="checkbox" id="anonymousSwitch" name="anonymous"
                                    checked>
                                <label class="form-check-label" for="anonymousSwitch">Report anonymously</label>
                            </div>

                            <div class="row g-3 reporter-fields">
                                <div class="col-md-6">
                                    <label for="reporter_name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="reporter_name" name="reporter_name"
                                        value="{{ old('reporter_name') }}" placeholder="Optional if anonymous">
                                </div>
                                <div class="col-md-6">
                                    <label for="reporter_email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="reporter_email" name="reporter_email"
                                        value="{{ old('reporter_email') }}" placeholder="Optional if anonymous">
                                </div>
                                <div class="col-md-12">
                                    <label for="reporter_phone" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" id="reporter_phone" name="reporter_phone"
                                        value="{{ old('reporter_phone') }}" placeholder="Optional if anonymous">
                                </div>
                            </div>

                            <hr class="my-4">

                            <!-- Victim Info -->
                            <h5 class="mb-3">Victim Information</h5>

                            <div class="mb-3">
                                <label for="victim_name" class="form-label">Victim's Name (if known)</label>
                                <input type="text" class="form-control" id="victim_name" name="victim_name"
                                    value="{{ old('victim_name') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="victim_age" class="form-label">Victim's Age</label>
                                <input type="number" class="form-control" id="victim_age" name="victim_age"
                                    value="{{ old('victim_age') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="victim_address" class="form-label">Victim's Address or Location</label>
                                <textarea class="form-control" id="victim_address" name="victim_address" rows="2" required>{{ old('victim_address') }}</textarea>
                            </div>

                            <hr class="my-4">

                            <!-- Abuse Details -->
                            <h5 class="mb-3">Abuse Details</h5>

                            <div class="mb-3">
                                <label for="abuse_type" class="form-label">Type of Abuse</label>
                                <select class="form-select" id="abuse_type" name="abuse_type" required>
                                    <option selected disabled>Select type</option>
                                    <option value="physical" @selected(old('abuse_type') == 'physical')>Physical</option>
                                    <option value="emotional" @selected(old('abuse_type') == 'emotional')>Emotional</option>
                                    <option value="sexual" @selected(old('abuse_type') == 'sexual')>Sexual</option>
                                    <option value="neglect" @selected(old('abuse_type') == 'neglect')>Neglect</option>
                                    <option value="other" @selected(old('abuse_type') == 'other')>Other</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="incident_description" class="form-label">Description of Incident</label>
                                <textarea class="form-control" id="incident_description" name="incident_description" rows="4" required>{{ old('incident_description') }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="datetime" class="form-label">Date and Time of Incident</label>
                                <input type="datetime-local" class="form-control" id="datetime" name="datetime"
                                    value="{{ old('datetime') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="evidence" class="form-label">Upload Evidence (if any)</label>
                                <input type="file" class="form-control" id="evidence" name="evidence">
                            </div>

                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary btn-lg">Submit Report</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center text-muted small">
                        In case of emergency, call <strong>{{ env('APP_PHONE') }}</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Report Abuse End -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const anonymousSwitch = document.getElementById('anonymousSwitch');
            const reporterFields = document.querySelectorAll('.reporter-fields input');

            function toggleFields() {
                reporterFields.forEach(field => {
                    field.disabled = anonymousSwitch.checked;
                });
            }

            anonymousSwitch.addEventListener('change', toggleFields);
            toggleFields(); // Run on page load
        });
    </script>
@endsection
