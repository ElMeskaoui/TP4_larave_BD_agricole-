<form>
  
    <div class="form-group">
        <input type="hidden" wire:model="tar_description">
        <label for="exampleFormControlInput1">Tarif description</label>
        <input type="text" class="form-control" wire:model="tar_description" id="exampleFormControlInput1">
        @error('tar_description') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <input type="hidden" wire:model="tar_ero">
        <label for="exampleFormControlInput1">Tarif ero</label>
        <input type="text" class="form-control" wire:model="tar_ero" id="exampleFormControlInput1">
        @error('tar_ero')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <button wire:click.prevent="update()" class="btn btn-dark">Update</button>
    <button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</button>
</form>
