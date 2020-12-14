<div class="row">
    <div class="col-md-12">
    <!-- @include('partials.errors') -->
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
                    <input type="submit" name="draft" class="btn btn-info ink-reaction" value="Save">
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                      <div class="col-sm-12">
                          <div class="form-group">
                            <strong>Title*</strong>
                              {{ Form::text('title',old('title'),['class'=>'form-control','placeholder' => '']) }}

                          </div>
                      </div>


                    <div class="row">
                        <div class="col-sm-12">
                            <strong>Select Category:</strong>&nbsp;
                            {{ Form::select('category',['Lounge' => 'Lounge','Raumati(Outside Room)' => 'Raumati(Outside Room)',
                            'Meeting/Interview Room' => 'Meeting/Interview Room', 'Kitchen Only Hire' => 'Kitchen Only Hire', 'TABLES & CHAIRS, URN:' => 'TABLES & CHAIRS, URN:',
                            'MEDIA EQUIPMENT HIRE' => 'MEDIA EQUIPMENT HIRE'
                            ] ) }}
                        </div>

                    </div>
                  </div>

                  <div class="row">
                        {{--<div class="col-sm-12">--}}
                            {{--<div class="form-group">--}}
                                {{--{{ Form::textarea('content',old('content'),['class'=>'my-ckeditor', 'id' => 'my-ckeditor']) }}--}}
                                {{--{{ Form::label('Content','Content')}}--}}
                            {{--</div>--}}
                      {{--</div>--}}
                    </div>

                    <br>
                    <br>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                {{ Form::text('url', old('url'), ['class' => 'form-control', 'placeholder' => '(enter your URL here.. only for clients)']) }}
                                {{ Form::label('url',' URL') }}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-12">
                        <label class="text-default-light">Featured Image   (Note):(Dimensions)(partners and clients:140*120px,  employeroverview and industrial:140*120px)</label>
                        @if(isset($room) && $room->image)
                            <input type="file" name="image" class="dropify"
                                   data-default-file="{{ asset($room->image->path)}}"/>
                        @else
                            <input type="file" name="image" class="dropify"/>
                        @endif
                      </div>
                    </div>
<br>
<br>

            </div>
            
        </div>
    </div>
    <div class="col-sm-4">
          <div class="card card-affix affix-4">
              <div class="card-head">
                  <div class="tools">
                      <a class="btn btn-default btn-ink" href="{{ route('room.index') }}">
                          <i class="md md-arrow-back"></i>
                          Back
                      </a>
                  </div>
              </div>
              <div class="card-actionbar">
                  <div class="card-actionbar-row">
                      <button type="reset" class="btn btn-default ink-reaction">Reset</button>
                      <input type="submit" name="draft" class="btn btn-info ink-reaction" value="Save Draft">
                      <input type="submit" name="publish" class="btn btn-primary ink-reaction" value="{{ isset($room) && $room->is_published ? 'Save' : 'Publish' }}">
                  </div>
              </div>
          </div>
      </div>
</div>

@push('scripts')
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'my-ckeditor' );
</script>
@endpush
