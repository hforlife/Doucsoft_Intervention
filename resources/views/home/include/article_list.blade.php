<div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-body-tertiary" style="width: 380px;">
    <strong class="mb-1">Listes des Formations</strong>

    @foreach ($formateur as $formateurs)
        <div class="list-group list-group-flush border-bottom scrollarea" id="scroll">
            <a href="{{ url('article/' . $formateurs->id) }}" class="list-group-item list-group-item-action py-3 lh-sm"
                aria-current="true">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <strong class="mb-1">{{ $formateurs->title }}</strong>
                    <small>{{ $formateurs->start_date }}</small>
                </div>
                {{-- <div class="col-10 mb-1 small">{{ $formateurs->description }}</div> --}}
            </a>
        </div>
    @endforeach
</div>
