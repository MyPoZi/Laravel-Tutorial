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
            {{--<td>@if ($item->board != null) {{$item->board->getData()}}@endif</td>--}}
            <td>
                @if ($item->board != null)
                    <table width="100%">
                        @foreach($item->board as $obj)

                            <tr>
                                <td>{{$obj->getData()}}</td>
                            </tr>
                        @endforeach
                    </table>
                @endif
            </td>
        </tr>
    @endforeach
</table>
