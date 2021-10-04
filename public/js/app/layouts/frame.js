


const frame = {

    externals: (id) => {

        return {
            modal: (isFrame = false) => {
                return new Modal(id, isFrame)
            }
        }
    }
}
