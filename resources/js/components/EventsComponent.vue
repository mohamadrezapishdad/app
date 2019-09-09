<template>
    <main class="col col-xl-12 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">
        <div id="newsfeed-items-grid">
            <div v-for="event in events">
                <event-component :event="event"></event-component>
            </div>


        </div>

        <a id="load-more-button" href="#" class="btn btn-control btn-more" data-load-link="items-to-load.html"
           data-container="newsfeed-items-grid">
            <svg class="olymp-three-dots-icon">
                <use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
            </svg>
        </a>

    </main>
</template>

<script>
    export default {
        name: "EventsComponent",

        mounted() {
            this.getEvents();
        },

        data() {
            return {
                events : []
            };
        },

        methods : {
            getEvents() {
                axios.get('http://api.pasho/api/events', {}, {
                    headers: {
                        'Accept': 'application/json',
                    },
                }).then(response => {
                    console.log(response.data.data);
                    if (this.events == null){
                        this.events = response.data.data;
                    }else{
                        response.data.data.forEach(item => this.events.push(item));
                    }
                });
            }
        }
    }
</script>

<style scoped>

</style>