//alert("hola")
new Vue({
    el: '#main',
    data: {
        rut: '',
        clave: '',
        errors: []
    },

    methods: {
        iniciando_sesion: function() {
            var url = 'login';
            axios.post(url, {
                rut: this.rut,
                clave: this.clave
            }).then(response => {

                this.rut = '';
                this.clave = '';

                toastr.success('', 'iniciando sesion', {
                    "closeButton": true,
                    "positionClass": "toast-bottom-right"
                });
                //window.location.href = 'views/admin'
            }).catch(error => {

                this.errors = error.response.data;
                console.log(this.errors);
            });
        },

    }

});