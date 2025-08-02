 @props(['name'=>'','value'=>'','label'=>'','placeholder'=>'','textClass'=>'','class'=>'','required'=>false])

 <div class="form-group {{$class}}">

     <label for="{{$name}}">{{ $label }}
         @if ($required)
         <span class="text-danger">*</span>
         @endif
     </label>

     <textarea
         name="{{$name}}"
         id="{{$name}}"
         class="form-control {{ $textClass }} @error($name) is-invalid  @enderror"
         placeholder="{{$placeholder}}">{!! $value !!}</textarea>

     @error($name)
     <div class="invalid-feedback">{{ $message }}</div>
     @enderror

 </div>