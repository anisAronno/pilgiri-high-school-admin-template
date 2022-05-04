@extends('admin.layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">User</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">User Create
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-body">
            @include('ErrorMessage')
            <!-- Tooltip validations start -->
            <section class="tooltip-validations" id="tooltip-validation">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex">
                                <div class="left">
                                    <h4 class="card-title"></h4>
                                </div>
                                <div class="right">
                                    <a class="btn btn-primary btn-learge" href="{{ route('admin.user.index') }}">User List</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action=" {{ route('admin.user.update', $user->id) }}" method="post"
                                    enctype="multipart/form-data" files="true">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                                            <div class="form-group">
                                                <label class="form-label" for="login-name">Name</label>
                                                <input required  id="name" placeholder="Name" type="name"
                                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                                    value="{{ $user->name ?? '' }}" autocomplete="name" autofocus>

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                                            <div class="form-group">

                                                    <label class="form-label" for="login-username">User Name</label>
                                                    <input required id="username" placeholder="User Name" type="username"
                                                        class="form-control @error('username') is-invalid @enderror" name="username"
                                                        value="{{ $user->username ?? ''  }}" autocomplete="username" autofocus>

                                                    @error('username')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                                            <div class="form-group">

                                                    <label class="form-label" for="login-email">Email</label>
                                                <input required id="email" placeholder="Email" type="email"
                                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                                    value="{{ $user->email ?? '' }}" autocomplete="email" autofocus>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                                            <div class="form-group">
                                                <label class="form-label" for="login-phone">Mobile</label>
                                                <input required id="phone" placeholder="Mobile" type="phone"
                                                    class="form-control @error('phone') is-invalid @enderror" name="phone"
                                                    value="{{ $user->phone ??'' }}" autocomplete="phone" autofocus>

                                                @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                         <div class="col-xl-4 col-md-6 col-12 mb-1">
                                        
                                        <div class="form-group">
                                            <label class="form-label" for="ssc">Passing Year</label>
                                            <input required id="ssc" placeholder="Passing Year" type="number"
                                                class="form-control @error('ssc') is-invalid @enderror" name="ssc"
                                                value="{{ $user->ssc }}" autocomplete="ssc" autofocus>
            
                                            @error('ssc')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>
                                         <div class="col-xl-4 col-md-6 col-12 mb-1">
                                        <div class="form-group">
                                            <label class="form-label" for="guest">Guest Number</label>
                                            <input required id="guest" placeholder="Passing Year" type="number"
                                                class="form-control @error('guest') is-invalid @enderror" name="guest"
                                                value="{{ $user->guest }}" autocomplete="guest" autofocus>
            
                                            @error('guest')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                         <div class="col-xl-4 col-md-6 col-12 mb-1">
                                        <div class="form-group">
                                            <label class="form-label" for="own_fee">Own Fee</label>
                                            <input required id="own_fee" placeholder="Own Fee" type="number"
                                                class="form-control @error('own_fee') is-invalid @enderror" name="own_fee"
                                                value="{{  $user->own_fee }}" autocomplete="own_fee" autofocus>
            
                                            @error('own_fee')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                         <div class="col-xl-4 col-md-6 col-12 mb-1">
                                        <div class="form-group">
                                            <label class="form-label" for="guest_fee">Guest Fee</label>
                                            <input required id="guest_fee" placeholder="Guest Fee" type="number"
                                                class="form-control @error('guest_fee') is-invalid @enderror" name="guest_fee"
                                                value="{{  $user->guest_fee }}" autocomplete="guest_fee" autofocus>
            
                                            @error('guest_fee')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                         <div class="col-xl-4 col-md-6 col-12 mb-1">
                                        <div class="form-group">
                                            <label class="form-label" for="guest_fee">Total Fee</label>
                                            <input required id="total_fee" placeholder="Total Fee" type="number"
                                                class="form-control @error('total_fee') is-invalid @enderror" name="total_fee"
                                                value="{{  $user->total_fee }}" autocomplete="total_fee" autofocus>
            
                                            @error('total_fee')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>


                                        <div class="col-xl-4 col-md-6 col-12 mb-1">

                                            <div class="form-group">
                                                <label class="form-label" for="status">Status</label>
                                                <select required name="status" id="status" class="form-control @error('status') is-invalid @enderror"
                                                    value="{{ old('status') }}" autocomplete="status" autofocus>
                                                    <option value="">Select Status</option>
                                                   @if ($enumStatuses)
                                                        @foreach ($enumStatuses as $key => $status)
                                                        <option {{$key==$user->status?'selected':''}} value="{{$key}}">{{$status}}</option>
                                                        @endforeach
                                                   @endif
                                                </select>

                                                @error('status')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>



                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <button class="btn btn-success right" type="submit">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Tooltip validations end -->
        </div>
    </div>
@endsection
