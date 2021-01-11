<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div id="app">
        <header>
            <i class="fab fa-spotify"> SpotiAdriana</i>
        </header>

        <main>
            <div class="seleziona">
                <!-- <button @click="all">CLEAR</button>
                <button v-for="disco in dischi" @click="update(disco.author)">
                    {{ disco.author }}
                </button> -->

                <button @click="all">All</button>
                <button @click="update('Bon Jovi')">Bon Jovi</button>
                <button @click="update('Queen')">Queen</button>
                <button @click="update('Sting')">Sting</button>
                <button @click="update('Steve Gadd Band')">Steve Gadd Band</button>
                <button @click="update('Iron Maiden')">Iron Maiden</button>
                <button @click="update('Eric Clapton')">Eric Clapton</button>
            </div>

            <div class="dischi">
                <ul class="recordsList">
                    <li v-for="disco in dischi" class="recordSingle">
                        <div>
                            <img :src="disco.poster" :alt="disco.title">
                        </div>
                        <h2 class="titolo">{{disco.title}}</h2>
                        <h3 class="autore">{{disco.author}}</h3>
                        <h3 class="anno">{{disco.year}}</h3>
                    </li>
                </ul>
            </div>

        </main>
    
    </div>

    <script type="text/javascript" src="script.js"></script>

</body>
</html>