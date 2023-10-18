<div class="form-group">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') ?? $item->name }}">

    @error('name')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

@csrf
