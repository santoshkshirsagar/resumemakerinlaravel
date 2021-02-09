<div>

<table class="table table-striped">
    <tr>
        <th>Qualification</th>
        <th>Year</th>
        <th>Percent</th>
    </tr>
@foreach($education as $row)
    <tr>
        <td>{{ $row->qualification }}</td>
        <td>{{ $row->year }}</td>
        <td>{{ $row->percent }}</td>
    </tr>
@endforeach
</table>

<form wire:submit.prevent="submit">
    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Qualification</label>
                                <input type="text" class="form-control" wire:model="qualification" required value="">
                                @error('qualification')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Year</label>
                                <input type="text" class="form-control"  wire:model="year"  value="">
                                @error('year')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Percent/Marks</label>
                                <input type="text" class="form-control" wire:model="percent"  value="">
                                @error('percent')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
    </div>
    <button  class="btn btn-sm btn-success" type="submit">Add</button>
</form>
                        
</div>
