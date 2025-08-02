@props(['name' => '', 'type' => 'text', 'label' => '', 'inputClass' => '','class' => '', 'value' => '', 'placeholder' => '', 'required' => false])

<div class="form-group {{$class}}">
    <label for="{{ $name }}">{{ $label }}
        @if ($required)
        <span class="text-danger">*</span>
        @endif
    </label>
    <input type="{{$type}}" name="{{ $name }}" class="{{ $inputClass }} form-control 
    @error($name) is-invalid 
    @enderror " placeholder="{{$placeholder}}" value="{{ $value }}">
    @error($name)
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>