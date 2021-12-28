@if (session()->has('success'))
<div class="bg-green-100 text-green-600 px-4 py-3 rounded mb-6 border border-green-300">
    {{ session()->get('success') }}
</div>
@endif

@if (session()->has('error'))
<div class="bg-red-100 text-red-600 px-4 py-3 rounded mb-6 border border-red-300">
    {{ session()->get('error') }}
</div>
@endif

@if ($errors->any())
<div class="bg-red-100 text-red-600 px-4 py-3 rounded mb-6 border border-red-300">
    Error validasi:
    <ul class="list-disc ml-4">
        @foreach ($errors as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif