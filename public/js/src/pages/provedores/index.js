


$.extend($.fn.dataTable.defaults, {
    "autoWidth":    false,
    "searching":    false,
    "info":         false,
    "lengthChange": false,
    "pageLength":   10,
    language: {
        oPaginate: {
            sPrevious: '<i class="material-icons-two-tone">navigate_before</i>',
            sNext: '<i class="material-icons-two-tone">navigate_next</i>'
        }
    }
})

const table = $('#provedores').DataTable({
    columnDefs: [
        { targets: [0, 1, 2], className: 'text-start' }
    ]
})



$(function () {

    new Request(window.APP.url('admin').web('provedores/listar'))
        .get(async response => {
            const provedores = await response.provedores

            provedores.forEach(provedor => {

                table.row.add([
                    window.APP.mask(provedor.cnpj).cnpj(),
                    provedor.nome_fantasia,
                    `${ provedor.logradouro }, ${ provedor.municipio }-${ provedor.uf }`
                ])

                table.draw()
            })
        })

})
