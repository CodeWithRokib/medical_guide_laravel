<table class="table table-bordered table-striped" id="brandTable">
    <thead>
    <tr>
        <th style="width:3%">SL</th>
        <th style="width:15%">Doctor Name</th>
        <th style="width:15%">Date</th>
        <th style="width:10%">Slot</th>
        <th style="width:10%">Status</th>
        <th style="width:15%">Action </th>
    </tr>
    </thead>
    <tbody>
    @php $i=0; @endphp
    @foreach($slots as $info)
        <tr>
            <td STYLE="width: 3%">{{ ++$i }}</td>
            <td STYLE="width: 10%">{{ isset($info->doctor->user)?$info->doctor->user->name:'' }}</td>
            <td STYLE="width: 10%">{{ date('d M Y',strtotime($info->date )) }}</td>
            <td STYLE="width: 10%">   <label class="label label-mint">{{ $info->slot_from  }} - {{ $info->slot_to }}</label></td>

            <td style="width:10%">
                @if($info->status ==5)
                    <label class="label label-mint">Book</label>
                @else
                    <label class="label label-success">UnBook</label>

                @endif
            </td>

            <td style="width:15%">
                {{-- <a href="{{route('doctor.edit',$info->id)}}" class="btn btn-sm btn-info edit" ><i class="demo-pli-pen-5"></i></a> || <a href="{{ route('visitdoctor.profile',$info->id) }}" class="btn btn-mint fa fa-user"> </a> || --}}
                <button class="btn btn-sm btn-danger erase fa fa-trash" data-id="{{$info->id}}" data-url="{{  url('DoctorManagement/slot-erase')}}">
                </button>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
