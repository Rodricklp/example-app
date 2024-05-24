@csrf
<div class="mb-5">
    <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 ">Usuario</label>
    <select name="user_id">
        <option value="">Seleccione usuario...</option>
        @foreach ($users as $item)
            <option value="{{ $item->id }}">
                {{ $item->name }}
            </option>
        @endforeach
    </select>
    @error('user_id')
        {{ $message }}
    @enderror
</div>

<div class="mb-5">
    <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 ">Title</label>
    <input type="text" name="title" value="{{isset($post) ? $post->title : '' }}"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
    @error('title')
        {{ $message }}
    @enderror
</div>
<div class="mb-5">
    <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 ">Body</label>
    <input type="text" name="body" value="{{isset($post) ? $post->body : '' }}"
     class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500">
    @error('body')
        {{ $message }}
    @enderror
</div>

<div class="mb-5">
    <img src="{{ isset($post) ? asset('storage') . '/' . $post->image : '' }}">
    <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 ">Image</label>
    <input type="file" name="image"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
    @error('image')
        {{ $message }}
    @enderror
</div>

<div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">Save</button>
</div>