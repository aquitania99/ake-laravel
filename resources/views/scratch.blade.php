@foreach($data as $row)
    <tr>
        <td>{{$row->firstname}}</td>
        <td>{{$row->lastname}}</td>
        <td>{{$row->email}}</td>
        <td>
            <a href="#">Complete</a> | <a href="#">Edit</a> | <a href="#">Delete</a>
        </td>
    </tr>
@endforeach