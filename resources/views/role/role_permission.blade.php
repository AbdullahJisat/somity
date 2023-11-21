@extends('layouts.app')
@section('content')
<div class="row">
    {{-- @dd($role->permissions()->pluck('permission_id')->toArray()) --}}

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{ $role->name }}</h4>
            </div>
            <form action="{{ route('role.store_permission', $role->id) }}" method="POST">
                @csrf
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
                                @forelse ($permissions as $permission)
                                <tr>
                                    <td>{{ $permission->name }}</td>
                                    <td>{{ $permission->slug }}</td>
                                    <td>
                                        <div class="checkbox">
                                            <input type="checkbox" name="permission_id[]" value="{{ $permission->id }}"
                                                {{ in_array($permission->id,
                                            $role->permissions()->pluck('permission_id')->toArray()) ? 'checked' : ''
                                            }}>
                                        </div>
                                    </td>
                                </tr>

                                @empty

                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
            </form>
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
