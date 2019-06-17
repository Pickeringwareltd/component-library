<label for="{{ $id }}" class="mb-1">{{ $label ?? '' }}</label>

<input id="{{ $id }}" type="{{ $type }}" class="text-input pl-2 form-input w-100" name="{{ $name }}" placeholder="{{ $placeholder ?? '' }}" value="{{ $value ?? '' }}" data-regex="{{ $regex ?? '' }}"/>

<small id="{{ $id }}_error" class="text-input__error mt-2">{{ $error_message ?? '' }}</small>
<img class="text-input__icon" src="/icons/green-tick.svg" />
<img id="{{ $id }}_error_icon" class="text-input__icon" src="/icons/red-cross.svg" />
