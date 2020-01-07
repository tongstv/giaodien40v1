
@if ($paginator->hasPages())
    <div class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())


            <a href="#" class="pagination-item disabled">« Trước</a>

        @else


            <a href="{{ $paginator->previousPageUrl() }}" class="pagination-item">« Trước</a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <l

                <a href="#" class="pagination-item disabled">{{ $element }}</a>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())

                        <a href="#" class="pagination-item active">{{ $page }}</a>
                    @else

                        <a href="{{ $url }}" class="pagination-item ">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())


            <a href="{{ $paginator->nextPageUrl() }}" class="pagination-item">Tiếp »</a>
        @else
            <a href="#" class="pagination-item disabled">Tiếp »</a>
        @endif
    </div>
@endif
