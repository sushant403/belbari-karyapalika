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

<script>
  var uploadedConsultancyMap = {}
Dropzone.options.consultancyDropzone = {
  url: '{{ route('admin.clients.storeMedia') }}',
  maxFilesize: 2, // MB
  acceptedFiles: '.jpeg,.jpg,.png,.gif',
  maxFiles: 5,
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
    $('form').append('<input type="hidden" name="consultancy[]" value="' + response.name + '">')
    uploadedConsultancyMap[file.name] = response.name
  },
  removedfile: function (file) {
    console.log(file)
    file.previewElement.remove()
    var name = ''
    if (typeof file.file_name !== 'undefined') {
      name = file.file_name
    } else {
      name = uploadedConsultancyMap[file.name]
    }
    $('form').find('input[name="consultancy[]"][value="' + name + '"]').remove()
  },
  init: function () {
@if(isset($client) && $client->consultancy)
    var files =
      {!! json_encode($client->consultancy) !!}
        for (var i in files) {
        var file = files[i]
        this.options.addedfile.call(this, file)
        this.options.thumbnail.call(this, file, file.url)
        file.previewElement.classList.add('dz-complete')
        $('form').append('<input type="hidden" name="consultancy[]" value="' + file.file_name + '">')
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

<script>
  var uploadedDaysNoticeMap = {}
Dropzone.options.daysNoticeDropzone = {
  url: '{{ route('admin.clients.storeMedia') }}',
  maxFilesize: 2, // MB
  acceptedFiles: '.jpeg,.jpg,.png,.gif',
  maxFiles: 2,
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
    $('form').append('<input type="hidden" name="days_notice[]" value="' + response.name + '">')
    uploadedDaysNoticeMap[file.name] = response.name
  },
  removedfile: function (file) {
    console.log(file)
    file.previewElement.remove()
    var name = ''
    if (typeof file.file_name !== 'undefined') {
      name = file.file_name
    } else {
      name = uploadedDaysNoticeMap[file.name]
    }
    $('form').find('input[name="days_notice[]"][value="' + name + '"]').remove()
  },
  init: function () {
@if(isset($client) && $client->days_notice)
    var files =
      {!! json_encode($client->days_notice) !!}
        for (var i in files) {
        var file = files[i]
        this.options.addedfile.call(this, file)
        this.options.thumbnail.call(this, file, file.url)
        file.previewElement.classList.add('dz-complete')
        $('form').append('<input type="hidden" name="days_notice[]" value="' + file.file_name + '">')
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

<script>
  var uploadedAcceptance1Map = {}
Dropzone.options.acceptance1Dropzone = {
  url: '{{ route('admin.clients.storeMedia') }}',
  maxFilesize: 2, // MB
  acceptedFiles: '.jpeg,.jpg,.png,.gif',
  maxFiles: 2,
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
    $('form').append('<input type="hidden" name="acceptance1[]" value="' + response.name + '">')
    uploadedAcceptance1Map[file.name] = response.name
  },
  removedfile: function (file) {
    console.log(file)
    file.previewElement.remove()
    var name = ''
    if (typeof file.file_name !== 'undefined') {
      name = file.file_name
    } else {
      name = uploadedAcceptance1Map[file.name]
    }
    $('form').find('input[name="acceptance1[]"][value="' + name + '"]').remove()
  },
  init: function () {
@if(isset($client) && $client->acceptance1)
    var files =
      {!! json_encode($client->acceptance1) !!}
        for (var i in files) {
        var file = files[i]
        this.options.addedfile.call(this, file)
        this.options.thumbnail.call(this, file, file.url)
        file.previewElement.classList.add('dz-complete')
        $('form').append('<input type="hidden" name="acceptance1[]" value="' + file.file_name + '">')
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

<script>
  var uploadedAcceptance2Map = {}
Dropzone.options.acceptance2Dropzone = {
  url: '{{ route('admin.clients.storeMedia') }}',
  maxFilesize: 2, // MB
  acceptedFiles: '.jpeg,.jpg,.png,.gif',
  maxFiles: 2,
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
    $('form').append('<input type="hidden" name="acceptance2[]" value="' + response.name + '">')
    uploadedAcceptance2Map[file.name] = response.name
  },
  removedfile: function (file) {
    console.log(file)
    file.previewElement.remove()
    var name = ''
    if (typeof file.file_name !== 'undefined') {
      name = file.file_name
    } else {
      name = uploadedAcceptance2Map[file.name]
    }
    $('form').find('input[name="acceptance2[]"][value="' + name + '"]').remove()
  },
  init: function () {
@if(isset($client) && $client->acceptance2)
    var files =
      {!! json_encode($client->acceptance2) !!}
        for (var i in files) {
        var file = files[i]
        this.options.addedfile.call(this, file)
        this.options.thumbnail.call(this, file, file.url)
        file.previewElement.classList.add('dz-complete')
        $('form').append('<input type="hidden" name="acceptance2[]" value="' + file.file_name + '">')
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

<script>
  var uploadedFinaldocsMap = {}
Dropzone.options.finaldocsDropzone = {
  url: '{{ route('admin.clients.storeMedia') }}',
  maxFilesize: 2, // MB
  acceptedFiles: '.jpeg,.jpg,.png,.gif',
  maxFiles: 5,
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
    $('form').append('<input type="hidden" name="finaldocs[]" value="' + response.name + '">')
    uploadedFinaldocsMap[file.name] = response.name
  },
  removedfile: function (file) {
    console.log(file)
    file.previewElement.remove()
    var name = ''
    if (typeof file.file_name !== 'undefined') {
      name = file.file_name
    } else {
      name = uploadedFinaldocsMap[file.name]
    }
    $('form').find('input[name="finaldocs[]"][value="' + name + '"]').remove()
  },
  init: function () {
@if(isset($client) && $client->finaldocs)
    var files =
      {!! json_encode($client->finaldocs) !!}
        for (var i in files) {
        var file = files[i]
        this.options.addedfile.call(this, file)
        this.options.thumbnail.call(this, file, file.url)
        file.previewElement.classList.add('dz-complete')
        $('form').append('<input type="hidden" name="finaldocs[]" value="' + file.file_name + '">')
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