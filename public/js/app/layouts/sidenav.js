


$(function () {

    new Sidenav($("*[data-nav-item]"))
        .loadActions()
        .selectDefault()
})



class Sidenav {


    constructor(items) {
        this.items = items
    }


    loadActions () {
        let self = this

        this.items.each(function () {
            $(this).on('click', function (e) {
                self.select($(this))
            })
        })

        return this
    }


    selectDefault () {
        this.select(this.items[0])
        return this
    }


    select (item) {

        this.items.each(function () {
            $(this).removeClass('active')
        })

        document.getElementById('main').src = (
            window.APP
                .url('super/admin')
                .web($(item).data('nav-item'))
        )

        $(item).addClass('active')
    }
}
