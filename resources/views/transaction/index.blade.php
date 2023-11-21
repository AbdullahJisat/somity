@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="display: flex; justify-content: space-between;">
                {{-- <h4 class="card-title">Bottom line tabs</h4> --}}
                <button type="button" data-toggle="modal" href="#createTransactionModal"
                    class="btn btn-sm btn-outline-primary active">
                    <i class="fas fa-pencil-alt"></i> Add Transaction</button>
            </div>
            <div class="card-body">
                <ul class="nav nav-tabs nav-tabs-bottom">
                    <li class="nav-item"><a class="nav-link active" href="#deposit" data-toggle="tab">Deposit</a></li>
                    <li class="nav-item"><a class="nav-link" href="#withdraw" data-toggle="tab">Withdraw</a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane show active" id="deposit">
                        @include('transaction.deposit')
                    </div>
                    <div class="tab-pane" id="withdraw">
                        @include('transaction.withdraw')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Create Details Modal -->
@include('transaction.create')
<!-- /Create Details Modal -->
<!-- Edit Details Modal -->
@include('transaction.edit')
<!-- /Edit Details Modal -->
<!-- Delete Modal -->
@include('transaction.delete')
<!-- /Delete Modal -->
@endsection
@push('scripts')
<!-- Datatables JS -->
<script src="{{ asset('admin') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('admin') }}/plugins/datatables/datatables.min.js"></script>
<!-- Select2 JS -->
<script src="{{ asset('admin') }}/js/select2.min.js"></script>

<script>
    // reference show by payment method
        $('#payment_method').change(function() {
            if (this.value !== "2") {
                $('#reference_div').css('display', 'block');
                $('#credit_div').css('display', 'none');
            } else if (this.value !== "0") {
                $('#reference_div').css('display', 'none');
                $('#credit_div').css('display', 'flex');
            } else {
                $('#reference_div').css('display', 'none');
                $('#credit_div').css('display', 'none');
            }
        });

        // edit transaction by id
        $('.editTransaction').click(function () {
            var id = $(this).data('id');
            var url = "{{ route('transaction.edit', ":id") }}";
            url = url.replace(':id', id);
            var modal = $("#editTransactionModal"); //your modal
            $.get(url)
            .then(function(response) {
            console.log(response);
            modal.find('#id').val(id);
            modal.find('#user_id option:selected').val(response.user_id);
            modal.find('#amount').val(response.amount);
            modal.find('#payment_method').val(response.payment_method);
            modal.find('#type').val(response.type);
            modal.find('#reference').val(response.reference);
            modal.find('#cc_number').val(response.cc_number);
            // $('#editTransactionModal').modal('show');
            })
            .catch(function(error) {
            console.log(error);
            });
        });
</script>
@endpush
