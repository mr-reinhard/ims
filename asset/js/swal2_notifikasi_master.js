function swal2_info(){
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Your work has been saved',
        showConfirmButton: false,
        timer: 1500
      })
}

function swal2_tanpa_tombol(){
    Swal.fire({
        icon:'success',
        title:'Yaaayy',
        text:'Login Berhasil',
        showConfirmButton: false,
        timer:1500
    })
}