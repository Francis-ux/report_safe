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
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Victim Name</th>
                                            <th>Abuse Type</th>
                                            <th>Date & Time</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($reports as $report)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $report->victim_name }}</td>
                                                <td>
                                                    {{ ucwords($report->abuse_type) }}
                                                </td>
                                                <td>{{ formatDateTime($report->datetime) }}</td>
                                                <td>
                                                    @if ($report->status == 'Open')
                                                        <span class="badge badge-success">Open</span>
                                                    @elseif ($report->status == 'In Review')
                                                        <span class="badge badge-warning">In Review</span>
                                                    @elseif ($report->status == 'Resolved')
                                                        <span class="badge badge-info">Resolved</span>
                                                    @else
                                                        <span class="badge badge-danger">Closed</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.report.action', $report->uuid) }}"
                                                        class='btn btn-info m-1'><i class='fa fa-cogs'></i></a>
                                                    <a href="{{ route('admin.report.show', $report->uuid) }}"
                                                        class='btn btn-warning m-1'><i class='fa fa-eye'></i></a>
                                                    <a href="{{ route('admin.report.edit', $report->uuid) }}"
                                                        class='btn btn-primary m-1'><i class='fa fa-edit'></i></a>
                                                    <a href="{{ route('admin.report.delete', $report->uuid) }}"
                                                        class='btn btn-danger m-1'><i class='fa fa-trash'></i></a>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
