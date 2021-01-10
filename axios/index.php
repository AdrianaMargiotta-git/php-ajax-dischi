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
                <label for="autore">Filtra per autore</label>
                <select v-model="singerAttuale" @change="selectSinger">
                    <option value="All">All</option>
                    <option value="Bon Jovi">Bon Jovi</option>
                    <option value="Queen">Queen</option>
                    <option value="Sting">Sting</option>
                    <option value="Steve Gadd Band">Steve Gadd Band</option>
                    <option value="Iron Maiden">Iron Maiden</option>
                    <option value="Eric Clapton">Eric Clapton</option>
                </select>
            </div>

            <div class="dischi">
                <ul class="recordsList">
                    <li v-for="record in database" class="recordSingle">
                        <div>
                            <img :src="record.poster" :alt="record.title">
                        </div>
                        <h2 class="titolo">{{record.title}}</h2>
                        <h3 class="autore">{{record.author}}</h3>
                        <h3 class="anno">{{record.year}}</h3>
                    </li>
                </ul>
            </div>

        </main>
    
    </div>

    <script type="text/javascript" src="script.js"></script>

</body>
</html>