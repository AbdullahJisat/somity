@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="profile-header">
            <div class="row align-items-center">
                <div class="col-auto profile-image">
                    <a href="#">
                        <img class="rounded-circle" alt="User Image"
                            src="{{ asset('assets/images/user/'.auth()->user()->image) }}">
                    </a>
                </div>
                <div class="col ml-md-n2 profile-user-info">
                    <h4 class="user-name mb-0">{{ auth()->user()->name }}</h4>
                    <h6 class="text-muted"><a
                            href="https://mentoring-laravel.dreamguystech.com/cdn-cgi/l/email-protection"
                            class="__cf_email__"
                            data-cfemail="9bfaf7f7fef5fffaedf2e8dbfafff6f2f5b5f8f4f6">[email&#160;protected]</a>
                    </h6>
                    <div class="pb-3"><i class="fa fa-map-marker"></i> {{ auth()->user()->address ?? "" }}</div>
                </div>
                <div class="col-auto profile-btn">
                </div>
            </div>
        </div>
        <div class="profile-menu">
            <ul class="nav nav-tabs nav-tabs-solid">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#per_details_tab">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#password_tab">Password</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#permissions_tab">Permissions</a>
                </li>
            </ul>
        </div>
        <div class="tab-content profile-tab-cont">

            <div class="tab-pane fade show active" id="per_details_tab">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-between">
                                    <span>Personal Details</span>
                                    <a class="edit-link" data-toggle="modal" href="#edit_personal_details"><i
                                            class="fa fa-edit mr-1"></i>Edit</a>
                                </h5>
                                <div class="row">
                                    <p class="col-sm-2 text-muted mb-0 mb-sm-3">Name</p>
                                    <p class="col-sm-10">{{ auth()->user()->name }}</p>
                                </div>
                                <div class="row">
                                    <p class="col-sm-2 text-muted mb-0 mb-sm-3">Date of Birth</p>
                                    <p class="col-sm-10">24 Jul 1983</p>
                                </div>
                                <div class="row">
                                    <p class="col-sm-2 text-muted mb-0 mb-sm-3">Email ID</p>
                                    <p class="col-sm-10">{{ auth()->user()->email }}</p>
                                </div>
                                <div class="row">
                                    <p class="col-sm-2 text-muted mb-0 mb-sm-3">Mobile</p>
                                    <p class="col-sm-10">{{ maskedPhone(auth()->user()->phone) }}</p>
                                </div>
                                <div class="row">
                                    <p class="col-sm-2 text-muted mb-0">Address</p>
                                    <p class="col-sm-10 mb-0">{{ auth()->user()->name }},<br>
                                        Miami,<br>
                                        Florida - 33165,<br>
                                        United States.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div id="password_tab" class="tab-pane fade">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ __('Reset Password') }}</h5>
                        <div class="row">
                            <div class="col-md-10 col-lg-6">
                                <form method="POST" action="{{ route('user.reset_password') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="password">{{ __('Old Password') }}</label>
                                        <input type="password" class="form-control" name="password" id="password"
                                            required autocomplete="password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="new_password">{{ __('New Password') }}</label>
                                        <input type="password" class="form-control" name="new_password"
                                            id="new_password" required autocomplete="new_password" />
                                        @error('new_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password">{{ __('Confirm Password') }}</label>
                                        <input type="password" class="form-control" id="password-confirm"
                                            name="password_confirmation" required autocomplete="new_password" />
                                    </div>
                                    <button class="btn btn-primary" type="submit">Save Changes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="permissions_tab" class="tab-pane fade">
                <div class="table-responsive">
                    <table class="datatable table table-hover table-center mb-0">
                        <thead>
                            <tr>
                                <th>{{ __('Name') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse (auth()->user()->permissions as $permission)
                            <tr>
                                <td>{{ $permission->name }}</td>
                            </tr>

                            @empty

                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

@include('user.edit')
@endsection
@push('scripts')
<!-- Datatables JS -->
<script src="{{ asset('admin') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('admin') }}/plugins/datatables/datatables.min.js"></script>
@endpush
