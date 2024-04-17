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
        <header></header>
        <main>
            <div class="records container">
                <!-- card -->
                <div v-for="record in records" class="card">
                    <div class="top">
                        <img width="200px" :src="record.poster" alt="album cover">
                    </div>
                    <div class="bottom">
                        <h3>{{record.title}}</h3>
                        <h6>{{record.author}}</h6>
                        <h4>{{record.year}}</h4>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- axios cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js" integrity="sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./assets/js/app.js"></script>
</body>

</html>