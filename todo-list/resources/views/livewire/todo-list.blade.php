<div>

    <h3>To do:</h3>
    @forelse($todos_incomplete as $todo)
        <div class="todo" wire:key="{{$todo->id}}">
            <p>{{ $todo->title }}</p>
            <div>
                <span class="material-symbols-outlined" wire:click="mark_complete({{ $todo->id }}, {{ 1 }})">check_box_outline_blank</span>
                <span class="material-symbols-outlined delete" wire:click="delete_todo({{ $todo->id }})">delete</span>
            </div>
        </div>
    @empty
        <div class="todo empty">
            <p>You haven't got any tasks - why not add one?</p>
        </div>
    @endforelse

    <h3>Already done:</h3>
    @forelse($todos_complete as $todo)
        <div class="todo" wire:key="{{$todo->id}}">
            <p>{{ $todo->title }}</p>
            <div>
                <span class="material-symbols-outlined" checked wire:click="mark_complete({{ $todo->id }}, {{ 0 }})">check_box</span>
                <span class="material-symbols-outlined delete" wire:click="delete_todo({{ $todo->id }})">delete</span>
            </div>
        </div>
    @empty
        <div class="todo empty">
            <p>You haven't completed any tasks yet!</p>
        </div>
    @endforelse

</div>
