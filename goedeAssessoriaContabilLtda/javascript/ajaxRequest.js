document.querySelectorAll('.ajaxQuery').forEach(link => {
    const conteudo = document.getElementById('principalContainer')

    link.onclick = function(e) {
        e.preventDefault()
        fetch(link.href)
            .then(resp => resp.text())
            .then(html => conteudo.innerHTML = html)

        document.getElementById('navBarButton').setAttribute('aria-expanded','false') // close responsive menu
        document.getElementById('navBarButton').setAttribute('class','navbar-toggler collapsed') // close responsive menu
        document.getElementById('navbarNavAltMarkup').setAttribute('class','collapse navbar-collapse') // close responsive menu
        
        document.body.scrollTop = 0 // Safari Browser
        document.documentElement.scrollTop = 0 // Google Chrome, Mozilla Firefox, Opera Browser
    }
})