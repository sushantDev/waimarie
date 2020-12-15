@extends('backend.layouts.app')

@section('title', 'photo')

@section('content')
    <section>
        <div class="section-body">
            {{ Form::model($photo, ['route' =>['photo.update', $photo->id],'class'=>'form form-validate','role'=>'form', 'files'=>true, 'novalidate']) }}
            {{ method_field('PUT') }}
            @include('backend.photo.partials.form', ['header' => 'Edit Post <span class="text-primary">('.str_limit($photo->title, 47).')</span>'])
            {{ Form::close() }}

            {{--Image Starts is here--}}
            @if(isset($photo))
                <div class="row">
                    <div class="col-sm-12">
                        <label class="text-default-light">Featured Images
                        </label>
                        <div class="row">
                            <div class="col-md-12">
                                <form action="" class="dropzone" id="dropzone" style="border: 2px dashed #c4912c;">
                                    @csrf
                                    <input type="hidden" name="photo_id" value="{{ $photo->id }}">
                                    <div class="fallback">
                                        <input type="file" name="file"/>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row d-print-none mt-2">
                            <div class="col-12 text-right">
                                <button class="btn btn-success" type="button" id="uploadButton">
                                    <i class="fa fa-fw fa-lg fa-upload"></i>Upload Images
                                </button>
                            </div>
                        </div>
                        @if ($photo->images)
                            <hr>
                            <div class="row">
                                @foreach($photo->images as $image)
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <img src="{{ asset('storage/'.$image->full) }}" id="brandLogo"
                                                     class="img-fluid" alt="img">
                                                <a class="card-link float-right text-danger"
                                                   href="{{ route('photo.images.delete', $image->id) }}">
                                                    <i class="fa fa-fw fa-lg fa-trash"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            @endif
            {{--Image Part ends here--}}
        </div>
    </section>
@stop

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('dropzone/src/dropzone.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('dropzone/src/dropzone.js') }}"></script>
    <script>
        Dropzone.autoDiscover = false;

        $(document).ready(function () {
            let myDropzone = new Dropzone("#dropzone", {
                paramName: "image",
                addRemoveLinks: false,
                maxFilesize: 4,
                parallelUploads: 2,
                uploadMultiple: false,
                url: "{{ route('photo.images.upload') }}",
                autoProcessQueue: false,
            });
            myDropzone.on("queuecomplete", function (file) {
                swal({
                    icon: 'success',
                    title: 'Completed',
                    text: 'All gallery images uploaded.',
                });
                window.location.reload();
            });
            $('#uploadButton').click(function () {
                if (myDropzone.files.length === 0) {
                    swal({
                        icon: 'error',
                        title: 'Error',
                        text: 'Please select images to upload.',
                    });
                } else {
                    myDropzone.processQueue();
                }
            });
        });
    </script>
@endpush
