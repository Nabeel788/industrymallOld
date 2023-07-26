@if ($paginator->hasPages())
    <ul class="pagination">
        @if ($paginator->onFirstPage())
            <li class="page-item prev disabled">
                <a href="javascript:void(0);" aria-label="Previous" tabindex="-1" aria-disabled="true">
                    <i class="w-icon-long-arrow-left"></i>Prev
                </a>
            </li>
        @else
        <li class="prev page-item">
            <a href="{{ $paginator->previousPageUrl() }}" aria-label="Previous" tabindex="-1" aria-disabled="true">
                <i class="w-icon-long-arrow-left"></i>Prev
            </a>
        </li>
        @endif

        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="page-item disabled">{{ $element }}</li>
            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active">
                            <a class="page-link">{{ $page }}</a>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach
        {{-- <li class="page-item active">
            <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">2</a>
        </li> --}}
        {{-- @if ($paginator->hasMorePages()) --}}
        {{-- <li class="next">
            <a href="#" aria-label="Next">
                Next<i class="w-icon-long-arrow-right"></i>
            </a>
        </li> --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">Next &nbsp;<i class="w-icon-long-arrow-right"></i></a>
            </li>
        @else
        <li class="page-item disabled">
            <a class="page-link" href="javascript:void(0);" rel="next">Next &nbsp;<i class="w-icon-long-arrow-right"></i></a>
        </li>
        @endif
    </ul>
@endif
