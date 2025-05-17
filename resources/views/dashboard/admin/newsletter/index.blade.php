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
                    @include('partials.validation_message')
                    @include('partials.sweet_alert')
                    <div class="card">
                        <div class="card-header">
                            <h4>Send email to all subscribers</h4>
                        </div>

                        <div class="card-body">
                            <form action="{{ route('admin.newsletter.send.email') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input type="text" name="subject" id="subject" class="form-control"
                                        value="{{ old('subject') }}">
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea class="form-control summernote" name="message" id="message">{{ old('message') }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Send</button>
                            </form>
                        </div>

                    </div>
                </div>
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
                                            <th>
                                                #
                                            </th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($newsletters as $newsletter)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $newsletter->email }}</td>
                                                <td>
                                                    @if ($newsletter->status == 1)
                                                        <span class="badge badge-success">Active</span>
                                                    @else
                                                        <span class="badge badge-danger">Inactive</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="" class='btn btn-danger m-1'><i
                                                            class='fa fa-trash'></i></a>

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
