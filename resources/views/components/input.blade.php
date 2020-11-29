@props(['name', 'type'=>'text', 'placeholder', 'value'=>null])

<div class="form-group">
    <label for="{{ $name }}">{{ $placeholder }}</label>
    <input type="{{ $type }}" class="form-control" name="{{ $name }}" placeholder="{{ $placeholder }}" value="{{ $value }}">
</div>
