@extends('backEnd.app')
@section('header')
    <h1 class="text-primary"> Users Information</h1>
@endsection
@section('content')


    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-outline-primary rounded" data-toggle="modal" data-target="#userModal">
                Add User
            </button>
        </div>
        <div class="card-body">
            <table class="table table-striped  text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>email</th>
                        <th>Phone</th>
                        <th>Countrie</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($users as $index => $user)
                        <tr>
                            <th >{{ $index+1 }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->Countrie }}</td>
                            <td><a href="{{ route('users.edit', $user) }}"><i
                                        class='fa fa-edit fa-2x text-center text-primary '></i> </a></td>
                            <form action="{{ route('users.destroy', $user) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <td><button type="submit" class="btn btn-link"><i
                                            class='fa fa-trash-o fa-2x text-center text-danger '></i> </button></td>

                            </form>
                        </tr>

                    @endforeach



                </tbody>
            </table>
        </div>
    </div>



    {{-- the begin of users form --}}


    <div id="userModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center text-primary">Add New User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{ route('users.store') }}" method="post" class="form-horizontal">
                        @csrf

                        <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-small" class=" form-control-label">
                                    Full Name</label></div>
                            <div class="col col-sm-6"><input type="text" id="input-small" name="name"
                                    placeholder="Enter full Name" class=" form-control">
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">
                                    Email</label></div>
                            <div class="col col-sm-6">
                                <input type="email" name="email" placeholder="Enter Your Email" class="form-control">
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-large" class=" form-control-label"> Phone</label>
                            </div>
                            <div class="col col-sm-6"><input type="phone" name="phone" placeholder="Your Phone"
                                    class=" form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-large" class=" form-control-label"> Country</label>
                            </div>
                            <div class="col col-sm-6"><input type="password" name="country" class=" form-control"
                                    placeholder="Enter your Country">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-large" class=" form-control-label"> Password</label>
                            </div>
                            <div class="col col-sm-6"><input type="password" name="psw" class=" form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-large" class=" form-control-label">
                                    repeat-password</label>
                            </div>
                            <div class="col col-sm-6"><input type="password" name="psw" class=" form-control">
                            </div>
                        </div>



                </div>



                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary ">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                    <button type="reset" class="btn btn-danger  ">
                        <i class="fa fa-ban"></i> Reset
                    </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
            </form>
        </div>
    </div>
@endsection