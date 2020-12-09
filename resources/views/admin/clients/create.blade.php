@extends('layouts.admin')
@section('content')
<style>
    .form-control {
        border: 1px solid #b2b2b2;
         !important;
    }
</style>
<div class="card">
    <div class="card-header">
        {{-- {{ trans('global.create') }} {{ trans('cruds.client.title_singular') }} --}}
        <b>Add New Registration</b>
    </div>

    <div class="card-body">
        <form action="{{ route("admin.clients.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('registration') ? 'has-error' : '' }}">
                <label for="registration">{{ trans('cruds.client.fields.registration') }} Number*</label>
                <input type="text" id="registration" name="registration" class="form-control"
                    value="{{ old('registration', isset($client) ? $client->registration : '') }}" required>
                @if($errors->has('registration'))
                <em class="invalid-feedback">
                    {{ $errors->first('registration') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.client.fields.registration_helper') }}
                </p>
            </div>
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
            <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                <label for="phone">{{ trans('cruds.client.fields.phone') }}*</label>
                <input type="number" id="phone" name="phone" class="form-control"
                    value="{{ old('phone', isset($client) ? $client->phone : '') }}">
                @if($errors->has('phone'))
                <em class="invalid-feedback">
                    {{ $errors->first('phone') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.client.fields.phone_helper') }}
                </p>
            </div>

            <div class="row">
                <div class="col-6">
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
                </div>
                <div class="col-6">
                    <div class="form-group {{ $errors->has('client_signature') ? 'has-error' : '' }}">
                        <label for="client_signature">Client's Signature</label>
                        <div class="needsclick dropzone" id="client_signature-dropzone">

                        </div>
                        @if($errors->has('client_signature'))
                        <em class="invalid-feedback">
                            {{ $errors->first('client_signature') }}
                        </em>
                        @endif
                    </div>
                </div>
            </div>

            <hr class="my-4" style="border: 2px solid gray">

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

            <hr class="my-5" style="border: 1px solid gray">

            @include('admin.clients.formparts.neighbour')

            <hr class="my-5" style="border: 1px solid gray">

            @can('client_delete')
            <div class="row">
                <div class="col-5">
                    <div class="form-group {{ $errors->has('verified_by') ? 'has-error' : '' }}">
                        <label for="verified_by"
                            style="color: red"><b>{{ trans('cruds.client.fields.verified_by') }}*</b></label>
                        <input type="text" id="verified_by" name="verified_by" class="form-control"
                            value="{{ old('verified_by', isset($client) ? $client->verified_by : '') }}" required>
                        @if($errors->has('verified_by'))
                        <em class="invalid-feedback">
                            {{ $errors->first('verified_by') }}
                        </em>
                        @endif
                        <p class="helper-block">
                            {{ trans('cruds.client.fields.verified_by_helper') }}
                        </p>
                    </div>
                </div>
                <div class="col-7">
                    <div class="form-group {{ $errors->has('verified_sign') ? 'has-error' : '' }}">
                        <label for="verified_sign" style="color: red"><b>Verification Officer Signature</b></label>
                        <div class="needsclick dropzone" id="verified_sign-dropzone">

                        </div>
                        @if($errors->has('verified_sign'))
                        <em class="invalid-feedback">
                            {{ $errors->first('verified_sign') }}
                        </em>
                        @endif
                    </div>
                </div>
            </div>

            <div class="form-group {{ $errors->has('is_verified') ? 'has-error' : '' }}">
                <label for="is_verified">{{ trans('cruds.client.fields.is_verified') }}</label>
                <input name="is_verified" type="hidden" value="0">
                <input value="1" type="checkbox" id="is_verified" checked name="is_verified"
                    {{ old('is_verified', 0) == 1 ? 'checked' : '' }}>
                @if($errors->has('is_verified'))
                <em class="invalid-feedback">
                    {{ $errors->first('is_verified') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.client.fields.is_verified_helper') }}
                </p>
            </div>
            @endcan

            <div>
                <input class="btn btn-danger px-4" type="submit" value="{{ trans('global.save') }} Registration">
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
    Dropzone.options.clientSignatureDropzone = {
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
      $('form').find('input[name="client_signature"]').remove()
      $('form').append('<input type="hidden" name="client_signature" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="client_signature"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($client) && $client->client_signature)
      var file = {!! json_encode($client->client_signature) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, '{{ $client->client_signature->getUrl('thumb') }}')
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="client_signature" value="' + file.file_name + '">')
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
    Dropzone.options.verifiedSignDropzone = {
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
      $('form').find('input[name="verified_sign"]').remove()
      $('form').append('<input type="hidden" name="verified_sign" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="verified_sign"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($client) && $client->verified_sign)
      var file = {!! json_encode($client->verified_sign) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, '{{ $client->verified_sign->getUrl('thumb') }}')
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="verified_sign" value="' + file.file_name + '">')
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
    maxFiles: 10,
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