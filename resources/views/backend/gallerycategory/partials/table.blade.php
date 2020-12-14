<tr>
    <td>{{++$key}}</td>
    <td><p>{{ ($gallerycategory->title) }}</p></td>
    <td>
        <span class="badge">{{ $gallerycategory->is_published ? 'Yes' : 'No' }}</span>
       </td>
     <td class="text-right">
      <a href="{{route('gallerycategory.edit', $gallerycategory->slug)}}" class="btn btn-flat btn-primary btn-xs">
          Edit
      </a>
      <button type="button" data-url="{{ route('gallerycategory.destroy', $gallerycategory->slug) }}"
              class="btn btn-flat btn-primary btn-xs item-delete">
          Delete
      </button>
  </td>
</tr>
