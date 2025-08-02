 @props(['name'=>'','status'=>'','label'=>'','class'=>''])

 <div class="form-check form-switch {{$class}}">
     <input class="form-check-input" type="checkbox" role="switch"
         id="flexSwitchCheckChecked" name="{{$name}}" {{$status ? 'checked' : ''}}>
     <label class="form-check-label" for="flexSwitchCheckChecked">{{$label}}</label>
 </div>