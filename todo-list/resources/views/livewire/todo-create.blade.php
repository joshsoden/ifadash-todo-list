<div>
    <h3>Create new item</h3>
    <form wire:submit="create_todo">
        <div class="todo">
            <input type="text" wire:model="title" />
            <span type="submit" class="material-symbols-outlined">add_box</span>
        </dv>
    </form>
</div>
