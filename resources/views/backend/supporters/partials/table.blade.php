<tr>
    <td>{{++$key}}</td>
    <td>{{ ($supporters->title) }}</td>
<td>
        <span class="badge">{{ $supporters->is_published ? 'Yes' : 'No' }}</span>
       </td>
     <td class="text-right">
      <a href="{{route('supporters.edit', $supporters->slug)}}" class="btn btn-flat btn-primary btn-xs">
          Edit
      </a>
      <button type="button" data-url="{{ route('supporters.destroy', $supporters->slug) }}"
              class="btn btn-flat btn-primary btn-xs item-delete">
          Delete
      </button>
  </td>
</tr>
