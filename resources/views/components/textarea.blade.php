@props(['name', 'placeholder', 'value'=>null])

<label for="{{ $name }}">{{ $placeholder }}</label>
<textarea name="{{ $name }}" id="" rows="4" placeholder="{{ $placeholder }}" class="form-control">{{ $value }}</textarea>
