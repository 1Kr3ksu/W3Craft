function showMessageAndRedirect() {
    Swal.fire({
        title: 'Subskrybuj kanał!',
        text: 'Nie zapomnij zasubskrybować kanału!',
        icon: 'info',
        confirmButtonText: 'OK',
        timer: 3000,
        timerProgressBar: true,
        willClose: () => {
            window.location.href = "https://www.youtube.com";
        }
    });
}