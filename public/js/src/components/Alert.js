


class Alert {


    constructor (id, timeout = 0) {

        this.timeout = timeout
        this.alert = document.getElementById(id)
        this.alertBody = document.getElementById(`${ id }Body`)

        this.bindAction(id)
    }


    bindAction (id) {
        let btnClose = document.querySelectorAll(`[data-spark-close='${ id }']`)[0]
        if (btnClose) {
            btnClose.addEventListener("click", () => this.hide())
        }
    }


    hide () {
        this.alertBody.innerHTML = ''
        $(this.alert).fadeOut('fast', function () {
            $(this).css('display', 'none')
        })
    }


    display (msg) {
        this.alertBody.innerHTML = msg
        $(this.alert).fadeIn('fast', function() {
            $(this).css('display', 'flex')
        })
    }
}
