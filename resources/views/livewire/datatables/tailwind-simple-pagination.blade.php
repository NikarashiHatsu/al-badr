<div class="flex justify-between">
<!-- Previous Page Link -->
@if ($paginator->onFirstPage())
<div class="w-32 flex justify-between items-center relative px-4 py-2 border border-base-300 text-sm leading-5 font-medium rounded-md text-base-content bg-base-50">
    <x-icons.arrow-left />
    {{ __('Previous')}}
</div>
@else
<button wire:click="previousPage" id="pagination-mobile-page-previous" class="w-32 flex justify-between items-center relative px-4 py-2 border border-base-300 text-sm leading-5 font-medium rounded-md text-base-content bg-base-100 hover:text-base-content focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-base-100 active:text-base-content transition ease-in-out duration-150">
    <x-icons.arrow-left />
    {{ __('Previous')}}
</button>
@endif


<!-- Next Page pnk -->
@if ($paginator->hasMorePages())
<button wire:click="nextPage" id="pagination-mobile-page-next" class="w-32 flex justify-between items-center relative items-center px-4 py-2 border border-base-300 text-sm leading-5 font-medium rounded-md text-base-content bg-base-100 hover:text-base-content focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-base-100 active:text-base-content transition ease-in-out duration-150">
    {{ __('Next')}}
    <x-icons.arrow-right />
</button>
@else
<div class="w-32 flex justify-between items-center relative px-4 py-2 border border-base-300 text-sm leading-5 font-medium rounded-md text-base-content bg-base-50">
    {{ __('Next')}}
    <x-icons.arrow-right class="inline" />
</div>
@endif
</div>
