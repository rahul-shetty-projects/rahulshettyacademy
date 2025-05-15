@extends('layouts.app')

@section('content')

@if(session('error'))
    <div class="alert bg-danger" role="alert">
        <em class="fa fa-minus-circle mr-2"></em> 
        {{ session('error') }}
        <a href="#" onclick="$(this).parents('.alert').hide()" class="float-right"><em class="fa fa-remove"></em></a>
    </div>
@elseif(session('msg'))
    <div class="alert bg-success" role="alert">
        <em class="fa fa-check-circle mr-2"></em> 
        {{ session('msg') }}
        <a href="#" onclick="$(this).parents('.alert').hide()" class="float-right"><em class="fa fa-remove"></em></a>
    </div>              
@endif

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12 noPrint" style="padding: 15px 0px;">
            <a class="btn btn-success btn-lg float-right" target="_blank" href="{{ route('home.downloadSubscriberCSV') }}">
                <span class="fa fa-plus"> </span> Download CSV
            </a>
        </div>
        <div class="table-responsive">
            <table id="stockList" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>S.no.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Is Verfied </th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($subscribers_info as $subscriber)
                    <tr>
                        <td>{{ $subscriber->sno }}</td>
                        <td>{{ $subscriber->name }}</td>
                        <td>{{ $subscriber->email }}</td>
                        @if($subscriber->is_verified == 1)
                        <td>Yes</td>
                        @else
                        <td>No</td>
                        @endif
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center">No users data found ..!</td>
                    </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection