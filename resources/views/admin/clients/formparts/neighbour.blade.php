<h5 class="btn btn-secondary mb-4" style="font-weight: bolder; cursor:auto">#3 Client's Neighbours Details (Name and
    Signature)</h5>

<div class="row py-2">
    <div class="col-4">
        <div class="form-group {{ $errors->has('neighbour1') ? 'has-error' : '' }}">
            <label for="neighbour1">Neighbour One's Name</label>
            <input type="text" id="neighbour1" name="neighbour1" class="form-control"
                value="{{ old('neighbour1', isset($client) ? $client->neighbour1 : '') }}">
            @if($errors->has('neighbour1'))
            <em class="invalid-feedback">
                {{ $errors->first('neighbour1') }}
            </em>
            @endif
        </div>
        <div class="form-group {{ $errors->has('neighbour1_sign') ? 'has-error' : '' }}">
            <label for="neighbour1_sign">Neighbour One's Signature</label>
            <div class="needsclick dropzone" id="neighbour1_sign-dropzone">

            </div>
            @if($errors->has('neighbour1_sign'))
            <em class="invalid-feedback">
                {{ $errors->first('neighbour1_sign') }}
            </em>
            @endif
        </div>
    </div>

    <div class="col-4">
        <div class="form-group {{ $errors->has('neighbour2') ? 'has-error' : '' }}">
            <label for="neighbour2">Neighbour Two's Name</label>
            <input type="text" id="neighbour2" name="neighbour2" class="form-control"
                value="{{ old('neighbour2', isset($client) ? $client->neighbour2 : '') }}">
            @if($errors->has('neighbour2'))
            <em class="invalid-feedback">
                {{ $errors->first('neighbour2') }}
            </em>
            @endif
        </div>
        <div class="form-group {{ $errors->has('neighbour2_sign') ? 'has-error' : '' }}">
            <label for="neighbour2_sign">Neighbour Two's Signature</label>
            <div class="needsclick dropzone" id="neighbour2_sign-dropzone">

            </div>
            @if($errors->has('neighbour2_sign'))
            <em class="invalid-feedback">
                {{ $errors->first('neighbour2_sign') }}
            </em>
            @endif
        </div>
    </div>

    <div class="col-4">
        <div class="form-group {{ $errors->has('neighbour3') ? 'has-error' : '' }}">
            <label for="neighbour3">Neighbour Three's Name</label>
            <input type="text" id="neighbour3" name="neighbour3" class="form-control"
                value="{{ old('neighbour3', isset($client) ? $client->neighbour3 : '') }}">
            @if($errors->has('neighbour3'))
            <em class="invalid-feedback">
                {{ $errors->first('neighbour3') }}
            </em>
            @endif
        </div>
        <div class="form-group {{ $errors->has('neighbour3_sign') ? 'has-error' : '' }}">
            <label for="neighbour3_sign">Neighbour Three's Signature</label>
            <div class="needsclick dropzone" id="neighbour3_sign-dropzone">

            </div>
            @if($errors->has('neighbour3_sign'))
            <em class="invalid-feedback">
                {{ $errors->first('neighbour3_sign') }}
            </em>
            @endif
        </div>
    </div>
</div>