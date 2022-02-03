<div
    wire:ignore
    x-data="{ values: @entangle($attributes->wire('model')), choices: null }"
    x-init="
        choices = new Choices($refs.multiple, {
            allowHTML: false,
            itemSelectText: '',
            removeItems: true,
            removeItemButton: true,
        });

        for (const [value, label] of Object.entries(values)) {
            choices.setChoiceByValue(`${label}`);
        }

        $refs.multiple.addEventListener('change', function(event) {
            values = [];
            Array.from($refs.multiple.options).forEach(function(option) {
                values.push(option.value || option.text);
            });
        })
    "
>
    <select x-ref="multiple" multiple>
        @foreach ($tags as $id => $tag)
            <option value="{{ $id }}">{{ $id }} {{ $tag }}</option>
        @endforeach
    </select>
</div>