<?php
$flat_name = '';
if (isset($name)) {
    if (preg_match('/^(.+?)\[(.+?)\]$/i', $name)) {
        $flat_name = preg_replace('/^(.+?)\[(.+?)\]$/i', '$1.$2', $name);
    } else {
        $flat_name = $name;
    }
}
?>

<div class="form-group label-floating fileinput fileinput-new {{ $errors->has(@$flat_name)? 'has-error':'' }} "
     data-provides="fileinput">
    {{--<label for="{{ @$name }}" class="control-label">{{ @$label }}</label>--}}
    <br/>
    @if($errors->has(@$flat_name))
        <span class="help-block">{{ $errors->first(@$flat_name) }}</span>
    @endif
    {{--<div class="fileinput-preview thumbnail" data-trigger="fileinput"--}}
         {{--style="width: 200px; height: 150px; margin-top: 10px;">--}}
        {{--<img class="view_student_photo" src="{{ $flat_name }}">--}}
    {{--</div>--}}
    <div>
        <span class="btn btn-success btn-sm btn-file"><span class="fileinput-new"><i class="glyphicon glyphicon-upload"></i> Select image</span>
            <span class="fileinput-exists"><i class="glyphicon glyphicon-refresh"></i> Change</span>
            <input type="file" accept="image/*" name="{{ @$name }}" id="{{ @$name }}" {!! @$extras !!}></span>
        {{--<a href="#" class="btn btn-danger btn-sm fileinput-exists" data-dismiss="fileinput"><i class="material-icons"></i>--}}
            {{--Remove</a>--}}
    </div>
</div>
