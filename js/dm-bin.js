(() => {
  $(document).ready(function () {
    $('#file').on('change', function () {
      const file = this.files[0]
      if (file) {
        if (file.size > 1048576) { // 1MB
          $('#largefilenotice').removeClass('hidden')
          this.value = ''
          return false
        } else {
          $('#largefilenotice').addClass('hidden')
        }
      }
    })
  })
})()
