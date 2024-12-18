@props(['field'])

@if ($errors->has($field))
    <div class="error">
        {{ $errors->first($field) }}
        <span class="close-btn" onclick="this.parentElement.style.display='none'">X</span>
    </div>
@endif
