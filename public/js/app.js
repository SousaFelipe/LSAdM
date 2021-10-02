


$(function () {
    icons.render()

    if (window.APP == undefined) {
        window.APP = {

            form: (id) => {
                let element = document.getElementById(id)

                return {
                    submit: () => {
                        element.submit()
                    },
                }
            },

            component: (type, id) => {
                const element = document.getElementById(id)

                const components = {
                    'button':   () => buttonComponent(element),
                    'input':    () => inputComponent(element)
                }

                return (components[type])()
            },

            assets: (filename) => {
                let iconsURL = `${ config.webUri }/images/icons`

                return {
                    icon: (filetype = 'png') => (`${ iconsURL }/${ filename }.${ filetype }`)
                }
            },

            mask: (clean) => {
                return {
                    cell: () => {
                        return clean.replace(/\D/g, '').replace(/^(\d{2})(\d{1})(\d{4})(\d{4})?/, '($1) $2 $3-$4')
                    },

                    cep: () => {
                        return clean.replace(/\D/g, '').replace(/^(\d{5})(\d{3})?/, '$1-$2')
                    },

                    cnpj: (format = '$1.$2.$3/$4-$5') => {
                        return clean.replace(/\D/g, '').replace(/^(\d{2})(\d{3})?(\d{3})?(\d{4})?(\d{2})?/, format)
                    },

                    date: (joiner = '/') => {
                        return clean.split('-').reverse().join(joiner)
                    }
                }
            },

            url: (level = false) => {
                return {

                    web: (endpoint) => {
                        return level
                            ? `${ config.webUri }/${ level }/${ endpoint }`
                            : `${ config.webUri }/${ endpoint }`
                    },

                    api: (endpoint) => {
                        return level
                            ? `${ config.apiUri }/${ level }/${ endpoint }`
                            : `${ config.apiUri }/${ endpoint }`
                    }
                }
            }
        }

        window.APP.ENV = {

            get: (name) => {
                return window.APP.ENV[name] ? window.APP.ENV[name] : { }
            },

            set: (name, value) => {
                window.APP.ENV[name] = value
            },

            remove: (name) => {
                if (window.APP.ENV[name]) {
                    delete window.APP.ENV[name]
                }
            }
        }
    }
})



function buttonComponent (element) {
    return {
        disable: () => element.setAttribute('disabled', true),
        enable:  () => element.setAttribute('disabled', false)
    }
}



function inputComponent (element) {
    return {
        invalidate: () => {
            element.classList.add('is-invalid')
            element.addEventListener('change', function(e) {
                element.classList.remove('is-invalid')
                element.removeEventListener('change', e)
            })
        }
    }
}
