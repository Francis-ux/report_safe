@extends('dashboard.admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ $title }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">{{ $title }}</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    @include('partials.sweet_alert')
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ $title }}</h4>
                            <div class="card-header-action">
                                <a href="{{ route('admin.report.index') }}" class="btn btn-primary">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <dl class="row">
                                {{-- Reporter Info --}}
                                <dt class="col-md-3">Anonymous?</dt>
                                <dd class="col-md-9">
                                    @if ($report->anonymous)
                                        <span class="badge badge-warning">Yes</span>
                                    @else
                                        <span class="badge badge-info">No</span>
                                    @endif
                                </dd>

                                @if (!$report->anonymous)
                                    <dt class="col-md-3">Reporter Name</dt>
                                    <dd class="col-md-9">{{ $report->reporter_name ?? 'N/A' }}</dd>

                                    <dt class="col-md-3">Reporter Email</dt>
                                    <dd class="col-md-9">{{ $report->reporter_email ?? 'N/A' }}</dd>

                                    <dt class="col-md-3">Reporter Phone</dt>
                                    <dd class="col-md-9">{{ $report->reporter_phone ?? 'N/A' }}</dd>
                                @endif

                                {{-- Victim Info --}}
                                <dt class="col-md-3">Victim Name</dt>
                                <dd class="col-md-9">{{ $report->victim_name }}</dd>

                                <dt class="col-md-3">Victim Age</dt>
                                <dd class="col-md-9">{{ $report->victim_age }} years</dd>

                                <dt class="col-md-3">Victim Address</dt>
                                <dd class="col-md-9">{{ $report->victim_address }}</dd>

                                {{-- Abuse Info --}}
                                <dt class="col-md-3">Abuse Type</dt>
                                <dd class="col-md-9">{{ ucfirst($report->abuse_type) }}</dd>

                                <dt class="col-md-3">Description</dt>
                                <dd class="col-md-9">
                                    <p>{{ $report->incident_description }}</p>
                                </dd>

                                <dt class="col-md-3">Date & Time</dt>
                                <dd class="col-md-9">
                                    {{ $report->datetime ? formatDateTime($report->datetime) : 'N/A' }}</dd>

                                <dt class="col-md-3">Evidence</dt>
                                <dd class="col-md-9">
                                    @if ($report->evidence)
                                        <a href="{{ asset($report->evidence) }}" target="_blank"
                                            class="btn btn-sm btn-outline-info">
                                            <i class="fa fa-file"></i> View Evidence
                                        </a>
                                    @else
                                        No evidence provided.
                                    @endif
                                </dd>

                                <dt class="col-md-3">Status</dt>
                                <dd class="col-md-9">
                                    @if ($report->status == 'Open')
                                        <span class="badge badge-success">Open</span>
                                    @elseif ($report->status == 'In Review')
                                        <span class="badge badge-warning">In Review</span>
                                    @elseif ($report->status == 'Resolved')
                                        <span class="badge badge-info">Resolved</span>
                                    @else
                                        <span class="badge badge-danger">Closed</span>
                                    @endif
                                </dd>
                            </dl>

                            <form action="{{ route('admin.report.update', $report->uuid) }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        @foreach ($reportStatuses as $status)
                                            <option value="{{ $status->value }}" @selected($report->status === $status->value)>
                                                {{ $status->value }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <button class="btn btn-primary" type="submit">Update</button>
                            </form>

                        </div>

                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>
@endsection
