<tr>
    <td>{{++$key}}</td>
    <td>{{ ($videos->title) }}</td>
    <td>{{ ($videos->url) }}</td>

    <td>
        <span class="badge">{{ $videos->is_published ? 'Yes' : 'No' }}</span>
       </td>
     <td class="text-right">
      <a href="{{route('videos.edit', $videos->slug)}}" class="btn btn-flat btn-primary btn-xs">
          Edit
      </a>
      <button type="button" data-url="{{ route('videos.destroy', $videos->slug) }}"
              class="btn btn-flat btn-primary btn-xs item-delete">
          Delete
      </button>
  </td>
</tr>
