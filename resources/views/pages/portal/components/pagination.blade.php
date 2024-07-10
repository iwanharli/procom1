<div class="pb-100 page-pagination theme-pagination">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="Page navigation">
                    <ul class="pagination ico-20 justify-content-center">
                        {{-- Previous Page Link --}}
                        @if (!$postData->onFirstPage())
                            <li class="page-item">
                                <a class="page-link" href="{{ $postData->previousPageUrl() }}" tabindex="-1">
                                    {{-- <span class="flaticon-back"></span>  --}}
                                    PREV
                                </a>
                            </li>
                        @endif

                        {{-- Page Links --}}
                        @for ($i = 1; $i <= $postData->lastPage(); $i++)
                            <li class="page-item {{ $postData->currentPage() == $i ? 'active' : '' }}">
                                <a class="page-link" href="{{ $postData->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor

                        {{-- Next Page Link --}}
                        @if ($postData->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $postData->nextPageUrl() }}" aria-label="Next">
                                    {{-- <span class="flaticon-next"></span>  --}}
                                    NEXT
                                </a>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div>
