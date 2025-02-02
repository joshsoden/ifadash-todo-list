<div>

    <h3>To do:</h3>
    @foreach($todos_incomplete as $todo)
        <div class="todo" wire:key="{{$todo->id}}">
            <p>{{ $todo->title }}</p>
            <div>
                <span class="material-symbols-outlined checked" wire:click="mark_complete({{ $todo->id }}, {{ 1 }})">check_box_outline_blank</span>
                <button class="delete" wire:click="delete_todo({{ $todo->id }})">Delete</a>
            </div>
        </div>
    @endforeach

    <h3>Already done:</h3>
    @foreach($todos_complete as $todo)
        <div class="todo" wire:key="{{$todo->id}}">
            <p>{{ $todo->title }}</p>
            <div>
                <span class="material-symbols-outlined" checked wire:click="mark_complete({{ $todo->id }}, {{ 0 }})">check_box</span>
                <button class="delete" wire:click="delete_todo({{ $todo->id }})">Delete</a>
            </div>
        </div>
    @endforeach

</div>
