<x-layouts.app title="{{ $title }}">
    <x-templates.row>
        <div class="col-12">
            <x-card>
                <x-card.body>
                    <form action="{{ route('events.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title" class="fs-6">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                                id="title" placeholder="Event A" autofocus required aria-required="true"
                                autocomplete="off">
                            @error('title')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description" class="fs-6">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror resize-none"
                                name="description" id="description" rows="10" required aria-required="true"
                                autocomplete="off"></textarea>
                            @error('description')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="label fs-6" for="start">Date</div>
                            <input type="date" name="start" id="start"
                                class="form-control @error('start') is-invalid @enderror" required aria-required="true"
                                value="{{ old('start', date('Y-m-d')) }}">
                            @error('start')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="label fs-6" for="time">Time</div>
                            <input type="time" name="time" id="time"
                                class="form-control @error('time') is-invalid @enderror" required aria-required="true"
                                value="{{ old('time', date('H:i:s')) }}">
                            @error('time')
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
