@extends('layouts.admin')
@section('meta')
    <title>{{trans('home.fundMessages')}}</title>
@endsection
@section('content')
    <div class="container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div>
                <h2 class="main-content-title tx-24 mg-b-5">{{trans('home.contactUsMessages')}}</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin')}}">{{trans('home.admin')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{trans('home.fundMessages')}}</li>
                </ol>
            </div>
            <div class="btn btn-list">
                <a href="{{url('admin/fund-messages')}}" id="btn_delete" ><button class="btn ripple btn-danger"><i class="fas fa-trash"></i> {{trans('home.delete')}}</button></a>
            </div>
        </div>
        <!-- End Page Header -->

        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->pull('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <!-- Row-->
        <div class="row">
            <div class="col-sm-12 col-xl-12 col-lg-12">
                <div class="card custom-card overflow-hidden">
                <div class="card custom-card overflow-hidden">
                    <div class="card-body">
                        <div>
                            <h6 class="card-title mb-1">{{trans('home.fundMessages')}}</h6>
                            <p class="text-muted card-sub-title">{{trans('home.table_contain_all_data_shortly_you_can_view_more_details')}}</p>
                        </div>

                        <div class="table-responsive">
                        <table class="table" id="exportexample">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" id="checkAll"/></th>
                                    <th>{{trans('home.id')}}</th>
                                    <th>{{trans('home.name')}}</th>
                                    <th>{{trans('home.id_type')}}</th>
                                    <th>{{trans('home.id_num')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fundMessages as $fundMessage)
                                    <tr id="{{$fundMessage->id}}">
                                        <td> <input type="checkbox" name="checkbox"  class="tableChecked" value="{{$fundMessage->id}}" /> </td>
                                        <td><a href="{{ route('fund-messages.edit', $fundMessage->id) }}">{{$fundMessage->id}}</a></td>
                                        <td><a href="{{ route('fund-messages.edit', $fundMessage->id) }}">{{$fundMessage->name}}</a></td>
                                        <td><a href="{{ route('fund-messages.edit', $fundMessage->id) }}">{{$fundMessage->id_type}}</a></td>
                                        <td><a href="{{ route('fund-messages.edit', $fundMessage->id) }}">{{$fundMessage->id_num}}</a></td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
					</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->
    </div>
    </div>
@endsection
