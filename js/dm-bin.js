(() => {
  $(document).ready(function () {
    $('#file').on('change', function () {
      const file = this.files[0]
      if (file) {
        const allowedFileExts = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'avif', 'pdf']
        const ext = file.name.split('.').pop().toLowerCase()
        if (file.size > 1048576) { // 1MB
          $('#largefilenotice').removeClass('hidden')
          this.value = ''
          return false
        } else if (!allowedFileExts.includes(ext)) { // img and pdf
          $('#wrongfiletypenotice').removeClass('hidden')
          this.value = ''
          return false
        } else {
          $('#largefilenotice').addClass('hidden')
          $('#wrongfiletypenotice').addClass('hidden')
        }
      }
    })
  })
})()
