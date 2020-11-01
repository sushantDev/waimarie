@extends('backend.layouts.app')

@section('title', 'funders')

@section('content')
    <section>
        <div class="section-body">
            {{ Form::model($funders, ['route' =>['funders.update', $funders->slug],'class'=>'form form-validate','role'=>'form', 'files'=>true, 'novalidate']) }}
            {{ method_field('PUT') }}
            @include('backend.funders.partials.form', ['header' => 'Edit page <span class="text-primary">('.str_limit($funders->title).')</span>'])
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
