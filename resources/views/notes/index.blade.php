<x-layout>
    <h1 style="font-size: 24px; font-weight: bold; margin-bottom: 20px;">Notes</h1>

    <a href="{{ route('notes.create') }}"
       style="display: inline-block; margin-bottom: 20px; padding: 10px 15px; background-color: #007bff; color: white; text-decoration: none; border-radius: 5px;">
        + New Note
    </a>

    @foreach ($notes as $note)
        <div style="border: 1px solid #ddd; padding: 15px; border-radius: 8px; margin-bottom: 15px;">
            <h2 style="margin: 0 0 10px 0; font-size: 20px;">{{ $note->title }}</h2>
            <p style="margin-bottom: 15px;">{{ $note->content }}</p>

            <a href="{{ route('notes.edit', $note) }}"
               style="padding: 6px 12px; background-color: #ffc107; color: white; text-decoration: none; border-radius: 5px; margin-right: 10px;">
                Edit
            </a>

            <form action="{{ route('notes.destroy', $note) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button type="submit"
                        style="padding: 6px 12px; background-color: #dc3545; color: white; border: none; border-radius: 5px;">
                    Delete
                </button>
            </form>
        </div>
    @endforeach
</x-layout>
