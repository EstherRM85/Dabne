document.querySelectorAll('.ablt').forEach(fecha => {
    fecha.addEventListener('click', event => {
        document.querySelectorAll('.lblt').forEach(boletin => {
            boletin.style.display = 'none';
        })
        fecha.nextElementSibling.style.display = 'inline';

    })
})