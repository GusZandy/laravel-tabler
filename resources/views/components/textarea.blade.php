<div class="form-group">
  @isset($label)
    <label class="form-label">
      {{ $label }}
      @isset($label_small)
        <span class="form-label-small">{{ $label_small }}</span>
      @endisset
    </label>
  @endisset
  <textarea class="form-control" name="{{ $name }}" rows="{{ $row }}" placeholder="{{ $placeholder }}">
    {{ isset($text) ? $text : '' }}
  </textarea>
</div>
