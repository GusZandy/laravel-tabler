<div class="form-group">
  @isset($label)
    <label class="form-label">
      {{ $label }}
    </label>
  @endisset
  <div class="custom-controls-stacked">
    @foreach ($checkboxes as $checkbox)
      <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" name="{{ $checkboxes['name'] }}" value="{{ $checkboxes['value'] }}">
        <span class="custom-control-label">{{ $checkboxes['name'] }}</span>
      </label>
    @endforeach
  </div>
</div>
