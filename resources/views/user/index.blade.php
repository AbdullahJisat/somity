@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">

        <!-- Recent Orders -->
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="datatable table table-hover table-center mb-0">
                        <thead>
                            <tr>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Email') }}</th>
                                <th>{{ __('Phone') }}</th>
                                <th>{{ __('Nid') }}</th>
                                <th>{{ __('Role') }}</th>
                                <th>{{ __('Status') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                            <tr>
                                <td>
                                    <h2 class="table-avatar">
                                        <a href="{{ route('user.show', $user->id) }}" class="avatar avatar-sm mr-2"><img
                                                class="avatar-img rounded-circle"
                                                src="{{ @!empty($user->image) ? asset('admin/img/profiles/avatar-08.jpg') : asset('assets/images/user/'.auth()->user()->image) }}"
                                                alt="User Image"></a>
                                        <a href="profile.html">{{ $user->name }}</a>
                                    </h2>
                                </td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ maskedPhone($user->nid) }}</td>
                                <td>@foreach ($user->roles as $role)
                                    <li>{{ $role->name }}</li>
                                    @endforeach
                                </td>
                                <td>
                                    <div class="status-toggle">
                                        <input type="checkbox" id="status_1" class="check" checked>
                                        <label for="status_1" class="checktoggle">checkbox</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="actions">
                                        <a data-toggle="modal" href="#edit_invoice_report"
                                            class="btn btn-sm bg-success-light mr-2">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-sm bg-danger-light" data-toggle="modal" href="#delete_modal">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                        <a class="btn btn-sm bg-info-light" data-toggle="modal" href="#delete_modal">
                                            <i class="far fa-money"></i>M
                                        </a>
                                    </div>
                                </td>
                            </tr>

                            @empty

                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /Recent Orders -->

    </div>
</div>
@endsection
@push('scripts')
<!-- Datatables JS -->
<script src="{{ asset('admin') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('admin') }}/plugins/datatables/datatables.min.js"></script>
@endpush
