document.getElementById('hrf').style.width = "90%"
document.getElementById('hrs').style.width = "80%"
document.getElementById('hrt').style.width = "70%"

window.addEventListener('scroll', () => {
    if (window.scrollY > 120) {
        document.getElementById('hrf').style.width = '100%'
        document.getElementById('hrf').style.border = '2000px solid #A2C5AC'
        document.getElementById('hrf').style.transform = 'rotate(180deg)'
        if ($(window).width() > 960) {
            document.getElementById('titled').style.fontSize = '7em'
        }
        else {
            document.getElementById('titled').style.fontSize = '2em'
        }
        document.getElementById('backtotop').style.visibility = "visible"
        document.getElementById('backtotop').style.fontSize = "2em"
    }
    else {
        document.getElementById('hrf').style.width = '90%'
        document.getElementById('hrf').style.border = '10px solid #A2C5AC'
        document.getElementById('titled').style.fontSize = '2em'
        document.getElementById('hrf').style.removeProperty('transform')
        document.getElementById('backtotop').style.fontSize = "0px"
        document.getElementById('backtotop').style.visibility = "hidden"
    }

    if (window.scrollY > 1300) {
        document.getElementById('hrf').style.transform = 'rotate(90deg)'
        document.getElementById('hrf').style.borderColor = '#FAC9B8'
        if ($(window).width() > 960) {
            document.getElementById('titlep').style.fontSize = '5em'
        }
        else {
            document.getElementById('titlep').style.fontSize = '2em'
        }
    }
    else {
        document.getElementById('titlep').style.fontSize = '2em'

    }
})

document.getElementById('home').addEventListener('click', () => {
    document.getElementById('uphome').scrollIntoView({ behavior: "smooth" })
    if ($(window).width() < 960) {
    $('#newnav').hide()
    $('#none').show()
    $('#closenav').hide()
    }
})

document.getElementById('descp').addEventListener('click', () => {
    document.getElementById('desc').scrollIntoView({ behavior: "smooth" })
    if ($(window).width() < 960) {
    $('#newnav').hide()
    $('#none').show()
    $('#closenav').hide()
    }
})

document.getElementById('work').addEventListener('click', () => {
    document.getElementById('titlep').scrollIntoView({ behavior: "smooth" })
    if ($(window).width() < 960) {
    $('#newnav').hide()
    $('#none').show()
    $('#closenav').hide()
    }
})

document.getElementById('contact').addEventListener('click', () => {
    document.getElementById('contactblock').scrollIntoView({ behavior: "smooth" })
    if ($(window).width() < 960) {
    $('#newnav').hide()
    $('#none').show()
    $('#closenav').hide()
    }
})

document.getElementById('mess').addEventListener('click', () => {
    document.getElementById('mess').style.display = 'none';
    document.getElementById('mess').style.removeProperty('style')
})

document.getElementById('backtotop').addEventListener('click', () => {
    document.getElementById('backtoup').scrollIntoView({ behavior: 'smooth' })
})

$('#menu').click(() => {
    $('#newnav').show()
    $('#none').hide()
    $('#closenav').show()
})

$('#closenav').click(() => {
    $('#newnav').hide()
    $('#none').show()
    $('#closenav').hide()
})