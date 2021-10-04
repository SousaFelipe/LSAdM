


class Request {


    constructor(url, data = {}) {

        this.url = url
        this.data = data

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
    }


    get(callback) {
        $.ajax({
            method: "GET",
            url: this.url
        })
        .done(async response => {
            callback.call(this, await response)
        })
    }


    post(callback, progress = null) {
        $.ajax({

            type: 'POST',
            url: this.url,
            data: this.data,

            xhr: function () {
                var xhr = new window.XMLHttpRequest()

                xhr.upload.addEventListener("progress", function (evt) {
                    if (evt.lengthComputable && progress)
                        progress.call(this, evt.loaded / evt.total)
                }, false)

                xhr.addEventListener("progress", function (evt) {
                    if (evt.lengthComputable && progress)
                        progress.call(this, evt.loaded / evt.total)
                }, false)

                return xhr
            },

            success: async function (response) {
                const data = await response
                callback.call(this, data)
            }
        })
    }
}
