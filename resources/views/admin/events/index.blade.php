<x-layouts.app title="{{ $title }}">
    <x-toast />
    <x-templates.row>
        <div class="col-12">
            <x-card>
                <x-card.body>
                    <a href="{{ route('events.create') }}" class="bg-gradient-primary text-light fab"
                        data-bs-toggle="tooltip" data-bs-placement="top" title="Add" data-container="body"
                        data-animation="true">
                        <i class="fas fa-plus"></i>
                    </a>
                    <div class="table-responsive">
                        <table class="table table-flush" id="datatables">
                            <thead class="thead-light">
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Title
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Description
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Time
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($events as $event)
                                    <tr>
                                        <td class="text-sm font-weight-normal">{{ $loop->iteration }}</td>
                                        <td class="text-sm font-weight-normal">{{ $event->title }}</td>
                                        <td class="text-sm font-weight-normal text-wrap">{{ $event->description }}
                                        </td>
                                        <td class="text-sm font-weight-normal">{{ $event->start }}</td>
                                        <td class="text-sm font-weight-normal">{{ $event->time }}</td>
                                        <td class="text-sm font-weight-normal">
                                            <a href="{{ route('events.edit', $event->id) }}"
                                                class="btn btn-sm bg-gradient-warning" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Edit" data-container="body"
                                                data-animation="true">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <form action="{{ route('events.destroy', $event->id) }}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-sm bg-gradient-danger"
                                                    onclick="return confirm('Are you sure to delete this event?')"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"
                                                    data-container="body" data-animation="true">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </x-card.body>
            </x-card>
        </div>
    </x-templates.row>
</x-layouts.app>
