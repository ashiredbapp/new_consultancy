@csrf

<input type="hidden" name="id" value="{{$model->id??''}}"/>
<div class="form-body">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('name')?'has-error':'' }}">
                <label class="control-label col-md-3">Name
                    <span class="required" aria-required="true"> * </span>
                </label>
                <div class="col-md-9">
                    <input type="text" value="{{ old('name')??$model->name??'' }}" class="form-control" placeholder="" maxlength="25" name="name">
                    @if ($errors->has('name'))
                    <span class="help-block">{{ $errors->first('name') }}</span>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('email')?'has-error':'' }}">
                <label class="control-label col-md-3">Email
                    <span class="required" aria-required="true"> * </span>
                </label>
                <div class="col-md-9">
                    <input type="email" class="form-control" placeholder="" maxlength="40" name="email" value="{{ old('email')??$model->email??'' }}">
                    @if ($errors->has('email'))
                    <span class="help-block">{{ $errors->first('email') }}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-md-6">
            <div class="form-group {{ $errors->has('mobile')?'has-error':'' }}">
                <label class="control-label col-md-3">Mobile
                    <span class="required" aria-required="true"> * </span>
                </label>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="" maxlength="10" name="mobile"
                        value="{{ old('mobile')??$model->mobile??'' }}">
                    @if ($errors->has('mobile'))
                    <span class="help-block">{{ $errors->first('mobile') }}</span>
                    @endif
                </div>
            </div>
        </div>


        <div class="col-md-6">
            <div class="form-group {{ $errors->has('avatar')?'has-error':'' }}">
                <label class="control-label col-md-3">Avatar</label>
                <div class="col-md-9">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="input-group input-large">
                            <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                                <i class="fa fa-file fileinput-exists"></i>&nbsp;
                                <span class="fileinput-filename"></span>
                            </div>
                            <span class="input-group-addon btn default btn-file">
                                <span class="fileinput-new"> Select file </span>
                                <span class="fileinput-exists"> Change </span>
                                <input type="file" name="avatar">
                            </span>
                            <a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                        </div>
                        @if ($errors->has('avatar'))
                        <span class="help-block">{{ $errors->first('avatar') }}</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="row">

<div class="form-actions">
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
                    <button type="submit" class="btn green">Submit</button>
                    <button type="button" onclick="window.location='{{ route('user.index') }}'" class="btn default">Cancel</button>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <span class="required" aria-required="true"> * </span>Fields are mandatory </div>
        </div>
    </div>
</div>
