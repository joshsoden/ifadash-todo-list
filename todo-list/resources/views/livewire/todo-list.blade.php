<div> 
    
    <h3>To do:</h3>
    @foreach($todos_incomplete as $todo)
        <p>{{ $todo->title }}</p>
        <input type="checkbox"/>
    @endforeach

    <h2>Already done:</h2>
    @foreach($todos_complete as $todo)
        <p>{{ $todo->title }}</p>
        <input type="checkbox" checked/>
    @endforeach

</div>
