<div>
    {{-- Be like water. --}}
    <div>
        {{-- Formulaire principal --}}
        <div class="row gy-2 gx-3 align-items-center">
            <div class="col-auto">
                <label class="visually-hidden" for="serviceInput">Contenu</label>
                <div class="input-group">
                    <div class="input-group-text">+</div>
                    <input type="text" class="form-control" name="data[*][content]" placeholder="Contenu..."
                        wire:model('contentInput')>
                    @error('serviceInput')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
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
                    <label class="visually-hidden" for="contentInput_{{ $key }}">Contenu</label>
                    <div class="input-group">
                        <div class="input-group-text">+</div>
                        <input type="text" class="form-control" name="data[{{ $key }}][content]"
                            placeholder="Contenu...">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="data[{{ $key }}][validCheck]"
                            wire:model="input.{{ $key }}.validCheck">
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
    
</div>
