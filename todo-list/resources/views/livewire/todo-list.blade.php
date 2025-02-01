<div>
    @foreach($todos as $todo)
        <p>{{ $todo->title }}</p>
        <input type="checkbox"/>
    @endforeach
</div>
