


const statusAlert = new Alert('statusLoginAlert', 5)



let login = function (target) {

    const credentials = getValidated(
        document.getElementById('inputEmail').value,
        document.getElementById('inputPassword').value
    )

    if (credentials) {
        window.APP.button('btnLogin').setLoding(true)
        new Request('auth', credentials).post(response => handleAuthentication(response, target))
    }
    else {
        statusAlert.display(`Preencha os campos <b>Email</b> e <b>Senha</b>!`)
        target.removeAttribute('disabled')
    }
}



let getValidated = function (email, password) {
    return ((email && email.length > 0) && (password && password.length >= 8))
        ? { email: email, password: password }
        : false
}



let handleAuthentication = function (response, target) {
    if (response.auth === true) {
        window.APP.form('formSignIn').submit()
    }
    else {

        if (response.errors.email) {
            window.APP.input('inputEmail').invalidate()
            statusAlert.display(response.errors.email)
        }
        else if (response.errors.password) {
            window.APP.input('inputPassword').invalidate()
            statusAlert.display(response.errors.password)
        }

        target.removeAttribute('disabled')
        window.APP.button('btnEnter').setLoding(false)
    }
}
