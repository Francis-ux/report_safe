@extends('dashboard.admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ @$title }}</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-flag"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Abuse Report</h4>
                        </div>
                        <div class="card-body">
                            {{ @$totalAbuseReportCount }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="fas fa-fist-raised"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Physical Abuse Report</h4>
                        </div>
                        <div class="card-body">
                            {{ @$totalPhysicalAbuseReportCount }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="fas fa-heartbroken"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Emotional Abuse Report</h4>
                        </div>
                        <div class="card-body">
                            {{ @$totalEmotionalAbuseReportCount }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Sexual Abuse Report</h4>
                        </div>
                        <div class="card-body">
                            {{ @$totalSexualAbuseReportCount }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-baby"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Neglect Abuse Report</h4>
                        </div>
                        <div class="card-body">
                            {{ @$totalNeglectAbuseReportCount }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
