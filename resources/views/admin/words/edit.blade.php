<x-layouts.app title="{{ $title }}">
    <x-templates.row>
        <div class="col-12">
            <x-card>
                <x-card.body>
                    <form action="{{ route('words.update', $word->id) }}" method="POST">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label for="source" class="fs-6">Source</label>
                            <input type="text" class="form-control @error('source') is-invalid @enderror" name="source"
                                id="source" placeholder="Amsal 1 : 7" autofocus required aria-required="true"
                                autocomplete="off" value="{{ old('source', $word->source) }}">
                            @error('source')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="text" class="fs-6">Text</label>
                            <textarea class="form-control @error('text') is-invalid @enderror resize-none" name="text"
                                id="text" rows="10" required aria-required="true"
                                autocomplete="off">{{ old('text', $word->text) }}</textarea>
                            @error('text')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="label fs-6" for="date">Date</div>
                            <input type="date" name="date" id="date"
                                class="form-control @error('date') is-invalid @enderror" required aria-required="true"
                                value="{{ old('date', $word->date) }}">
                            @error('date')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn bg-gradient-primary d-block ms-auto">Save</button>
                        </div>
                    </form>
                </x-card.body>
            </x-card>
        </div>
    </x-templates.row>
</x-layouts.app>
