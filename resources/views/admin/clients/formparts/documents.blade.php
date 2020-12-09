<h5 class="btn btn-secondary mb-4" style="font-weight: bolder; cursor:auto">#2 Client's Documents Information (Multiple
    Photo
    Uploads)</h5>

<div class="row py-2">
    <div class="col-12">
        <div class="form-group {{ $errors->has('gallery') ? 'has-error' : '' }}">
            <label for="gallery">{{ trans('cruds.client.fields.gallery') }} <i>(upto 10 files)</i></label>
            <div class="needsclick dropzone" id="gallery-dropzone">

            </div>
            @if($errors->has('gallery'))
            <em class="invalid-feedback">
                {{ $errors->first('gallery') }}
            </em>
            @endif
            <p class="helper-block">
                {{ trans('cruds.client.fields.gallery_helper') }}
            </p>
        </div>
    </div>
</div>

<div class="row py-2">
    <div class="col-7">
        <div class="form-group {{ $errors->has('consultancy') ? 'has-error' : '' }}">
            <label for="consultancy">Consultancy Documents <i>(upto 5 files)</i></label>
            <div class="needsclick dropzone" id="consultancy-dropzone">

            </div>
            @if($errors->has('consultancy'))
            <em class="invalid-feedback">
                {{ $errors->first('consultancy') }}
            </em>
            @endif
        </div>
    </div>

    <div class="col-5">
        <div class="form-group {{ $errors->has('days_notice') ? 'has-error' : '' }}">
            <label for="days_notice">15 Days Notice <i>(upto 2 files)</i></label>
            <div class="needsclick dropzone" id="days_notice-dropzone">

            </div>
            @if($errors->has('days_notice'))
            <em class="invalid-feedback">
                {{ $errors->first('days_notice') }}
            </em>
            @endif
        </div>
    </div>
</div>

<div class="row py-2">
    <div class="col-6">
        <div class="form-group {{ $errors->has('acceptance1') ? 'has-error' : '' }}">
            <label for="acceptance1">First Acceptance Letter <i>(upto 2 files)</i></label>
            <div class="needsclick dropzone" id="acceptance1-dropzone">

            </div>
            @if($errors->has('acceptance1'))
            <em class="invalid-feedback">
                {{ $errors->first('acceptance1') }}
            </em>
            @endif
        </div>
    </div>
    <div class="col-6">
        <div class="form-group {{ $errors->has('acceptance2') ? 'has-error' : '' }}">
            <label for="acceptance2">Second Acceptance Letter <i>(upto 2 files)</i></label>
            <div class="needsclick dropzone" id="acceptance2-dropzone">

            </div>
            @if($errors->has('acceptance2'))
            <em class="invalid-feedback">
                {{ $errors->first('acceptance2') }}
            </em>
            @endif
        </div>
    </div>
</div>

<div class="row py-2">
    <div class="col-12">
        <div class="form-group {{ $errors->has('finaldocs') ? 'has-error' : '' }}">
            <label for="finaldocs">Final Documentation <i>(upto 5 files)</i></label>
            <div class="needsclick dropzone" id="finaldocs-dropzone">

            </div>
            @if($errors->has('finaldocs'))
            <em class="invalid-feedback">
                {{ $errors->first('finaldocs') }}
            </em>
            @endif
        </div>
    </div>
</div>