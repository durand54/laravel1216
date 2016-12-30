
@extends('layout')

@section('content')

    <div class="inner-j">
        <div class="title m-b-md flyer-header">
             Selling Your Home
        </div>
    </div>
    <hr>
    <div class="form-container ">
    <form method="POST" action="/flyers" enctype="multipart/form-data">
        @include('flyers.form')
    </form>
    </div>
    <hr>
    @stop