<div>
    @foreach($todos as $todo)
        <p>{{ $todo->title }}</p>

        @if ($todo->complete)
            <input type="checkbox" checked/>
        @else
            <input type="checkbox"/>
        @endif
    @endforeach
</div>
