@extends('template_logger')

@section('title', 'Logger')

@section('content')
<div class="container container-table">
    <div class="row vertical-center-row">
        <div class="text-center col-md-4 col-md-offset-4">
            <h1 style="color:white;">{{ $meeting->name }}</h1>
            <form>
                <div class="form-group">
                    <input class="form-control input-lg" type="number" min="0" placeholder="Your pin here">
                    <br>
                    <button type="submit" class="btn btn-primary btn-block btn-lg">Check in/out</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop