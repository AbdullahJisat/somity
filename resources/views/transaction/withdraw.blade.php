<div class="table-responsive">
    <table class="datatable table table-hover table-center mb-0">
        <thead>
            <tr>
                <th>{{ __('User') }}</th>
                <th>{{ __('Amount') }}</th>
                <th>{{ __('Payment Method') }}</th>
                <th>{{ __('Reference') }}</th>
                <th>{{ __('Attachment') }}</th>
                <th>{{ __('Recieved By') }}</th>
                <th class="text-center">Status</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($withdrawTransactions as $withdraw)
            <tr>
                <td>{{ $withdraw->user->name }}</td>
                <td>${{ $withdraw->amount }}/-</td>
                <td>{{ $withdraw->payment_method }}</td>
                <td>{{ $withdraw->reference }}</td>
                <td>
                    <img class="avatar avatar-img rounded-circle"
                        src="{{ @!empty($user->image) ? asset('admin/img/profiles/avatar-08.jpg') : asset('assets/images/user/'.auth()->user()->image) }}"
                        alt="User Image">
                </td>
                <td>{{ auth()->user()->name }}</td>
                <td class="text-center">
                    <span class="badge badge-pill bg-success inv-badge">Paid</span>
                </td>
                <td class="text-right">
                    <div class="actions">
                        <a data-toggle="modal" href="#editTransactionModal" data-id="{{ $withdraw->id }}"
                            class="btn btn-sm bg-success-light mr-2 editTransaction">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <a class="btn btn-sm bg-danger-light" data-toggle="modal" href="#deleteTransactionModal">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @empty

            @endforelse
        </tbody>
    </table>
</div>
