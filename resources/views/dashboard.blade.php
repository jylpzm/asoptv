@extends('layouts.app')
 
 @section('content')

                @if(session("message"))
                <div class="alert alert-success col-md-6 offset-md-3" role="alert">
                <strong>{{ session("message") }}</strong>
                @endif

@endsection

