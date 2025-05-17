@extends('dashboard.admin.layout.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ @$title }}</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-user-times"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Abuse Reports</h4>
                        </div>
                        <div class="card-body">
                            {{ @$totalReportCount }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="fas fa-hand-paper"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Physical Abuse</h4>
                        </div>
                        <div class="card-body">
                            {{ @$physicalAbuseCount }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                       <i class="fa fa-heart-break"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Emotional Abuse</h4>
                        </div>
                        <div class="card-body">
                            {{ @$emotionalAbuseCount }}
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
                            <h4>Total Sexual Abuse</h4>
                        </div>
                        <div class="card-body">
                            {{ @$sexualAbuseCount }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-ship"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Neglect Abuse</h4>
                        </div>
                        <div class="card-body">
                            {{ @$neglectAbuseCount }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
