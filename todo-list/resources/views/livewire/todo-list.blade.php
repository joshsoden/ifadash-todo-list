<div> 
    
    <h3>To do:</h3>
    @foreach($todos_incomplete as $todo)
        <div wire:key="{{$todo->id}}">
            <p>{{ $todo->title }}</p>
            <input type="checkbox" wire:click="mark_complete({{ $todo->id }}, {{ true }})"/>
        </div>
    @endforeach

    <h2>Already done:</h2>
    @foreach($todos_complete as $todo)
        <div wire:key="{{$todo->id}}">
            <p>{{ $todo->title }}</p>
            <input type="checkbox" checked wire:click="mark_complete({{ $todo->id }}, {{ 0 }})"/>
        </div>
    @endforeach

</div>
