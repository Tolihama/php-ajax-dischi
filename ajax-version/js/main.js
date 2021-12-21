const app = new Vue({
    el: '#app',
    data: {
        albums: null,
    },
    created() {
        this.getAlbums();
    },
    methods: {
        getAlbums() {
            axios.get('http://localhost/php-ajax-dischi/ajax-version/partials/api.php')
                .then(result => this.albums = result.data)
                .catch(err => console.log(err));
        }
    }
});