@extends('backend.layouts.app')

@section('title', 'gallerycategory')

@section('content')
    <section>
        <div class="section-body">
            {{ Form::model($gallerycategory, ['route' =>['gallerycategory.update', $gallerycategory->slug],'class'=>'form form-validate','role'=>'form', 'files'=>true, 'novalidate']) }}
            {{ method_field('PUT') }}
            @include('backend.gallerycategory.partials.form', ['header' => 'Edit page <span class="text-primary">('.str_limit($gallerycategory->title).')</span>'])
            {{ Form::close() }}
        </div>
    </section>
@stop
@push('styles')
<link href="{{ asset('backend/css/libs/dropify/dropify.min.css') }}" rel="stylesheet">
@endpush

@push('scripts')
<script src="{{ asset('backend/js/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>
<script src="{{ asset('backend/js/libs/jquery-validation/dist/additional-methods.min.js') }}"></script>
<script src="{{ asset('backend/js/libs/dropify/dropify.min.js') }}"></script>
@endpush
