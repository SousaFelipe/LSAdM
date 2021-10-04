


$(function () {
    const id = $('input[id="_id"]').attr('value')

    const table = new Table('tokens', {
        headers: ['STATUS', 'TOKEN', 'action'],
        columns: [ 4, 16, 2 ]
    })

    new Request(window.APP.url('super/admin').web(`tokens/listar/${ id }`))
        .get(async response => {
            const tokens = await response.tokens

            tokens.forEach(token => {
                let obj = new Token(token)

                table.addRow(
                    token.id, [
                        obj.status(),
                        token.token,
                    ]
                ).action(
                    obj.action(),
                    id => questionaTokenAcao(id)
                )
            })

            table.render()
            icons.render()
        })
})



function questionaTokenAcao(tokenID) {
    new Question('question-spark-md', true)
        .type('confirm')
        .question('Deseja realmente ativar esse Token?')
        .explain('Ao ativar, os usuários associados a ele terão acesso ao sistema imediatamente!')
        .show()
}
