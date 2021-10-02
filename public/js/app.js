


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

            input: (id) => {
                const element = document.getElementById(id)

                return {

                    invalidate: () => {
                        element.classList.add('is-invalid')
                        element.addEventListener('change', function(e) {
                            element.classList.remove('is-invalid')
                            element.removeEventListener('change', e)
                        })
                    }
                }
            },

            button: (id) => {
                const element = document.getElementById(id)

                return {
                    setLoding: (loading, disabled = true) => {

                        if (loading) {

                            window.APP.ENV.set(`loading-btn-${ id }`, element.innerText)
                            element.innerHTML = `<div class="spinner"></div>`

                            if (disabled) {
                                element.setAttribute('disabled', true)
                            }
                        }
                        else {
                            element.innerHTML = window.APP.ENV.get(`loading-btn-${ id }`)
                            window.APP.ENV.remove(`loading-btn-${ id }`)
                        }
                    }
                }
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
