<div class="flex overflow-hidden border border-base-300 divide-x divide-base-300 rounded pagination">
    <!-- Previous Page Link -->
    @if ($paginator->onFirstPage())
    <button class="relative inline-flex items-center px-2 py-2 text-sm font-medium leading-5 text-base-content bg-base-100"
        disabled>
        <span>&laquo;</span>
    </button>
    @else
    <button wire:click="previousPage"
        id="pagination-desktop-page-previous"
        class="relative inline-flex items-center px-2 py-2 text-sm font-medium leading-5 text-base-content transition duration-150 ease-in-out bg-base-100 hover:text-base-content focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-base-100 active:text-base-content">
        <span>&laquo;</span>
    </button>
    @endif

    <div class="divide-x divide-base-300">
        @foreach ($elements as $element)
        @if (is_string($element))
        <button class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 text-base-content bg-base-100" disabled>
            <span>{{ $element }}</span>
        </button>
        @endif

        <!-- Array Of Links -->

        @if (is_array($element))
        @foreach ($element as $page => $url)
        <button wire:click="gotoPage({{ $page }})"
                id="pagination-desktop-page-{{ $page }}"
                class="-mx-1 relative inline-flex items-center px-4 py-2 text-sm leading-5 font-medium text-base-content hover:text-base-content focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-base-100 active:text-base-content transition ease-in-out duration-150 {{ $page === $paginator->currentPage() ? 'bg-base-200' : 'bg-base-100' }}">
            {{ $page }}
            </button>
        @endforeach
        @endif
        @endforeach
    </div>

    <!-- Next Page Link -->
    @if ($paginator->hasMorePages())
    <button wire:click="nextPage"
        id="pagination-desktop-page-next"
        class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium leading-5 text-base-content transition duration-150 ease-in-out bg-red hover:text-base-content focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-base-100 active:text-base-content">
        <span>&raquo;</span>
    </button>
    @else
    <button
        class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium leading-5 text-base-content bg-base-100 "
        disabled><span>&raquo;</span></button>
    @endif
</div>
