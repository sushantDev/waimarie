<tr>
    <td>{{++$key}}</td>
    <td>{{ str_limit($room->title) }}</td>
    <td>{{ str_limit($room->category) }}</td>

    <td class="text-center">
        <span class="badge">{{ $room->is_published ? 'Yes' : 'No' }}</span>
</td>

<td class="text-right">
 <a href="{{route('room.edit', $room->id)}}" class="btn btn-flat btn-primary btn-xs">
     Edit
 </a>
 <button type="button" data-url="{{ route('room.destroy', $room->id) }}"
         class="btn btn-flat btn-primary btn-xs item-delete">
     Delete
 </button>
</td>