@extends('admin.layouts.master')
@section('vendor-style')
    <!-- vendor css files -->
    <link rel="stylesheet" href="{{ asset('') }}app-assets/vendors/css/forms/wizard/bs-stepper.min.css">
    <link rel="stylesheet" href="{{ asset('') }}app-assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" href="{{ asset('') }}app-assets/css/plugins/forms/form-validation.css">
@endsection

@section('page-style')
    <!-- Page css files -->
    <link rel="stylesheet" href="{{ asset('') }}app-assets/css-rtl/plugins/forms/form-validation.css">
    <link rel="stylesheet" href="{{ asset('') }}app-assets/css-rtl/plugins/forms/form-wizard.css">
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">{{ request()->name }}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Create {{ request()->name }}
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">

            <section class="tooltip-validations" id="tooltip-validation">
                <div class="row">
                    <div class="col-12 p-5">
                        <div class="card">
                            <div class="card-header d-flex">
                                <div class="left">
                                    <a href="{{ url()->previous() }}" class="btn btn-dark btn-sm"><i
                                            class="fas fa-arrow-circle-left"></i> Back</a>
                                </div>
                                <div class="right">
                                    <a class="btn btn-primary btn-learge" href="{{ route('admin.user.index') }}"><i
                                            data-feather='eye'></i> View User</a>
                                    <a class="btn btn-dark btn-learge" href="{{ route('admin.user.create') }}"><i
                                            data-feather='plus'></i> Create New</a>
                                </div>
                            </div>
                        </div>
                        <!-- Modern Horizontal Wizard -->
                        @include('ErrorMessage')
                        <form class="mt-2" action="{{ route('admin.user.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="form-label" for="login-name">Name</label>
                                <input required id="name" placeholder="Name" type="name"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="login-username">User Name</label>
                                <input required id="username" placeholder="User Name" type="text"
                                    class="form-control @error('username') is-invalid @enderror" name="username"
                                    value="{{ old('username') }}" autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="login-phone">Mobile</label>
                                <input required id="phone" placeholder="Mobile" type="phone"
                                    class="form-control @error('phone') is-invalid @enderror" name="phone"
                                    value="{{ old('phone') }}" autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="login-email">Email</label>
                                <input required id="email" placeholder="Email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="ssc">Passing Year</label>
                                <input required id="ssc" placeholder="Passing Year" type="number"
                                    class="form-control @error('ssc') is-invalid @enderror" name="ssc"
                                    value="{{ old('ssc') }}" autocomplete="ssc" autofocus>

                                @error('ssc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="guest">Guest Number</label>
                                <input required id="guest" placeholder="Passing Year" type="number"
                                    class="form-control @error('guest') is-invalid @enderror" name="guest"
                                    value="{{ old('guest') }}" autocomplete="guest" autofocus>

                                @error('guest')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="own_fee">Own Fee</label>
                                <input required id="own_fee" placeholder="Own Fee" type="number"
                                    class="form-control @error('own_fee') is-invalid @enderror" name="own_fee"
                                    value="{{ old('own_fee') }}" autocomplete="own_fee" autofocus>

                                @error('own_fee')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="guest_fee">Guest Fee</label>
                                <input required id="guest_fee" placeholder="Guest Fee" type="number"
                                    class="form-control @error('guest_fee') is-invalid @enderror" name="guest_fee"
                                    value="{{ old('guest_fee') }}" autocomplete="guest_fee" autofocus>

                                @error('guest_fee')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="guest_fee">Total Fee</label>
                                <input required id="total_fee" placeholder="Total Fee" type="number"
                                    class="form-control @error('total_fee') is-invalid @enderror" name="total_fee"
                                    value="{{ old('total_fee') }}" autocomplete="total_fee" autofocus>

                                @error('total_fee')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="status">Status</label>
                                <select required name="status" id="status" class="form-control @error('status') is-invalid @enderror"
                                    value="{{ old('status') }}" autocomplete="status" autofocus>
                                    <option value="">Select Status</option>
                                    @foreach ($enumStatuses as $key => $status)
                                    <option   value="{{$key}}">{{$status}}</option>
                                     @endforeach
                                </select>

                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>



                            <button class="btn btn-primary btn-block" tabindex="4">Create</button>
                        </form>
                        <!-- /Modern Horizontal Wizard -->
                    </div>
                </div>
            </section>
            <!-- Tooltip validations end -->
        </div>
    </div>
@endsection
