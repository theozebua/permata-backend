<x-layouts.app title="{{ $title }}">
    <x-templates.row>
        <div class="col-12 mb-lg-0 mb-4">
            <x-card>
                <x-card.body>
                    <span class="text-uppercase text-center d-block fw-bolder fs-5 mb-2">Word Of The Day</span>
                    @if ($word)
                        <p class="text-center">{{ $word->text }}</p>
                        <p class="text-center small">{{ $word->source }}</p>
                    @else
                        <div class="alert alert-info text-light text-center" role="alert">
                            <strong>Sorry</strong>, Word of the day haven't set yet.
                        </div>
                    @endif
                </x-card.body>
            </x-card>
        </div>
    </x-templates.row>
    <x-templates.row class="mt-lg-4">
        <div class="col-lg-5 mb-lg-0 mb-4">
            <x-card>
                <div class="card-header p-3">
                    <x-templates.row>
                        <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">News</h6>
                        </div>
                        <div class="col-6 text-end">
                            <a class="text-body text-sm font-weight-bold mb-4 pt-2 icon-move-right" href="javascript:;">
                                News List
                                <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                            </a>
                        </div>
                    </x-templates.row>
                </div>
                <x-card.body>
                    <ul class="list-group">
                        @foreach ($news->take(4) as $news)
                            @php
                                $date = date_create($news->date);
                                $formatedDate = date_format($date, 'D, d M Y');
                            @endphp
                            <li
                                class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark font-weight-bold text-sm">
                                        {{ $formatedDate }}
                                    </h6>
                                    <span class="text-xs">{{ $news->title }}</span>
                                </div>
                                <div class="d-flex align-items-center text-sm">
                                    <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Detail"
                                        data-container="body" data-animation="true"><i
                                            class="fas fa-eye text-lg me-1"></i>
                                    </button>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </x-card.body>
            </x-card>
        </div>
        <div class="col-lg-7 mb-lg-0 mb-4">
            <x-card class="card-calendar">
                <span class="fw-bolder">Events</span>
                <x-card.body>
                    <div class="calendar" data-bs-toggle="calendar" id="calendar"></div>
                </x-card.body>
            </x-card>
        </div>
    </x-templates.row>
    <x-templates.row class="mt-lg-4">
        <div class="col-lg-8 mb-lg-0 mb-4">
            <x-card>
                <x-card.body>
                    <x-templates.row>
                        <div class="col-md-6 order-1 order-md-0 mt-3">
                            <div class="d-flex flex-column h-100">
                                <p class="mb-1 pt-2 text-bold">Latest Book</p>
                                <span class="h5 font-weight-bolder">{{ $books[0]->title }}</span>
                                <p class="mb-5">{{ $books[0]->description }}</p>
                                <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto"
                                    href="javascript:;">
                                    Read More
                                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-5 ms-auto text-center mt-md-5 mt-md-0">
                            <div class="position-relative d-flex align-items-center justify-content-center h-100">
                                <img class="w-100 position-relative z-index-2 border-radius-lg"
                                    src="{{ $books[0]->image ? $books[0]->image : 'https://via.placeholder.com/300x400' }}"
                                    alt="{{ $books[0]->title }}">
                            </div>
                        </div>
                    </x-templates.row>
                </x-card.body>
            </x-card>
        </div>
        <div class="col-lg-4 mb-lg-0 mb-4">
            <x-card>
                <x-card.body class="position-relative z-index-1 d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="font-weight-bolder mb-4 pt-2">All Books</span>
                        <a class="text-body text-sm font-weight-bold mb-4 pt-2 icon-move-right" href="javascript:;">
                            Book List
                            <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                        </a>
                    </div>
                    <x-templates.row>
                        @foreach ($books->take(5)->skip(1) as $book)
                            <div class="col-6 mb-4">
                                <a href="javascript:;">
                                    <img class="img-fluid border-radius-md"
                                        src="{{ $book->image ? $book->image : 'https://via.placeholder.com/300x400' }}"
                                        alt="{{ $book->title }}">
                                </a>
                            </div>
                        @endforeach
                    </x-templates.row>
                </x-card.body>
            </x-card>
        </div>
    </x-templates.row>
</x-layouts.app>
