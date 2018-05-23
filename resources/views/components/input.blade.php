<div class="form-group">
  @isset($label)
    <label class="form-label">
      {{ $label }}
    </label>
  @endisset
  <input type="{{ $type }}" class="form-control {{ isset($valid) ? (($valid) ? 'is-valid' : 'is-invalid' ) : '' }}" name="{{ $name }}" placeholder="{{ $placeholder }}">
</div>
