<div>
    {{-- Formulaire principal --}}
    <div class="row gy-2 gx-3 align-items-center">
        <div class="col-auto">
            <label class="visually-hidden" for="serviceInput">Services</label>
            <div class="input-group">
                <div class="input-group-text">+</div>
                <input type="text" class="form-control" name="data[*][service]" placeholder="Services..."
                    wire:model('serviceInput')>
                @error('serviceInput')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-auto">
            <label class="visually-hidden" for="observationInput">Observations</label>
            <div class="input-group">
                <div class="input-group-text">+</div>
                <textarea type="text" class="form-control" name="data[*][observation]" placeholder="Observations..."
                    wire:model('observationInput')></textarea>
                @error('observationInput')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-auto">
            <label class="visually-hidden" for="risqueInput">Risque</label>
            <select class="form-select" name="data[*][risque]" wire:model('risqueInput')>
                <option selected>Niveau De Risque...</option>
                <option value="1">Bas</option>
                <option value="2">Moyen</option>
                <option value="3">Elévé</option>
            </select>
            @error('risqueInput')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-auto">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="data[*][validCheck]">
                <label class="form-check-label" for="validCheck">
                    Validé
                </label>
            </div>
        </div>
        <div class="col-auto">
            <button type="button" class="btn btn-primary" wire:click="add({{ $i }})">AJOUTER
                NOUVEAU</button>
        </div>
    </div>


    {{-- Champs dynamiques --}}
    @foreach ($input as $key => $value)
        <div class="row gy-2 gx-3 align-items-center mt-3">
            <div class="col-auto">
                <label class="visually-hidden" for="serviceInput_{{ $key }}">Services</label>
                <div class="input-group">
                    <div class="input-group-text">+</div>
                    <input type="text" class="form-control" name="data[{{ $key }}][service]"
                        placeholder="Services...">
                </div>
            </div>
            <div class="col-auto">
                <label class="visually-hidden" for="observationInput_{{ $key }}">Observations</label>
                <div class="input-group">
                    <div class="input-group-text">+</div>
                    <textarea type="text" class="form-control" name="data[{{ $key }}][observation]" placeholder="Observations..."></textarea>
                </div>
            </div>
            <div class="col-auto">
                <label class="visually-hidden" for="risqueInput_{{ $key }}">Risque</label>
                <select class="form-select" name="data[{{ $key }}][risque]"
                    wire:model="input.{{ $key }}.risque">
                    <option selected>Niveau De Risque...</option>
                    <option value="1">Bas</option>
                    <option value="2">Moyen</option>
                    <option value="3">Elévé</option>
                </select>
            </div>
            <div class="col-auto">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="data[{{ $key }}][validCheck]"
                        wire:model="input.{{ $key }}.remember">
                    <label class="form-check-label" for="validCheck_{{ $key }}">
                        Validé
                    </label>
                </div>
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-danger"
                    wire:click="remove({{ $key }})">SUPPRIMER</button>
            </div>
        </div>
    @endforeach

</div>
