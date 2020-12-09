@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.client.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.clients.update", [$client->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.client.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control"
                    value="{{ old('name', isset($client) ? $client->name : '') }}" required>
                @if($errors->has('name'))
                <em class="invalid-feedback">
                    {{ $errors->first('name') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.client.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                <label for="slug">{{ trans('cruds.client.fields.slug') }}*</label>
                <input type="text" id="slug" name="slug" class="form-control"
                    value="{{ old('slug', isset($client) ? $client->slug : '') }}" required>
                @if($errors->has('slug'))
                <em class="invalid-feedback">
                    {{ $errors->first('slug') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.client.fields.slug_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                <label for="address">{{ trans('cruds.client.fields.address') }}*</label>
                <input type="text" id="address" name="address" class="form-control"
                    value="{{ old('address', isset($client) ? $client->address : '') }}" required>
                @if($errors->has('address'))
                <em class="invalid-feedback">
                    {{ $errors->first('address') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.client.fields.address_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('latitude') ? 'has-error' : '' }}">
                <label for="latitude">{{ trans('cruds.client.fields.latitude') }}</label>
                <input type="number" id="latitude" name="latitude" class="form-control"
                    value="{{ old('latitude', isset($client) ? $client->latitude : '') }}" step="0.00000001">
                @if($errors->has('latitude'))
                <em class="invalid-feedback">
                    {{ $errors->first('latitude') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.client.fields.latitude_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('longitude') ? 'has-error' : '' }}">
                <label for="longitude">{{ trans('cruds.client.fields.longitude') }}</label>
                <input type="number" id="longitude" name="longitude" class="form-control"
                    value="{{ old('longitude', isset($client) ? $client->longitude : '') }}" step="0.00000001">
                @if($errors->has('longitude'))
                <em class="invalid-feedback">
                    {{ $errors->first('longitude') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.client.fields.longitude_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                <label for="description">{{ trans('cruds.client.fields.description') }}</label>
                <textarea id="description" name="description"
                    class="form-control ">{{ old('description', isset($client) ? $client->description : '') }}</textarea>
                @if($errors->has('description'))
                <em class="invalid-feedback">
                    {{ $errors->first('description') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.client.fields.description_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('features') ? 'has-error' : '' }}">
                <label for="features">{{ trans('cruds.client.fields.features') }}</label>
                <textarea id="features" name="features"
                    class="form-control ">{{ old('features', isset($client) ? $client->features : '') }}</textarea>
                @if($errors->has('features'))
                <em class="invalid-feedback">
                    {{ $errors->first('features') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.client.fields.features_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('people_minimum') ? 'has-error' : '' }}">
                <label for="people_minimum">{{ trans('cruds.client.fields.people_minimum') }}</label>
                <input type="number" id="people_minimum" name="people_minimum" class="form-control"
                    value="{{ old('people_minimum', isset($client) ? $client->people_minimum : '') }}" step="1">
                @if($errors->has('people_minimum'))
                <em class="invalid-feedback">
                    {{ $errors->first('people_minimum') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.client.fields.people_minimum_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('people_maximum') ? 'has-error' : '' }}">
                <label for="people_maximum">{{ trans('cruds.client.fields.people_maximum') }}</label>
                <input type="number" id="people_maximum" name="people_maximum" class="form-control"
                    value="{{ old('people_maximum', isset($client) ? $client->people_maximum : '') }}" step="1">
                @if($errors->has('people_maximum'))
                <em class="invalid-feedback">
                    {{ $errors->first('people_maximum') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.client.fields.people_maximum_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('price_per_hour') ? 'has-error' : '' }}">
                <label for="price_per_hour">{{ trans('cruds.client.fields.price_per_hour') }}</label>
                <input type="number" id="price_per_hour" name="price_per_hour" class="form-control"
                    value="{{ old('price_per_hour', isset($client) ? $client->price_per_hour : '') }}" step="0.01">
                @if($errors->has('price_per_hour'))
                <em class="invalid-feedback">
                    {{ $errors->first('price_per_hour') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.client.fields.price_per_hour_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('main_photo') ? 'has-error' : '' }}">
                <label for="main_photo">{{ trans('cruds.client.fields.main_photo') }}</label>
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
            <div class="form-group {{ $errors->has('gallery') ? 'has-error' : '' }}">
                <label for="gallery">{{ trans('cruds.client.fields.gallery') }}</label>
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
            <div class="form-group {{ $errors->has('is_verified') ? 'has-error' : '' }}">
                <label for="is_verified">{{ trans('cruds.client.fields.is_verified') }}</label>
                <input name="is_verified" type="hidden" value="0">
                <input value="1" type="checkbox" id="is_verified" name="is_verified"
                    {{ (isset($client) && $client->is_verified) || old('is_verified', 0) === 1 ? 'checked' : '' }}>
                @if($errors->has('is_verified'))
                <em class="invalid-feedback">
                    {{ $errors->first('is_verified') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.client.fields.is_verified_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection

@section('scripts')
<script>
    Dropzone.options.mainPhotoDropzone = {
    url: '{{ route('admin.clients.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="main_photo"]').remove()
      $('form').append('<input type="hidden" name="main_photo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="main_photo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($client) && $client->main_photo)
      var file = {!! json_encode($client->main_photo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, '{{ $client->main_photo->getUrl('thumb') }}')
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="main_photo" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
<script>
    var uploadedGalleryMap = {}
Dropzone.options.galleryDropzone = {
    url: '{{ route('admin.clients.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="gallery[]" value="' + response.name + '">')
      uploadedGalleryMap[file.name] = response.name
    },
    removedfile: function (file) {
      console.log(file)
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedGalleryMap[file.name]
      }
      $('form').find('input[name="gallery[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($client) && $client->gallery)
      var files =
        {!! json_encode($client->gallery) !!}
          for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          this.options.thumbnail.call(this, file, file.url)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="gallery[]" value="' + file.file_name + '">')
        }
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
@stop