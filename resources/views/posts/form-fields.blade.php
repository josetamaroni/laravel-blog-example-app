
<div>
    <x-input-label for="title" :value="__('Title')" />
        <x-text-input id="title" type="text" name="title" value="{{old('title', $post->title)}}"/>
        <x-input-error :messages="$errors->get('title')" />
        {{-- @error('title')
        <span style="color: red;">{{ $message }}</span>
        @enderror     --}}
</div>
<div>
<x-input-label for="body" :value="__('Body')" />
    <x-textarea id="body" name="body">{{old('body', $post->body)}}</x-textarea>
    <x-input-error :messages="$errors->get('body')" />

    {{-- @error('body')
        <span style="color: red;">{{ $message }}</span>
    @enderror --}}
</div>