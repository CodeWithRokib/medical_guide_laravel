<table class="table table-bordered table-striped" id="brandTable">
    <thead>
    <tr>
        <th>SL</th>
        <th>Name</th>
        <th>Action </th>
    </tr>
    </thead>
    <tbody>
    @php $i=0; @endphp
    @foreach($specialists as $info)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $info->name }}</td>
            <td>
                <a href="{{route('specialist.edit',$info->id)}}" class="btn btn-sm btn-info edit" ><i class="demo-pli-pen-5"></i></a> ||
                <button class="btn btn-sm btn-danger erase fa fa-trash" data-id="{{$info->id}}" data-url="{{url('DoctorManagement/erase-specialist')}}">
                </button>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
