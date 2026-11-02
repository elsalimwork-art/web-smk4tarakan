<div class="max-w-5xl mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6 text-center">Daftar File Pengumuman</h1>

    @foreach ($files as $file)
    <div class="mb-8 border border-gray-300 rounded-lg p-4 bg-white shadow-md">
        <h2 class="text-xl font-semibold mb-2">{{ $file->file_name }}</h2>

        <div class="h-64 overflow-y-scroll border rounded bg-gray-50 mb-3">
            @php
            $ext = pathinfo($file->file_name, PATHINFO_EXTENSION);
            @endphp

            @if ($ext === 'txt')
            <pre class="text-sm p-2 whitespace-pre-wrap text-gray-800">
            {{ file_get_contents(storage_path('app/' . $file->path)) }}
            </pre>
            @elseif ($ext === 'pdf')
            <iframe src="{{ asset('storage/' . $file->path) }}" class="w-full h-full" frameborder="0"></iframe>
            @else
            <p class="text-gray-500 p-2">Preview tidak tersedia untuk file ini.</p>
            @endif
        </div>

        <button wire:click="download({{ $file->id }})"
            class="bg-purple-600 hover:bg-purple-700 text-white font-semibold py-2 px-4 rounded">
            Unduh File
        </button>
    </div>
    @endforeach
</div>