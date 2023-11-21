<div class="modal fade" id="edit_personal_details" aria-hidden="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Personal Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('user.update', auth()->user()->id) }}" method="POST">
                    @csrf
                    <div class="row form-row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="name">{{ __("Name") }}</label>
                                <input type="text" class="form-control" name="name" id="name"
                                    value="{{ auth()->user()->name }}" required autocomplete="name" autofocus
                                    placeholder="Name">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="email">{{ __('Email Address')
                                    }}</label>
                                <input type="email" class="form-control" name="email" type="text" placeholder="Email"
                                    value="{{ auth()->user()->email }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="phone">{{ __('Phone')
                                    }}</label>
                                <input type="tel" pattern="(^([+]{1}[8]{2}|0088)?(01){1}[3-9]{1}\d{8})$" maxlength="11"
                                    onkeypress="return /[0-9]/i.test(event.key)" class="form-control phonealert"
                                    id="phone" name="phone" value="{{ auth()->user()->phone }}" required
                                    autocomplete="phone" placeholder="Phone">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="nid">{{ __('Nid')
                                    }}</label>
                                <input type="text" onkeypress="return /[0-9]/i.test(event.key)"
                                    class="form-control phonealert" id="nid" name="nid"
                                    value="{{ auth()->user()->nid }}" required autocomplete="nid" placeholder="Nid">
                                @error('nid')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="col-12">
                            <h5 class="form-title"><span>Address</span></h5>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" value="4663 Agriculture Lane">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" class="form-control" value="Miami">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>State</label>
                                <input type="text" class="form-control" value="Florida">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Zip Code</label>
                                <input type="text" class="form-control" value="22434">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Country</label>
                                <input type="text" class="form-control" value="United States">
                            </div>
                        </div> --}}
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
