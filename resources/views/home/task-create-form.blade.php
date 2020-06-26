
@csrf

<input type="hidden" name="id" value="{{$model->id??''}}" />
<div class="form-body">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('cell_id')?'has-error':'' }}">
                <label class="control-label col-md-3">Cell Name <span class="required" aria-required="true"> * </span>
                </label>
                <div class="col-md-9">
                    <select id="cell_name" class="form-control" name='cell_id'>
                        <option value=""> Select Cell </option>
                        @foreach($auth_cells as $auth_development)
                        <option value="{{ $auth_development->id }}"
                            {{ (old('cell_id')??$model->cell_id) == $auth_development->id?'selected':''}}>
                            {{$auth_development->name}}</option>
                        @endforeach
                    </select>

                    @if ($errors->has('cell_id'))
                    <span class="help-block">{{ $errors->first('cell_id') }}</span>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label col-md-3">Sprint</label>
                <div class="col-md-9">
                    <select class="form-control" name='sprint' id="sprint_name">
                        <option value=""> Select Sprint </option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('epic_id')?'has-error':'' }}">
                <label class="control-label col-md-3">Epic <span class="required" aria-required="true"> * </span>
                </label>
                <div class="col-md-9">
                    <select class="form-control" name="epic_id" id="epics">
                        <option value=""> Select Epic </option>
                    </select>
                    @if ($errors->has('epic_id'))
                    <span class="help-block">{{ $errors->first('epic_id') }}</span>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('feature_id')?'has-error':'' }}">
                <label class="control-label col-md-3">Feature <span class="required" aria-required="true"> * </span>
                </label>
                <div class="col-md-9">
                    <select class="form-control" name='feature_id' id="features">
                        <option value=""> Select Feature </option>
                    </select>
                    @if ($errors->has('feature_id'))
                    <span class="help-block">{{ $errors->first('feature_id') }}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('story_id')?'has-error':'' }}">
                <label class="control-label col-md-3">Story <span class="required" aria-required="true"> * </span>
                </label>
                <div class="col-md-9">
                    <select class="form-control" name='story_id' {{ session('story')?'disabled':'' }} id="stories">
                        <option value=""> Select Story </option>
                    </select>
                    @if ($errors->has('story_id'))
                    <span class="help-block">{{ $errors->first('story_id') }}</span>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('name')?'has-error':'' }}">
                <label class="control-label col-md-3">Task Name <span class="required" aria-required="true"> * </span>
                </label>
                <div class="col-md-9">
                    <input type="text" name="name" class="form-control" placeholder=""
                        value="{{old('name')??$model->name??''}}">
                    @if ($errors->has('name'))
                    <span class="help-block">{{ $errors->first('name') }}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('description')?'has-error':'' }}">
                <label class="control-label col-md-3">Description <span class="required" aria-required="true"> * </span>
                </label>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="" name="description"
                        value="{{old('description')??$model->description??''}}">
                    @if ($errors->has('description'))
                    <span class="help-block">{{ $errors->first('description') }}</span>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('size')?'has-error':'' }}">
                <label class="control-label col-md-3">Size <span class="required" aria-required="true"> * </span>
                </label>
                <div class="col-md-9">
                    <select class="form-control" name='size'>
                    <option value="">Select Size</option>
                    @php
                    $_fibo = [0, 1, 2, 3, 5, 8, 13]
                    @endphp
                    @foreach($_fibo as $each)
                        <option value="{{ $each }}" {{ (old('size')??$model->size)==$each?'selected':'' }}>{{ $each }}</option>
                    @endforeach
                   </select>
                    @if ($errors->has('size'))
                    <span class="help-block">{{ $errors->first('size') }}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('start_date')?'has-error':'' }}">
                <label class="control-label col-md-3">Start Date
                    <span class="required" aria-required="true"> * </span>
                </label>
                <div class="col-md-9">
                    <input class="form-control date-picker" name="start_date"
                        value="{{ old('start_date')??$model->start_date??'' }}" placeholder="DD-MM-YYYY">
                    @if ($errors->has('start_date'))
                    <span class="help-block">{{ $errors->first('start_date') }}</span>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('end_date')?'has-error':'' }}">
                <label class="control-label col-md-3">End Date
                    <span class="required" aria-required="true"> * </span>
                </label>
                <div class="col-md-9">
                    <input class="form-control date-picker" name="end_date"
                        value="{{ old('end_date')??$model->end_date??'' }}" placeholder="DD-MM-YYYY">
                    @if ($errors->has('end_date'))
                    <span class="help-block">{{ $errors->first('end_date') }}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label col-md-3">Developer</label>
                <div class="col-md-9">
                    <select class="form-control" name='developer' disabled>
                        <option value="{{ $developer->id}}" {{$developer->id === $model->developer?'selected':'' }}>
                            {{$developer->name.' '."(".$developer->das_id.")"}}</option>
                    </select>
                    <span class="help-block">
                    </span>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('dependency')?'has-error':'' }}">
                <label class="control-label col-md-3">Dependency</label>
                <div class="col-md-9">
                    <select class="form-control" name='dependency' id="choose_dependency">
                        @if( old('dependency')=='1' || old('dependency')=='0' )
                        <option value="1" {{ old('dependency')=='1'?'selected':'' }}>Yes</option>
                        <option value="0" {{ old('dependency')=='0'?'selected':'' }}>No</option>
                        @else
                        <option value="1" {{ $model->dependency=='Yes'?'selected':'' }}>Yes</option>
                        <option value="0" {{ $model->dependency=='No'?'selected':'' }}>No</option>
                        @endif
                    </select>
                    @if ($errors->has('dependency'))
                    <span class="help-block">{{ $errors->first('dependency') }}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="dependency" style="display:none;">
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('dependency_cell_id')?'has-error':'' }}">
                <label class="control-label col-md-3">Dependency Cell Name</label>
                <div class="col-md-9">
                    <select class="form-control" name='dependency_cell_id'>
                        <option value=""> Select Dependency Cell </option>
                        @foreach($cells as $development)
                        <option value="{{ $development->id}}" {{$development->id===$model->department?'selected':'' }}>
                            {{$development->name}}</option>
                        @endforeach
                        <option value="Others">Others</option>
                    </select>
                    @if ($errors->has('dependency_cell_id'))
                    <span class="help-block">{{ $errors->first('dependency_cell_id') }}</span>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('dependency_detail')?'has-error':'' }}">
                <label class="control-label col-md-3">Dependency Detail</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="" name="dependency_detail"
                        value="{{old('dependency_detail')??$model->dependency_detail??''}}">
                    @if ($errors->has('dependency_detail'))
                    <span class="help-block">{{ $errors->first('dependency_detail') }}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label col-md-3">SIT Testing</label>
                <div class="col-md-9">
                    <select class="form-control" name='sit'>
                        @if( old('sit')=='1' || old('sit')=='0' )
                        <option value="1" {{ old('sit')=='1'?'selected':'' }}>Yes</option>
                        <option value="0" {{ old('sit')=='0'?'selected':'' }}>No</option>
                        @else
                        <option value="1" {{ $model->sit=='Yes'?'selected':'' }}>Yes</option>
                        <option value="0" {{ $model->sit=='No'?'selected':'' }}>No</option>
                        @endif
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="form-actions">
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
                    <button type="submit" class="btn green">Submit</button>
                    <button type="button" onclick="window.location='{{ route('task.index') }}'"
                        class="btn default">Cancel</button>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <span class="required" aria-required="true"> * </span> Fields are mandatory </div>
    </div>
</div>
