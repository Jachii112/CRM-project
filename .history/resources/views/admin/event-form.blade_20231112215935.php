<x-modal-action action="{{ $action }}">
    @if ($data->id)
        @method('PUT')
    @endif
    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <input type="text" name="start_date" class="form-control">
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3">
                <input type="text" name="end_date" class="form-control">
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <textarea name="title" class="form-control"></textarea>
            </div>
        </div>
    </div>
</x-modal-action>
