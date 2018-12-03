<table>
    <tr>
        {{--<th>Name</th>--}}
        {{--<th>Mail</th>--}}
        {{--<th>Age</th>--}}
        <th>Data</th>
    </tr>
    @foreach($items as $item)
        <tr>
            {{--<td>{{$item->name}}</td>--}}
            {{--<td>{{$item->mail}}</td>--}}
            {{--<td>{{$item->age}}</td>--}}
            <td>{{$item->getData()}}</td>
        </tr>
    @endforeach
</table>
