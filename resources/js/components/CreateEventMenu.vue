<template>
    <div>
        <li>
            <a v-b-modal.createEventModal class="pointer-courser">
                <svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"
                     data-original-title="CREATE EVENT">
                    <use xlink:href="svg-icons/sprites/icons.svg#olymp-plus-icon"></use>
                </svg>
            </a>
        </li>
    </div>
</template>

<script>
    export default {
        name: "CreateEventMenu"
    }
</script>

<style scoped>

</style>