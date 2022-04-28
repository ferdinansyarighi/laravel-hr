function msgbox(stat,message){

    const Toast = Swal.mixin({
        toast: true,
        position: 'top-right',
        // iconColor: 'black',
        customClass: {
            popup: 'colored-toast'
        },
        showConfirmButton: false,
        timer: 5000,
        timerProgressBar: false
    })

    if(stat === 'success'){
        Toast.fire({
            icon: 'success',
            title: message
        })
    }else if(stat === 'error'){
        Toast.fire({
            icon: 'error',
            title: message
        })
    }else if(stat === 'warning'){
        Toast.fire({
            icon: 'warning',
            title: message
        })
    }else if(stat === 'info'){
        Toast.fire({
            icon: 'info',
            title: message
        })
    }else if(stat === 'question'){
        Toast.fire({
            icon: 'question',
            title: message
        })
    }
}