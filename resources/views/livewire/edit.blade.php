<h2>Edit Form</h2>
<form>
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input wire:model="title" type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
      @error('title')
        <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="body" class="form-label">Body</label>
      <input wire:model="body" type="text" class="form-control" id="body" name="body">
      @error('body')
        <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>

    <button wire:click.prevent="update()" type="submit" class="btn btn-success">Update</button>
    <button wire:click.prevent="updatecancel()" type="submit" class="btn btn-danger">Cancel</button>

  </form>

