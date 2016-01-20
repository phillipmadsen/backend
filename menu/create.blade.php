@extends('backend/layout/layout')
@section('title')
    replace this text
@endsection
@section('meta')
    <meta name="_token" content="{!! csrf_token() !!}"/>
@endsection
@section('per-page-stylesheets')
 <link rel="stylesheet" href="{!! asset('/assets/css/menu-managment.css') !!}">
@endsection

@section('header-page-script')
 <script type="text/javascript">
    $(document).ready(function () {
        $('.type').change(function () {
                var selected = $('input[class="type"]:checked').val();
                if (selected == "custom") {
                    $('.modules').css('display', 'none');
                    $('.url').css('display', 'block');
                }
                else {
                    $('.modules').css('display', 'block');
                    $('.url').css('display', 'none');
                }
            }
        );
        $(".type").trigger("change");
    });
</script>
@endsection

 @section('pageheader')
<ol class="breadcrumb">
    <li> <i class="clip-cog-2"></i> <a href="{!! url(getLang(). '/admin/menu') !!}">Menu</a> </li>
    <li class="active"> Add Menu </li>
</ol>
<div class="page-header">
    <h1>Nestable Menu <small>manager</small></h1>
</div>
@endsection

@section('content')




<div class="col-md-11">

    {!! Form::open(array('action' => '\App\Http\Controllers\Admin\MenuController@store')) !!}
    <!-- Title -->
    <div class="control-group {!! $errors->has('title') ? 'has-error' : '' !!}">
        <label class="control-label" for="title">Title</label>

        <div class="controls">
            {!! Form::text('title', null, array('class'=>'form-control', 'id' => 'title', 'placeholder'=>'Title', 'value'=>Input::old('title'))) !!}
            @if ($errors->first('title'))
            <span class="help-block">{!! $errors->first('title') !!}</span>
            @endif
        </div>
        <br>
    </div>

    <!-- Type -->
    <label class="control-label" for="title">Type</label>

    <div class="controls">
        <div class="radio">
            <label>
                {!! Form::radio('type', 'module', true, array('id'=>'module', 'class'=>'type')) !!}
                <span>Module</span>
            </label>
        </div>
        <div class="radio">
            <label>
                {!! Form::radio('type', 'custom', false, array('id'=>'custom', 'class'=>'type')) !!}
                <span>Custom</span>
            </label>
        </div>
        <br>
    </div>

    <!-- Modules -->
    <div class="control-group {!! $errors->has('options') ? 'has-error' : '' !!} modules">
        <label class="control-label" for="title">Options</label>

        <div class="controls">
            {!! Form::select('option', $options, null, array('class'=>'form-control', 'id' => 'options', 'value'=>Input::old('options'))) !!}
            @if ($errors->first('options'))
            <span class="help-block">{!! $errors->first('options') !!}</span>
            @endif
        </div>
        <br>
    </div>

    <!-- URL -->
    <div style="display:none" class="control-group {!! $errors->has('url') ? 'has-error' : '' !!} url">
        <label class="control-label" for="first-name">URL</label>

        <div class="controls">
            {!! Form::text('url',null, array('class'=>'form-control', 'id' => 'url', 'placeholder'=>'Url', 'value'=>Input::old('url'))) !!}
            @if ($errors->first('url'))
            <span class="help-block">{!! $errors->first('url') !!}</span>
            @endif
        </div>
    </div>
    <br>
    <!-- Form actions -->
    {!! Form::submit('Save Changes', array('class' => 'btn btn-success')) !!}
    <a href="{!! langUrl('admin/menu') !!}" class="btn btn-default">&nbsp;Cancel</a>
    {!! Form::close() !!}

</div>
@endsection
@section('per-page-javascripts')@endsection
@section('footer-page-script')@endsection
@section('custom-in-script')
    Main.init();

@endsection