<x-layout>
    <h1 style="font-size: 22px; font-weight: bold; margin-bottom: 20px;">Edit Note</h1>

    <form action="{{ route('notes.update', $note) }}" method="POST">
        @csrf @method('PUT')

        <div style="margin-bottom: 15px;">
            <label>Title:</label><br>
            <input type="text" name="title" value="{{ $note->title }}" required
                   style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label>Content:</label><br>
            <textarea name="content" rows="5" required
                      style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">{{ $note->content }}</textarea>
        </div>

        <button type="submit"
                style="padding: 10px 20px; background-color: #17a2b8; color: white; border: none; border-radius: 5px;">
            Update
        </button>
    </form>
</x-layout>
