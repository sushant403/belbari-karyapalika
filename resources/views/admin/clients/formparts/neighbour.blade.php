<div class="row py-2">
    <div class="col-7">
        <div class="form-group {{ $errors->has('neighbour1') ? 'has-error' : '' }}">
            <label for="neighbour1">Neighbour One</label>
            <input type="text" id="neighbour1" name="neighbour1" class="form-control"
                value="{{ old('neighbour1', isset($client) ? $client->neighbour1 : '') }}" >
            @if($errors->has('neighbour1'))
            <em class="invalid-feedback">
                {{ $errors->first('neighbour1') }}
            </em>
            @endif
        </div>
    </div>
    <div class="col-5">
        <div class="form-group {{ $errors->has('main_photo') ? 'has-error' : '' }}">
            <label for="main_photo">Neighbour One Signature</label>
            <div class="needsclick dropzone" id="main_photo-dropzone">

            </div>
            @if($errors->has('main_photo'))
            <em class="invalid-feedback">
                {{ $errors->first('main_photo') }}
            </em>
            @endif
            <p class="helper-block">
                {{ trans('cruds.client.fields.main_photo_helper') }}
            </p>
        </div>
    </div>
</div>

<div class="row py-2">
    <div class="col-7">
        <div class="form-group {{ $errors->has('neighbour2') ? 'has-error' : '' }}">
            <label for="neighbour2">Neighbour Two</label>
            <input type="text" id="neighbour2" name="neighbour2" class="form-control"
                value="{{ old('neighbour2', isset($client) ? $client->neighbour2 : '') }}" >
            @if($errors->has('neighbour2'))
            <em class="invalid-feedback">
                {{ $errors->first('neighbour2') }}
            </em>
            @endif
        </div>
    </div>
    <div class="col-5">
        <div class="form-group {{ $errors->has('main_photo') ? 'has-error' : '' }}">
            <label for="main_photo">Neighbour Two Signature</label>
            <div class="needsclick dropzone" id="main_photo-dropzone">

            </div>
            @if($errors->has('main_photo'))
            <em class="invalid-feedback">
                {{ $errors->first('main_photo') }}
            </em>
            @endif
            <p class="helper-block">
                {{ trans('cruds.client.fields.main_photo_helper') }}
            </p>
        </div>
    </div>
</div>

<div class="row py-2">
    <div class="col-7">
        <div class="form-group {{ $errors->has('neighbour3') ? 'has-error' : '' }}">
            <label for="neighbour3">Neighbour Three</label>
            <input type="text" id="neighbour3" name="neighbour3" class="form-control"
                value="{{ old('neighbour3', isset($client) ? $client->neighbour3 : '') }}" >
            @if($errors->has('neighbour3'))
            <em class="invalid-feedback">
                {{ $errors->first('neighbour3') }}
            </em>
            @endif
        </div>
    </div>
    <div class="col-5">
        <div class="form-group {{ $errors->has('main_photo') ? 'has-error' : '' }}">
            <label for="main_photo">Neighbour Three Signature</label>
            <div class="needsclick dropzone" id="main_photo-dropzone">

            </div>
            @if($errors->has('main_photo'))
            <em class="invalid-feedback">
                {{ $errors->first('main_photo') }}
            </em>
            @endif
            <p class="helper-block">
                {{ trans('cruds.client.fields.main_photo_helper') }}
            </p>
        </div>
    </div>
</div>