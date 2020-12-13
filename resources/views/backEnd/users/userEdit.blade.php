@extends('backEnd.app')

@section('content')







    <div class="card">
        <div class="card-header">
            <h1 class="text-center text-primary"> Update user Information</h1>
        </div>
        <div class="cart-body p-5">
            <form action="{{ route('users.update', $user) }}" method="post" class="form-horizontal">
                @csrf
                @method('PATCH')
                <div class="row form-group">
                    <div class="col col-sm-5"><label for="input-small" class=" form-control-label">
                            Full Name</label></div>
                    <div class="col col-sm-6"><input type="text" id="input-small" name="name" value="{{ $user->name }}"
                            placeholder="Enter full Name" class=" form-control">
                    </div>
                </div>


                <div class="row form-group">
                    <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">
                            Email</label></div>
                    <div class="col col-sm-6">
                        <input type="email" name="email" value="{{ $user->email }}" placeholder="Enter Your Email"
                            class="form-control">
                    </div>
                </div>


                <div class="row form-group">
                    <div class="col col-sm-5"><label for="input-large" class=" form-control-label"> Phone</label>
                    </div>
                    <div class="col col-sm-6"><input type="phone" name="phone" value="{{ $user->phone }}"
                            placeholder="Your Phone" class=" form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-sm-5"><label for="input-large" class=" form-control-label"> Country</label>
                    </div>
                    <div class="col col-sm-6"><input type="password" name="country" value="{{ $user->country }}"
                            class=" form-control" placeholder="Enter your Country">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-sm-5"><label for="input-large" class=" form-control-label"> Password</label>
                    </div>
                    <div class="col col-sm-6"><input type="password" name="psw" class=" form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-sm-5"><label for="input-large" class=" form-control-label"> repeat-password</label>
                    </div>
                    <div class="col col-sm-6"><input type="password" name="psw" class=" form-control">
                    </div>
                </div>
        </div>
    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary ">
            <i class="fa fa-dot-circle-o"></i> Submit
        </button>
        <button type="reset" class="btn btn-danger  ">
            <i class="fa fa-ban"></i> Reset
        </button>


    </div>
    </div>
    </form>

@endsection
