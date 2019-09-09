<template>
    <b-modal id="createEventModal" title="Create Event">
        <form id="eventForm">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="title" class="col-form-label">Title :</label>
                        <input type="text" class="form-control" id="title" name="title" v-model="title">
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-form-label">Description :</label>
                        <textarea class="form-control" id="description" v-model="description"></textarea>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="start_time" class="col-form-label">Start Time</label>
                        <input type="text" class="form-control" id="start_time" name="start_time" v-model="start_time">
                    </div>
                    <div class="form-group">
                        <label for="finish_time" class="col-form-label">Finish Time</label>
                        <input type="text" class="form-control" id="finish_time" name="finish_time" v-model="finish_time">
                    </div>
                    <div class="form-group">
                        <label for="cover_photo" class="col-form-label">Cover Photo</label>
                        <input type="file" class="form-control" id="cover_photo" name="cover_photo">
                    </div>
                </div>
            </div>
        </form>
        <div slot="modal-footer">
            <b-button variant="secondary" @click="hideModal">Close Me</b-button>
            <b-button variant="primary" @click="createEvent">Submit Event</b-button>
        </div>
    </b-modal>
</template>

<script>
    export default {
        name: "EventFormComponent",

        data() {
            return {
                title: "",
                description: "",
                start_time: "2019-01-01",
                finish_time: "2019-01-02"
            }
        },

        methods: {
            createEvent() {
                var data = {
                    'title': title.value,
                    'description': description.value,
                    'start_time': start_time.value,
                    "finish_time": finish_time.value,
                };
                axios.post('http://api.pasho/api/events', data, {
                    'Accept': "application/json",
                    "Content-Type": "application/json"
                }).then(() => {
                    this.$bvModal.hide('createEventModal');
                    this.$bvModal.msgBoxOk('Event got created', {
                        title: 'Confirmation',
                        buttonSize: 'sm',
                        okVariant: 'success',
                        size: 'sm',
                        headerClass: 'p-2 border-bottom-0',
                        footerClass: 'p-2 border-top-0',
                    });

                }).catch((error, response) => {
                    status = error.response.status;
                    if (status == 422) {
                        /*$("#createEvent").modal("hide");
                        $('.modal-backdrop').hide();

                        this.$bvModal.show("modal-1")

                        console.log(error.response.data.errors);*/
                    } else {
                        this.$bvModal.hide('createEventModal');

                    }

                    this.$bvModal.show('messageModal');
                });
            },

            hideModal() {
                this.$bvModal.hide("createEventModal");
            }
        }
    }
</script>

<style scoped>

</style>