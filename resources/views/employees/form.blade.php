<div class="form-group">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') ?? $employee->name }}">

    @error('name')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') ?? $employee->email }}">

    @error('email')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="active" class="form-label">Status</label>
    <select class="form-select @error('active') is-invalid @enderror" id="active" name="active">
        <option value="" disabled>Select Employee Status</option>
        @foreach($employee->ActiveOptions() as $activeOptionKey => $activeOptionValue)
            <option value="{{ $activeOptionKey }}" {{ $employee->active == $activeOptionValue ? 'selected' : '' }}>
                {{ $activeOptionValue }}
            </option>
        @endforeach
    </select>

    @error('active')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>


{{-- <div class="form-group">
    <label for="item_id">Item</label>
    <select name="item_id" id="item_id" class="form-select">
        @foreach ($items as $item)
            <option value="{{ $item->id }}" {{ $item->id == $employee->item_id ? 'selected' : '' }}>{{ $item->name }}</option>
        @endforeach
    </select>
</div> --}}

@csrf
