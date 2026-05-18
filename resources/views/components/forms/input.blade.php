@props([
    'name',
    'label',
    'type' => 'text',
    'value' => '',
    'required' => false,
])

<div class="form__group">
    <label class="form__label" for="{{ $name }}">
        {{ $label }}

        @if($required)
            <span class="required_field">*</span>
        @endif
    </label>

    <input
        {{ $attributes->merge(['class' => 'form__input']) }}
        id="{{ $name }}"
        type="{{ $type }}"
        name="{{ $name }}"
        value="{{ old($name, $value) }}"
    >

    @error($name)
        <div class="form__error">{{ $message }}</div>
    @enderror
</div>