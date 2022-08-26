$('.categorielist').click((e) => {
    e.preventDefault()
    
    let id = e.currentTarget.id
    let url = './sql/projets.php'
    let data = {'id': id}

    $.ajax({
        url: url,
        data: data,
        type: 'GET'
    }).done((res) => {
        $('#bp').html(res)
    })
})

$(document).on('click', '.cardprojets', (e) => {
    e.preventDefault()
    
    let id = e.currentTarget.id
    let url = './sql/modal.php'
    let data = {'id': id}

    $.ajax({
        url: url,
        data: data,
        type: 'GET'
    }).done((res) => {
        $('#appendmodal').html(res)
    })
})

$(document).on('click', '#cross', () => {
    $('#appendmodal').html("")
})