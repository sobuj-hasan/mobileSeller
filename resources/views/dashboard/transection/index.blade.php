@extends('dashboard.layouts.app')
@section('title',' Transection History')
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Transection </h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="">Transection </a></li>
                    </ol>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Transection History</b></h4>

                    <div class="table-responsive">
                        <table class="table table-hover m-0 table-actions-bar">

                            <thead>
                            <tr>
                                <th>SI No.</th>
                                <th>Date</th>
                                <th>Transection Type </th>
                                <th>Transection Amount</th>
                                <th>Transectin Time</th>
                                <th>Transection ID</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-danger">No online Trasection yet !</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection

@section('footer_script')
    <script>
        function TransectionDelete(){
            alert('Are you shure ? You want to delete this Transection !')
        }
    </script>
@endsection
