<div class="modal fade" id="createTransactionModal" aria-hidden="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Transactions</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('transaction.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row form-row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_id">{{ __('User') }}</label>
                                <select name="user_id" id="user_id" class="select">
                                    {!! userList() !!}
                                </select>
                                @error('user_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <label for="amount">{{ __('Amount') }}</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="text" class="form-control" name="amount" id="amount">
                                <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                </div>
                                @error('amount')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>{{ __('Payment Method') }}</label>
                                <select name="payment_method" id="payment_method" class="select">
                                    {!! paymentMethodList() !!}
                                </select>
                                @error('payment_method')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>{{ __('Type') }}</label>
                                <div class="status-toggle"
                                    style="display: flex;justify-content: space-evenly;padding-top: 5px;border: 1px solid #ddd;border-radius: 5px;">
                                    <label for="">Deposit</label>
                                    <input type="radio" id="type" checked name="type" value="1">
                                    {{-- <label for="type" class="checktoggle"></label> --}}
                                    <label for="">Withdraw</label>
                                    <input type="radio" id="type" name="type" value="2">
                                </div>
                                @error('type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>{{ __('Attachment') }}</label>
                                <input type="file" class="form-control" name="attachment" id="attachment">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6" id="reference_div" style="display: none;">
                            <div class="form-group">
                                <label>{{ __('Reference') }}</label>
                                <input type="text" class="form-control" id="reference" name="reference">
                                @error('reference')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div id="credit_div" class="row" style="display: none">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>{{ __('Card Number') }}</label>
                                    <input type="text" class="form-control" id="cc_number" name="cc_number">
                                    @error('cc_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>{{ __('Card Type') }}</label>
                                    <input type="text" class="form-control" id="cc_type" name="cc_type">
                                    @error('cc_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group">
                                    <label>{{ __('Expiry Month') }}</label>
                                    <input type="text" class="form-control" id="cc_month" name="cc_month">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group">
                                    <label>{{ __('Expiry Year') }}</label>
                                    <input type="text" class="form-control" id="cc_month" name="cc_month">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group">
                                    <label>{{ __('CVC Code') }}</label>
                                    <input type="text" class="form-control" id="cvc" name="cvc">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
