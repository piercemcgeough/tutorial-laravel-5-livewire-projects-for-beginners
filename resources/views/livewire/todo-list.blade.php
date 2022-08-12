<div class="container">
    <div class="d-flex justify-content-center align-items-center">
        <input
            type="text"
            class="form-control"
            placeholder="Type and hit enter to add"
            wire:model="todoText"
            wire:keydown.enter="store"
        />

        <button type="button"
            class="btn btn-info ms-2"
            wire:click="store"
        >
            Add
        </button>
    </div>

    <ul class="list-group mt-4 mb-0">
        @forelse ($todos as $todo)
            <li class="list-group-item d-flex align-items-center border-0 mb-2 rounded bg-light">
                <input
                    class="form-check-input me-2"
                    type="checkbox"
                    {{ $todo['completed'] ? 'checked' : '' }}
                    wire:change="toggleTodo({{ $todo }})"
                />

                @if ($todo['completed'])
                    <s>{{ $todo['todo'] }}</s>
                @else
                    {{ $todo['todo'] }}
                @endif

                <button
                    class="btn btn-danger ms-auto"
                    wire:click="delete({{ $todo }})"
                >
                    X
                </button>
            </li>
        @empty
            <li class="list-group-item d-flex align-items-center border-0 mb-2 rounded bg-light">
                No items in todo list
            </li>
        @endforelse
    </ul>
</div>
