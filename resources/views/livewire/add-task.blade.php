<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <form>
        <div class="form-group">
            <input type="text" class="form-control" wire:model="title" placeholder="Task">
            @error('title')
                <div class="alert-danger">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <textarea rows="10" cols="10" class="form-control" wire:model="description"></textarea>
        </div>
        <button type="button" class="btn btn-primary" wire:click="save">Save</button>
    </form>
</div>
