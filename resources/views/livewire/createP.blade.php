<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">Title</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter title" wire:model="title">
        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Body</label>
        <input type="body" class="form-control" id="exampleFormControlInput2" wire:model="body" placeholder="Enter body">
        @error('email') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <button wire:click.prevent="storep()" class="btn btn-success">Save</button>
</form>