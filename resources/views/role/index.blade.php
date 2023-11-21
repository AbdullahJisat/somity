@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <button type="button" data-toggle="modal" href="#createRoleModal"
                    class="btn btn-sm btn-outline-primary active">
                    <i class="fas fa-pencil-alt"></i> Add Role</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="datatable table table-hover table-center mb-0">
                        <thead>
                            <tr>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Slug') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($roles as $role)
                            <tr>
                                <td>{{ $role->name }}</td>
                                <td>{{ $role->slug }}</td>
                                <td>
                                    <div class="actions">
                                        <a data-toggle="modal" href="#edit_invoice_report"
                                            class="btn btn-sm bg-success-light mr-2">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-sm bg-danger-light" data-toggle="modal" href="#delete_modal">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                        <a class="btn btn-sm bg-info-light"
                                            href="{{ route('role.permission', $role->id) }}">
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
@include('role.create')
@endsection
@push('scripts')
<!-- Datatables JS -->
<script src="{{ asset('admin') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('admin') }}/plugins/datatables/datatables.min.js"></script>
@endpush
