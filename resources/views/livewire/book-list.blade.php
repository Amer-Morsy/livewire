<div>
    <livewire:page-header subtitle="Here's a list of your book reviews...">

        {{-- Search    --}}
        <input
            type="text"
            wire:model.live.debounce.300ms="term"
            placeholder="search for books..."
            class="search"
        >

        <ul class="list">
            @foreach($books as $book)
                <li wire:key="{{$book->id}}">
                    <button
                        wire:click="delete({{$book->id}})"
                    >Delete
                    </button>
                    <h3>{{$book->title}}</h3>
                    <h4>{{$book->author}}</h4>
                    <p>Rating: {{$book->rating}}/10</p>
                </li>
            @endforeach
        </ul>
</div>
