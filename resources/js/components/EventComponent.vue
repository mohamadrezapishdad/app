<template>
    <div class="ui-block">

        <article class="hentry post video">

            <div class="post__author author vcard inline-items">
                <img :src="event.creator.avatar_url" alt="author">

                <div class="author-date">
                    <a class="h6 post__author-name fn" href="02-ProfilePage.html">{{event.creator.name}}</a>
                    <div class="post__date">
                        <time class="published" datetime="2017-03-24T18:18">
                            19 hours ago
                        </time>
                    </div>
                </div>

                <div class="more">
                    <svg class="olymp-three-dots-icon">
                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                    </svg>
                    <ul class="more-dropdown">
                        <li>
                            <a href="#">Edit Post</a>
                        </li>
                        <li>
                            <a href="#">Delete Post</a>
                        </li>
                        <li>
                            <a href="#">Turn Off Notifications</a>
                        </li>
                        <li>
                            <a href="#">Select as Featured</a>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="row">
                <div class="col-md-7">
                    <a href="#">
                        <img class="img-fluid rounded mb-3 mb-md-0" :src="(event.cover_path !=null)?(event.cover_url) : 'http://placehold.it/750x500'" alt="">
                    </a>
                </div>

                <div class="col-md-5">
                    <h3>{{event.title}}</h3>
                    <p>{{event.description}}</p>
                    <p>Creator : <span class="font-weight-bold">{{event.creator.name}}</span></p>
                    <p>Start Time : <span class="font-weight-bold">{{event.start_time}}</span></p>
                    <p>Finish Time : <span class="font-weight-bold">{{event.finish_time}}</span></p>
                    <a class="btn btn-primary" :href="'events/'+event.id">View Event</a>
                </div>

            </div>



            <div class="post-additional-info inline-items">

                <a href="#" class="post-add-icon inline-items">
                    <svg class="olymp-heart-icon">
                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use>
                    </svg>
                    <span>18</span>
                </a>

                <ul class="friends-harmonic">
                    <li>
                        <a href="#">
                            <img src="img/friend-harmonic9.jpg" alt="friend">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/friend-harmonic10.jpg" alt="friend">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/friend-harmonic7.jpg" alt="friend">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/friend-harmonic8.jpg" alt="friend">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/friend-harmonic11.jpg" alt="friend">
                        </a>
                    </li>
                </ul>

                <div class="names-people-likes">
                    <a href="#">Jenny</a>, <a href="#">Robert</a> and
                    <br>18 more liked this
                </div>

                <div class="comments-shared">
                    <a href="#" class="post-add-icon inline-items">
                        <svg class="olymp-speech-balloon-icon">
                            <use
                                    xlink:href="svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use>
                        </svg>

                        <span>0</span>
                    </a>

                    <a href="#" class="post-add-icon inline-items">
                        <svg class="olymp-share-icon">
                            <use xlink:href="svg-icons/sprites/icons.svg#olymp-share-icon"></use>
                        </svg>

                        <span>16</span>
                    </a>
                </div>


            </div>

            <div class="control-block-button post-control-button">

                <a href="#" class="btn btn-control">
                    <svg class="olymp-like-post-icon">
                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-like-post-icon"></use>
                    </svg>
                </a>

                <a href="#" class="btn btn-control">
                    <svg class="olymp-comments-post-icon">
                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use>
                    </svg>
                </a>

                <a href="#" class="btn btn-control">
                    <svg class="olymp-share-icon">
                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-share-icon"></use>
                    </svg>
                </a>

            </div>

        </article>
    </div>
</template>

<script>
    export default {
        name: "EventComponent",

        props: ['event'],
    }
</script>

<style scoped>

</style>