<div class="form-group">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name="name">
    <div>{{ $errors->first('name') }}</div>
</div>


@csrf