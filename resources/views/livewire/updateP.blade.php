<form>
    <div class="form-group">
        <input type="hidden" wire:model="user_id">
        <label for="exampleFormControlInput1">Title</label>
        <input type="text" class="form-control" wire:model="title" id="exampleFormControlInput1" placeholder="Enter Title">
        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Body 
        </label>
        <input type="body" class="form-control" wire:model="body" id="exampleFormControlInput2" placeholder="Enter body">
        @error('body') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <button wire:click.prevent="updatep()" class="btn btn-dark">Update</button>
    <button wire:click.prevent="cancelp()" class="btn btn-danger">Cancel</button>
</form>