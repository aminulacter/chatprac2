@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Aminul Messanger</div>

                <div class="card-body" id="app">
                   <chat-app :user="{{ auth::user()->toJson() }}"></chat-app>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
