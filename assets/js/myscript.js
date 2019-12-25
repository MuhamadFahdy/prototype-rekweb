const flashData = $('.flash-data').data('flashdata');

if( flashData ) {
    Swal.fire({
        title: 'Your item has been ',
        text: 'successfully ' + flashData,
        type: 'success'
    });

}
 
$('.tombol-hapus').on('click', function(e){
    e.preventDefault();
    const href = $(this).attr('href');
    Swal.fire({
        title: 'Are you sure?',
        text: "All your items in your cart will be deleted",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: '#3885d6',
        showCancelButton: '#d33',
        confirmButtonText: 'Delete Data!'
      }).then((result) => {
          if (result.value) {
              document.location.href = href;
              
          }
      })
});