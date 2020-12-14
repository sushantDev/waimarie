<div class="row">
    <div class="col-md-12">
        @include('partials.errors')
    </div>
    <div class="col-sm-8">
        <div class="card">
            <div class="card-head">
               
                <header>{!! $header !!}</header>
                <div class="tools visible-xs">
                    <a class="btn btn-default btn-ink" onclick="history.go(-1);return false;">
                        <i class="md md-arrow-back"></i>
                        Back
                    </a>
                    <input type="submit" name="draft" class="btn btn-info ink-reaction" value="Save Draft">
                    <input type="submit" name="publish" class="btn btn-primary ink-reaction" value="Publish">
                </div>
            </div>
            <div class="card-body tab-content">
                     <div class="row">

                         <div class="col-sm-12">
                             <div class="form-group">
                                 <strong>Title*</strong>
                                 {{ Form::text('title',old('title'),['class'=>'form-control']) }}
                             </div>

                             <div class="form-group">
                                 <strong>Url(If Linked to some page)</strong>
                                 {{ Form::text('url',old('url'),['class'=>'form-control']) }}
                             </div>

                         </div>
                    </div>

                <div class="row">
                        <div class="col-sm-12">
                            <label class="text-default-light">Featured Image    <strong>Note</strong>:(Dimension:1350*450px)</label>
                            @if(isset($servicecategory) && $servicecategory->image)
                                <input type="file" name="image" class="dropify"
                                       data-default-file="{{ asset($servicecategory->image->path) }}"/>
                            @else
                                <input type="file" name="image" class="dropify"/>
                            @endif
                        </div>
                    </div>

                
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card card-affix affix-4">
            <div class="card-head">
                <div class="tools">
                    <a class="btn btn-default btn-ink" href="{{ route('gallerycategory.index') }}">
                        <i class="md md-arrow-back"></i>
                        Back
                    </a>
                </div>
            </div>
            <div class="card-actionbar">
                <div class="card-actionbar-row">
                    <button type="reset" class="btn btn-default ink-reaction">Reset</button>
                    <input type="submit" name="draft" class="btn btn-info ink-$servicecategory" value="Save Draft">
                    <input type="submit" name="publish" class="btn btn-primary ink-reaction" value="{{ isset($servicecategory) && $servicecategory->is_published ? 'Save' : 'Publish' }}">
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="{{asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('vendor/unisharp/laravel-ckeditor/adapters/jquery.js')}}"></script>
<script>
    CKEDITOR.replace( 'my-ckeditor' );
</script>
@endpush
