$('#formContact').on('submit', (e) => {
    e.preventDefault()

    var params = {
        name: $('#name').val(),
        mail: $('#mail').val(),
        message: $('#msg').val()
    }

    if (params.name == "") {
        $('#errorName').html('<i class="fa-solid fa-circle-exclamation"></i> Veuillez remplir le champ avec votre nom, merci.')
    }
    if (params.mail == "") {
        $('#errorMail').html('<i class="fa-solid fa-circle-exclamation"></i> Veuillez remplir le champ avec votre email, merci.')
    }
    if (params.message == "") {
        $('#errorMessage').html('<i class="fa-solid fa-circle-exclamation"></i> Veuillez remplir le champ avec un message, merci.')
    }
    if(params.name != "" || params.mail != "" || params.message != "") {
       emailjs.send('service_eb9szys', 'template_46imbfl', params)
            .then((response) => {
                console.log('SUCCESS!', response.status, response.text);
            }, (error) => {
                console.log('FAILED...', error);
            });

            $('#messForm').addClass("messageForm")
            $('#messForm').html("<p>Votre email à bien été envoyé, vous obtiendrez une réponse au plus vite, merci !</p>")

            setTimeout(() => {
                $('#messForm').html("")
                $('#messForm').removeClass("messageForm")
                $("html, body").animate({scrollTop: 0}, 1000);
            }, 4000)

            setTimeout(() => {
                $(e.target)[0].reset();
            }, 3000)
    }
})