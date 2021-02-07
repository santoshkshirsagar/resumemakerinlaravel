<div>
                    <div class="mb-3">
                        <label class="form-label">Country</label>
                        <select class="form-control" wire:model="country" name="country" id="country">
                            @foreach($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                        @error('country')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">States</label>
                        <select class="form-control"  wire:model="state"  name="state" id="state">
                            <option value="">Select State</option>
                            @foreach($states as $state)
                                <option value="{{ $state->id }}">{{ $state->name }}</option>
                            @endforeach
                        </select>
                        @error('state')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">City</label>
                        <select class="form-control"  wire:model="city"  name="city" id="city">
                            <option value="">Select City</option>
                            @foreach($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>
                        @error('city')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>


</div>
