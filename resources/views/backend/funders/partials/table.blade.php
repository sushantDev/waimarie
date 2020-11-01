<tr>
    <td>{{++$key}}</td>
    <td>{{ ($funders->title) }}</td>
<td>
        <span class="badge">{{ $funders->is_published ? 'Yes' : 'No' }}</span>
       </td>
     <td class="text-right">
      <a href="{{route('funders.edit', $funders->slug)}}" class="btn btn-flat btn-primary btn-xs">
          Edit
      </a>
      <button type="button" data-url="{{ route('funders.destroy', $funders->slug) }}"
              class="btn btn-flat btn-primary btn-xs item-delete">
          Delete
      </button>
  </td>
</tr>
