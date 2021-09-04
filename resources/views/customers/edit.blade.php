@extends('layouts.app', ['pageSlug' => 'customerEdit'])
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('customer.update', $customer -> id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
               {{-- <input type="hidden" value="{{old('id') == true ? old('id') : $customer -> id }}" name="id">--}}
                <div class="form-group">
                    <label for="exampleInputName1">Name:</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" value="{{old('name',isset($customer)?$customer->name:' ')}}" name="name">
                    <p class="text-danger">@error('name') {{$message}} @enderror</p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address:</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" value="{{old('email',isset($customer)?$customer->email:' ')}}" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    <p class="text-danger">@error('email') {{$message}} @enderror</p>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password:</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" value="{{old('password',isset($customer)?$customer->password:' ')}}" placeholder="Password" name="password">
                    <p class="text-danger">@error('password') {{$message}} @enderror</p>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Upload Photo:</label>
                    <input class="form-control-file" type="file" id="formFile" name="image">
                    <p class="text-danger">@error('image') {{$message}} @enderror</p>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    @if($success == true)
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong class="px-3">Success</strong>Customer info has been Updated!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
            </button>
        </div>
    @endif
    @endsection
