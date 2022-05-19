@extends('dashboard.layouts.app')
@section('title','Profile')
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Profile</h4>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 m-b-30 header-title">Profile <a class="btn btn-primary btn-xs float-right" href="{{ route('user.profile.edit') }}" title=""> Edit </a></h4>
                    <div class="text-center my-5">
                        <img width="120" height="120" src="{{ asset('assets/img/users') }}/{{ Auth::user()->profile_photo }}" alt="" class="rounded-circle">
                        <h6>{{ Auth::user()->name }}</h6>
                        <h6>{{ Auth::user()->phone }}</h6>
                    </div>
                    <table class="table table-bordered table-hovered">
                        <tbody>
                            <tr>
                                <th> Name</th>
                                <td>{{ Auth::user()->name }}</td>
                            </tr>

                            <tr>
                                <th> Email</th>
                                <td>{{ Auth::user()->email }}</td>
                            </tr> 

                            <tr>
                                <th> Mobile</th>
                                <td>{{ Auth::user()->phone }}</td>
                            </tr>

                            <tr>
                                <th> Joining Date</th>
                                <td>{{ Auth::user()->created_at->format('d M Y') }}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end col -->

            
        </div>
        <!-- end row -->

    </div>
@endsection