


$(function () {
    new Request(window.APP.url().api(`provedores/tokens`))
        .get(async response => {
            const tokens = await response.tokens

            const table = new Table('tokens', {
                headers: [ 'TOKEN', 'PROVEDOR', 'STATUS' ],
                columns: [ 14, 6, 2 ]
            })

            tokens.forEach(token => {
                const ativo = (token.ativo == 'S')

                table.addRow(
                    token.id, [
                        token.token,
                        token.razao,
                        (`
                            <button type="button" class="btn btn-close no-shadow bg-${ ativo ? 'success' : 'danger' }-5">
                                <span class="icon-md icn-${ ativo ? 'check-all' : 'lock' }"></span>
                            </button>
                        `)
                    ]
                )
            })

            table.render()
            icons.render()
        })
})
