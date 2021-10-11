


const frame = {

    load: (url, isFrame = false) => {

        let document = isFrame
            ? parent.document
            : document

        document.getElementById('main').src = url
    },

    externals: (id) => {

        return {
            modal: (isFrame = false) => {
                return new Modal(id, isFrame)
            }
        }
    }
}
