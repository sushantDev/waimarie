<tr>
    <td>{{++$key}}</td>
    <td>{{ str_limit($servicephoto->title) }}</td>
    <td>{{ str_limit($servicephoto->category) }}</td>

    <td class="text-center">
        <span class="badge">{{ $servicephoto->is_published ? 'Yes' : 'No' }}</span>
</td>

<td class="text-right">
 <a href="{{route('servicephoto.edit', $servicephoto->id)}}" class="btn btn-flat btn-primary btn-xs">
     Edit
 </a>
 <button type="button" data-url="{{ route('servicephoto.destroy', $servicephoto->id) }}"
         class="btn btn-flat btn-primary btn-xs item-delete">
     Delete
 </button>
</td>