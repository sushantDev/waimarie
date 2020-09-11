<tr>
    <td>{{++$key}}</td>
    <td>{{ Str::limit($page->title, 47) }}</td>
    <td>{{ $page->view }}</td>
    <td class="text-center">
        @if($page->is_published =='1')
            <span class="badge" style="background-color: #419645">{{$page->is_published ? 'Yes' : 'No'}}</span>
        @elseif($page->is_published =='0')
            <span class="badge" style="background-color: #f44336">{{$page->is_published ? 'Yes' : 'No'}}</span>
        @endif
    </td>
    <td class="text-right">
        <a href="{{route('page.edit', $page->slug)}}" class="btn btn-flat btn-primary btn-xs">
            Edit
        </a>
        <button type="button" data-url="{{ route('page.destroy', $page->slug) }}" class="btn btn-flat btn-primary btn-xs item-delete">
            Delete
        </button>
    </td>
</tr>
