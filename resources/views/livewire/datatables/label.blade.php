<div class="table-cell px-6 align-middle py-2 whitespace-nowrap @if($column['align'] === 'right') text-right @elseif($column['align'] === 'center') text-center @else text-left @endif {{ $this->cellClasses($row, $column) }}">
    {!! $column['content'] ?? '' !!}
</div>
