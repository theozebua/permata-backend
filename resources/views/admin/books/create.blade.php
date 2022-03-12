<x-layouts.app title="{{ $title }}">
    <x-templates.row>
        <div class="col-12">
            <x-card>
                <x-card.body>
                    <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title" class="fs-6 required">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                                id="title" placeholder="Buku 1" aria-placeholder="Buku 1" autofocus required
                                aria-required="true" autocomplete="off" value="{{ old('title') }}">
                            @error('title')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description" class="fs-6 required">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror resize-none"
                                name="description" id="description" rows="10" required aria-required="true"
                                autocomplete="off">{{ old('description') }}</textarea>
                            @error('description')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="label fs-6" for="image">Image</div>
                            <input type="file" name="image" id="image"
                                class="form-control @error('image') is-invalid @enderror" accept="image/"
                                onchange="preview(this)">
                            @error('image')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <img class="img-fluid rounded w-50" id="preview-image">
                        </div>
                        <div class="form-group">
                            <div class="label fs-6" for="file">File</div>
                            <input type="file" name="file" id="file"
                                class="form-control @error('file') is-invalid @enderror" accept="application/pdf">
                            @error('file')
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
