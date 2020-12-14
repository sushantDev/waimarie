@extends('backend.layouts.app')

@section('title', 'Room')

@section('content')
    <section>
        <div class="section-body">
            <div class="card">
                <div class="card-head">
                    <header class="text-capitalize">All Room Categories</header>
                    <div class="tools">
                        <a class="btn btn-primary ink-reaction" href="{{ route('room.create') }}">
                            <i class="md md-add"></i>
                            Add
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                          <th width="10%">#</th>
                          <th width="30%">Title</th>
                            {{--<th width="10%">Category</th>--}}
                            <th width="10%" >Published</th>
                          <th width="10%" class="text-right">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                          @if($rooms->isEmpty())
                            <tr>
                                <td class="text-center" colspan="5">No data available.</td>
                            </tr>
                        @else
                        @each('backend.room.partials.table', $rooms, 'room')
                        @endif

                        </tbody>
                    </table>
                    {{ $rooms->links() }}
                </div>
            </div>
        </div>
    </section>
@stop
