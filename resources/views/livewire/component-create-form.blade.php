<form wire:submit="store">
    <div class="mb-3">
        <label for="name" class="form-label">name</label>
        <input type="type" class="form-control" id="name" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">description</label>
        <input type="text" class="form-control" wire:model="description" id="edescription">
    </div>
    <div class="mb-3 form-check">
        <input for="img" type="file" class="form-check-input" id="img">
        <label class="form-label" for="img">image</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <select class="form selected" wire:model="category_id" id="category" class="arial label">selezione una categoria di bag</select>
    @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
    @endforeach
</form>
