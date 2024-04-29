<table class="table-hover table">
    <thead>
        <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @php $sl=0; @endphp
        @foreach($blogs as $info)
        <tr>
            <td>{{ ++$sl }}</td>
            <td>{{ $info->name }}</td>
            <td>{{ $info->description }}</td>
            <td>
                <a href="{{ route('blog.edit',$info->id) }}" class="fa fa-edit btn btn-primary"></a>
                <button type="button" class="btn-danger btn erase fa fa-trash" data-id="{{ $info->id }}" data-url="{{ route('blog.destroy') }}" ></button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>