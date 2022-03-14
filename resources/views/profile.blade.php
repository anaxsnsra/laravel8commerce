<h1>Profile list</h1>

<ul>
    @foreach($response as $responses)
    <li>{{$responses['title']}}
        <p>{{$responses['body']}}</p>
    </li>
    @endforeach
</ul>