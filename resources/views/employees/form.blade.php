<div class="form-group">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name="name" value="{{ old('name') ?? $employee->name }}">
    <div>{{ $errors->first('name') }}</div>
</div>

<div class="form-group">
    <label class="form-label">Email</label>
    <input type="text" class="form-control" name="email" value="{{ old('email') ?? $employee->email }}">
    <div>{{ $errors->first('email') }}</div>
</div>

<div class="form-group">
    <label class="form-label">Status</label>
    <select name="active" id="active" class="form-select">
        <option value="" disabled>Select Employee Status</option>

        @foreach($employee->ActiveOptions() as $activeOptionKey => $activeOptionValue)
            <option value="{{ $activeOptionKey }}" {{ $employee->active == $activeOptionValue ? 'selected' : ''}}>{{ $activeOptionValue }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="item_id">Item</label>
    <select name="item_id" id="item_id" class="form-select">
        @foreach ($items as $item)
            <option value="{{ $item->id }}" {{ $item->id == $employee->item_id ? 'selected' : '' }}>{{ $item->name }}</option>
        @endforeach
    </select>
</div>
@csrf