<div class="form-group">
    <label for="employee_id" class="form-label">Employee</label>
    <select class="form-control @error('employee_id') is-invalid @enderror" id="employee_id" name="employee_id">
        <option value="">-- Select Employee --</option>
        @foreach ($employees as $employee)
            <option value="{{ $employee->id }}" {{ $employee->id == old('employee_id', $issuance->employee_id) ? 'selected' : '' }}>
                {{ $employee->name }}
            </option>
        @endforeach
    </select>

    @error('employee_id')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="item_id" class="form-label">Item</label>
    <select class="form-control @error('item_id') is-invalid @enderror" id="item_id" name="item_id">
        <option value="">-- Select Item --</option>
        @foreach ($items as $item)
            <option value="{{ $item->id }}" {{ $item->id == old('item_id', $issuance->item_id) ? 'selected' : '' }}>
                {{ $item->name }}
            </option>
        @endforeach
    </select>

    @error('item_id')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="quantity" class="form-label">Quantity</label>
    <input type="text" class="form-control @error('quantity') is-invalid @enderror" id="quantity" name="quantity" value="{{ old('quantity') ?? $issuance->quantity }}">

    @error('quantity')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="amount" class="form-label">Amount</label>
    <input type="text" class="form-control @error('amount') is-invalid @enderror" id="amount" name="amount" value="{{ old('amount') ?? $issuance->amount }}">

    @error('amount')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="remark" class="form-label">Remarks</label>
    <textarea class="form-control" id="remark" name="remark">{{ old('remark') ?? $issuance->remark }}</textarea>
</div>

@csrf
