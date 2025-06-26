<x-layout>
    <h1 style="font-size: 22px; font-weight: bold; margin-bottom: 20px;">Create New Note</h1>

    <form action="{{ route('notes.store') }}" method="POST">
        @csrf
        <div style="margin-bottom: 15px;">
            <label>Title:</label><br>
            <input type="text" name="title" required
                   style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label>Content:</label><br>
            <textarea name="content" rows="5" required
                      style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;"></textarea>
        </div>

        <button type="submit"
                style="padding: 10px 20px; background-color: #28a745; color: white; border: none; border-radius: 5px;">
            Save
        </button>
    </form>
</x-layout>
