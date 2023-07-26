@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        {!! Form::hidden('role','customer',['id'=>'role','class'=>'form-control']) !!}
                        <div class="form-group row">
                            <label for="first_name" class="col-lg-4 col-md-4 col-sm-12 col-form-label text-md-right">{{ __('First Name') }}</label>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="last_name" class="col-lg-4 col-md-4 col-sm-12 col-form-label text-md-right">{{ __('Last Name') }}</label>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="company" class="col-lg-4 col-md-4 col-sm-12 col-form-label text-md-right">{{ __('Company (Optional)') }}</label>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input id="company" type="text" class="form-control @error('company') is-invalid @enderror" name="company" value="{{ old('company') }}" autocomplete="company" autofocus>
                                @error('company')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address1" class="col-lg-4 col-md-4 col-sm-12 col-form-label text-md-right">{{ __('Address 1') }}</label>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input id="address1" type="text" class="form-control @error('address1') is-invalid @enderror" name="address1" value="{{ old('address1') }}" autocomplete="address1" autofocus>
                                @error('address1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address2" class="col-lg-4 col-md-4 col-sm-12 col-form-label text-md-right">{{ __('Address 2 (Optional)') }}</label>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input id="address2" type="text" class="form-control @error('address2') is-invalid @enderror" name="address2" value="{{ old('address2') }}" autocomplete="address2" autofocus>
                                @error('address2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="country" class="col-lg-4 col-md-4 col-sm-12 col-form-label text-md-right">{{ __('Country') }}</label>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <select name="country" id="country" class="form-control @error('country') is-invalid @enderror">
                                    <option value="Pakistan" selected>Pakistan</option>
                                </select>
                                {{-- <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="Pakistan" autocomplete="country" autofocus> --}}
                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="province" class="col-lg-4 col-md-4 col-sm-12 col-form-label text-md-right">{{ __('Province') }}</label>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input id="province" type="text" class="form-control @error('province') is-invalid @enderror" name="province" value="{{ old('province') }}" autocomplete="province" autofocus>
                                @error('province')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="city" class="col-lg-4 col-md-4 col-sm-12 col-form-label text-md-right">{{ __('City') }}</label>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" autocomplete="city" autofocus>
                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="zipcode" class="col-lg-4 col-md-4 col-sm-12 col-form-label text-md-right">{{ __('Zip Code') }}</label>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input id="zipcode" type="text" class="form-control @error('zipcode') is-invalid @enderror" name="zipcode" value="{{ old('zipcode') }}" autocomplete="zipcode" autofocus>
                                @error('zipcode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone1" class="col-lg-4 col-md-4 col-sm-12 col-form-label text-md-right">{{ __('Phone 1') }}</label>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input id="phone1" type="text" class="form-control @error('phone1') is-invalid @enderror" name="phone1" value="{{ old('phone1') }}" autocomplete="phone1" autofocus>
                                @error('phone1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone2" class="col-lg-4 col-md-4 col-sm-12 col-form-label text-md-right">{{ __('Phone 2') }}</label>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input id="phone2" type="text" class="form-control @error('phone2') is-invalid @enderror" name="phone2" value="{{ old('phone2') }}" autocomplete="phone2" autofocus>
                                @error('phone2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
