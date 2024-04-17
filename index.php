<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- vue cdn -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>

<body>
    <div id="app">
        <header>
            <div class="container-lg">
                <img width="40" src="https://upload.wikimedia.org/wikipedia/commons/8/84/Spotify_icon.svg" alt="">
            </div>
        </header>
        <main>
            <!-- records -->
            <div class="records container">
                <!-- card -->
                <div @click="openRecordModal(index)" v-for="(record, index) in records" class="card" :key="record.title">
                    <div class="top">
                        <img :src="record.poster" alt="album cover">
                    </div>
                    <div class="bottom">
                        <h3>{{record.title}}</h3>
                        <h6>{{record.author}}</h6>
                        <h4>{{record.year}}</h4>
                    </div>
                </div>
            </div>
            <!-- info modal -->
            <transition name="modal">
                <div v-if="isRecordModal" class="record_modal" @click="isRecordModal = false">
                    <!-- card -->
                    <div class="modal_card" @click.stop="">
                        <div class="top">
                            <img :src="currentRecord.poster" alt="album cover">
                        </div>
                        <div class="bottom">
                            <h2>{{currentRecord.title}}</h2>
                            <h5>{{currentRecord.author}}</h5>
                            <h3>{{currentRecord.year}}</h3>
                        </div>
                    </div>
                </div>
            </transition>

        </main>
    </div>

    <!-- axios cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js" integrity="sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./assets/js/app.js"></script>
</body>

</html>