<tr>
    <td>{{++$key}}</td>
    <td><p>{{ ($servicecategory->title) }}</p></td>
    <td>
        <span class="badge">{{ $servicecategory->is_published ? 'Yes' : 'No' }}</span>
       </td>
     <td class="text-right">
      <a href="{{route('servicecategory.edit', $servicecategory->slug)}}" class="btn btn-flat btn-primary btn-xs">
          Edit
      </a>
      <button type="button" data-url="{{ route('gallerycategory.destroy', $servicecategory->slug) }}"
              class="btn btn-flat btn-primary btn-xs item-delete">
          Delete
      </button>
  </td>
</tr>
