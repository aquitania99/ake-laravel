
{{ dd( json_decode($test) ) }}

@foreach(json_decode($test) as $key => $row)
    {{--<tr class="row col-md-6">--}}
        {{--<td>{{$key}}</td>--}}
        {{--<td>{{$row}}</td>--}}
        {{--<td>--}}
            {{--<a href="#">Complete</a> | <a href="#">Edit</a> | <a href="#">Delete</a>--}}
        {{--</td>--}}
    {{--</tr>--}}
    {{--<tr>--}}
        {{--<td></td>--}}
        {{--<td></td>--}}
        {{--<td></td>--}}
    {{--</tr>--}}
@endforeach