<tr>
    <td>{{++$key}}</td>
    <td>{{ str_limit($trevor->title) }}</td>
    <td class="text-center">
        <span class="badge">{{ $trevor->is_published ? 'Yes' : 'No' }}</span>
</td>

<td class="text-right">
 <a href="{{route('trevor.edit', $trevor->id)}}" class="btn btn-flat btn-primary btn-xs">
     Edit
 </a>
 <button type="button" data-url="{{ route('trevor.destroy', $trevor->id) }}"
         class="btn btn-flat btn-primary btn-xs item-delete">
     Delete
 </button>
</td>