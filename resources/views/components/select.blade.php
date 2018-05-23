<div class="form-group">
  @isset($label)
    <label class="form-label">
      {{ $label }}
    </label>
  @endisset
  <select class="form-control custom-select">
    @foreach ($options as $option)
      <option value="{{ $option['value'] }}">{{ $option['name'] }}</option>
    @endforeach
  </select>
</div>
