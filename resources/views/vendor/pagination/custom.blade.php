@if ($paginator->hasPages())
<ul class="pagination">
    @if ($paginator->onFirstPage())
        <li class="page-item disabled"><a class="page-link" href="#"><i class="bi bi-arrow-left-short"></i> {{__('Previous')}}</a></li>
    @else
        <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">← {{__('Previous')}}</a></li>
    @endif

    @foreach ($elements as $element)
        @if (!empty($element) && is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="page-item active"><a class="page-link active" title="{{ $page }}" href="#">{{ $page }}</a></li>
                @elseif($page == $paginator->currentPage())
                    <li class="page-item active"><a class="page-link active" title="{{ $page }}" href="#">{{ $page }}</a></li>
                @else
                    <li class="page-item"><a class="page-link" title="{{ $page }}" href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach

    @if ($paginator->hasMorePages())
        <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="prev">{{__('Next')}}<i class="bi bi-arrow-right-short"></i></a></li>
    @else
        <li class="page-item disabled"><a class="page-link" href="#">{{__('Next')}}<i class="bi bi-arrow-right-short"></i></a></li>
    @endif
</ul>
@endif
