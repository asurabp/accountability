<form>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Item Code</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="item_code">
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Item Description</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="item_description">
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Item Type</label>
        <div class="col-sm-10">
            <select class="form-select" name="item_type">
                <option value="">Material</option>
                <option value="">Tool</option>
                <option value="">Fixture</option>
                <option value="">Other</option>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <label for="inputState"class="col-sm-2 col-form-label">Source</label>
        <div class="col-sm-10">
            <select class="form-select" name="source">
                <option value="">Purchased</option>
                <option value="">Manufactured</option>
                <option value="">Transferred</option>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <label for="inputState"class="col-sm-2 col-form-label">Cost Type</label>
        <div class="col-sm-10">
            <select class="form-select" name="cost_type">
                <option value="">Actual</option>
                <option value="">Standard</option>
                <option value="">Transferred</option>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <label for="inputState"class="col-sm-2 col-form-label">Cost Method</label>
        <div class="col-sm-10">
            <select class="form-select" name="cost_method">
                <option value="">Average</option>
                <option value="">FIFO</option>
                <option value="">LIFO</option>
                <option value="">Specific</option>
                <option value="">Standard</option>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <label for="inputState"class="col-sm-2 col-form-label">ABC Code</label>
        <div class="col-sm-10">
            <select class="form-select" name="abc_code">
                <option value="">A</option>
                <option value="">B</option>
                <option value="">C</option>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <label for="inputState"class="col-sm-2 col-form-label">Product Code</label>
        <div class="col-sm-10">
            <select class="form-select" name="abc_code">
                <option value="">Product 1</option>
                <option value="">Product 2</option>
                <option value="">Product B</option>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Product Number</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3">
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Unit of Measure</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3">
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Unit Weight</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3">
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Purchase Unit</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3">
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Stock Unit</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3">
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Issue Unit</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3">
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">PVC Weight</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3">
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Nylon Weight</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">PE Weight</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">XLPE Weight</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Semicon Weight</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Standard Run</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3">
        </div>
    </div>

    <div class="row g-2">
        <div class="form-floating mb-3 col">
            <input type="email" class="form-control" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-3 col">
            <input type="email" class="form-control" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-3 col">
            <input type="email" class="form-control" id="floatingInput">
            <label for="floatingInput">Email address</label>
        </div>
    </div>
</form>
@csrf
