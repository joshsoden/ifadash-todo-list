<div> 
    
    <h3>To do:</h3>
    @foreach($todos_incomplete as $todo)
        <div wire:key="{{$todo->id}}">
            <p>{{ $todo->title }}</p>
            <input type="checkbox" wire:click="mark_complete({{ $todo->id }}, {{ true }})"/>
            <button wire:click="delete_todo({{ $todo->id }})">Delete</a>
        </div>
    @endforeach

    <h3>Already done:</h3>
    @foreach($todos_complete as $todo)
        <div wire:key="{{$todo->id}}">
            <p>{{ $todo->title }}</p>
            <input type="checkbox" checked wire:click="mark_complete({{ $todo->id }}, {{ 0 }})"/>
            <button wire:click="delete_todo({{ $todo->id }})">Delete</a>
        </div>
    @endforeach

</div>
