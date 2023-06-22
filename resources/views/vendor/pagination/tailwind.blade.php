@if ($paginator->hasPages())
    <div class="row">
        <div class="col-lg-12">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <li class="page-item disabled">
                            <a class="page-link page-link-nav"  rel="prev" aria-label="Previous">
                                <span aria-hidden="true"><i class="la la-angle-right"></i></span>
                                <span class="sr-only">قبلی</span>
                            </a>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link page-link-nav" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="Previous">
                                <span aria-hidden="true"><i class="la la-angle-right"></i></span>
                                <span class="sr-only">قبلی</span>
                            </a>
                        </li>
                    @endif
                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li class="page-item disabled" aria-disabled="true"><span class="page-link page-link-nav">{{ $element }}</span></li>
                        @endif
                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="page-item active" aria-current="page"><a class="page-link page-link-nav" href="#">{{ $page }}<span class="sr-only">(جاری)</span></a></li>
                                @else
                                    <li class="page-item"><a class="page-link page-link-nav" href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <li class="page-item">
                            <a class="page-link page-link-nav" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                                <span aria-hidden="true"><i class="la la-angle-left"></i></span>
                                <span class="sr-only">بعدی</span>
                            </a>
                        </li>
                    @else
                        <li class="page-item disabled">
                            <a class="page-link page-link-nav"  aria-label="Next">
                                <span aria-hidden="true"><i class="la la-angle-left"></i></span>
                                <span class="sr-only">بعدی</span>
                            </a>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>

@endif
