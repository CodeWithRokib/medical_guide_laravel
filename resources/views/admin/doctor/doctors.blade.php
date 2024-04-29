<table class="table table-bordered table-striped" id="brandTable">
    <thead>
    <tr>
        <th style="width:3%">SL</th>
        <th style="width:15%">Name</th>
        <th>Email</th>
        {{-- <th style="width:10%">Phone</th> --}}
        <th style="width:10%">Hospital</th>
        <th style="width:10%">Specialist In</th>
        <th style="width:5%">Gender</th>
        <th style="width:10%">Image</th>
        <th style="width:15%">Action </th>
    </tr>
    </thead>
    <tbody>
    @php $i=0; @endphp
    @foreach($doctors as $info)
        <tr>
            <td STYLE="width: 3%">{{ ++$i }}</td>
            <td STYLE="width: 10%">{{ $info->user->name }}</td>
            <td>{{ optional($info->user)->email }}</td>
            <td STYLE="width: 10%"> {!!   $info->hospital ? optional($info->hospital)->name : "<label class='btn btn-danger'> Please Update </label>"  !!}
            </td>
            <td STYLE="width: 10%"> {!!  $info->specialist ? optional($info->specialist)->name  : " <label class='btn btn-danger'> Please Update </label> "  !!}
            </td>
            <td style="width:10%">
                @if($info->gender ==0)
                    <label class="label label-mint">Male</label>
                @else
                    <label class="label label-success">FeMale</label>

                @endif
            </td>
            <td style="width:10%">
                <img src="{{ optional($info->user)->image  }}"  class="img-responsive" style="height: 70px;width: 70px;">
            </td>
            <td style="width:15%">
                <a href="{{route('doctor.edit',$info->id)}}" class="btn btn-sm btn-info edit" ><i class="demo-pli-pen-5"></i></a> || <a href="{{ route('visitdoctor.profile',$info->id) }}" class="btn btn-mint fa fa-user"> </a> ||
                <button class="btn btn-sm btn-danger erase fa fa-trash" data-id="{{$info->id}}" data-url="{{  url('DoctorManagement/erase')}}">
                </button>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
