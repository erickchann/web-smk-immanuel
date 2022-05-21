<template>
    <div>
        <div class="row">
            <div class="col-lg-6">
                <img :src="`${url}?id=${Date.now()}`" alt="Kartu Pelajar" class="student-card" @error="imageError">
                <button type="button" class="btn btn-primary form-control mt-2" @click="downloadColor">Download</button>
            </div>

            <div class="col-lg-6">
                <img :src="`${url}?id=${Date.now()}`" alt="Kartu Pelajar" class="student-card card-gray" @error="imageError">
                <button type="button" class="btn btn-primary form-control mt-2" @click="downloadGrayscale">Download</button>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'

export default {
    data() {
        return {
            token: localStorage.getItem('token'),
            me: '',
            baseUrl: 'https://smkimmanuel.sch.id/api/',
            // baseUrl: 'http://localhost:8000/',
            url: ''
        }
    },
    methods: {
        getMe() {
            axios.get(`auth/me?token=${this.token}`)
                .then(res => {
                    this.me = res.data;

                    this.generateUrl();
                })
                .catch(err => {
                    // console.log(err.response.data);
                }); 
        },
        generateUrl() {
            let url = `${this.baseUrl}storage/kartu_pelajar/card_${this.me.nis}.jpg`;

            this.url = url;

            this.draw();
        },
        imageError() {
            let url = `${this.baseUrl}storage/kartu_pelajar/nocard.jpg`;

            this.url = url;
        },
        downloadColor() {
            window.open(`${this.API_URL}card/color?token=${this.token}`);
        },
        downloadGrayscale() {
            window.open(`${this.API_URL}card/grayscale?token=${this.token}`);
        }
    },
    created() {
        this.getMe();
    },
}
</script>

<style scoped>

.student-card {
    object-fit: contain;
}

.card-gray {
    filter: grayscale();
}

.col-lg-6 {
    height: fit-content;
}

@media only screen and (max-width: 991px) {
    .col-lg-6 {
        height: fit-content;
        width: 100%;
        flex: 0 0 100%;
    }

    .col-lg-6:first-child {
        margin-bottom: 2rem;
    }

	.container {
		max-width: 100% !important;
		width: 90% !important;
		margin: auto;
	}
}

</style>