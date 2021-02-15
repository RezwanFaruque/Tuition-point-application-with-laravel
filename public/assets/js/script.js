// checking if navbar collapse is open

$('.navbar-toggler').on('click',function(){
    $('body').toggleClass('overflow-hidden');
})


$("#imageUpload").on('change', function (event) {
    let filesize = event.target.files[0].size / 1024 / 1024;
    console.log(filesize)
    numb = filesize.toFixed(0.5);
    let tmppath = URL.createObjectURL(event.target.files[0]);
    if (numb > 0.5) {
        alert('File size is larger than 1 MB');
        document.getElementById('imageUpload').value = '';
        $('#image-preview-avater').fadeIn("fast").attr('src', ' ');

    } else {
        $('#image-preview-avater').fadeIn("fast").attr('src', tmppath);
    }

})