<div>
    <h3>Create new item</h3>
    <form wire:submit="create_todo">
        <label>Name: </label><input type="text" wire:model="title" />
        <button type="submit">Create</button>
    </form>
</div>
