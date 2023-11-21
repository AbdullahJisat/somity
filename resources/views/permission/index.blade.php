@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <button type="button" data-toggle="modal" href="#createPermissionModal"
                    class="btn btn-sm btn-outline-primary active">
                    <i class="fas fa-pencil-alt"></i> Add Permission</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="datatable table table-hover table-center mb-0">
                        <thead>
                            <tr>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Slug') }}</th>
                                <th>{{ __('Assigned To') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($permissions as $permission)
                            <tr>
                                <td>{{ $permission->name }}</td>
                                <td>{{ $permission->slug }}</td>
                                <td>@foreach($permission->roles as $role)
                                    <a href="#"><span class="badge  bg-label-primary m-1">{{ $role->name }}</span></a>@endforeach</td>
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
@include('permission\create')
@endsection
@push('scripts')
<!-- Datatables JS -->
<script src="{{ asset('admin') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('admin') }}/plugins/datatables/datatables.min.js"></script>
@endpush
