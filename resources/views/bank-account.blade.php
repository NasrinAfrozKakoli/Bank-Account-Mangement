@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Bank Account</h2>
                </div>
                <div class="card-body">
                <bank-account-component></bank-account-component>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection