@extends('backend.layouts.app')

@section('title', 'gallerycategory')

@section('content')
    <section>
        <div class="section-body">
 			{{ Form::open(['route' =>substr(Route::currentRouteName(), 0 , strpos(Route::currentRouteName(), '.')).'.store','class'=>'form form-validate','role'=>'form', 'files'=>true, 'enctype'=>'multipart/form-data','novalidate']) }}
            @include('backend.gallerycategory.partials.form', ['header' => 'Create a gallerycategory'])
            {{ Form::close() }}
        </div>
    </section>
@endsection

@push('styles')
<link href="{{ asset('backend/css/libs/dropify/dropify.min.css') }}" rel="stylesheet">
@endpush

@push('scripts')
<script src="{{ asset('backend/js/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>
<script src="{{ asset('backend/js/libs/jquery-validation/dist/additional-methods.min.js') }}"></script>
<script src="{{ asset('backend/js/libs/dropify/dropify.min.js') }}"></script>
@endpush
