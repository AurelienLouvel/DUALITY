<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DUALITY</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/duel.css">
</head>

<body>
    <?php require 'header.php'?>
    <main>
        <div class="background">
            <svg width="92" height="106" viewBox="0 0 92 106" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0.0821173 0L42.3224 40.844V50.5688C43.3281 52.5138 46.3453 52.5138 46.3453 52.5138C46.3453 52.5138 49.3624 52.5138 50.3681 50.5688L50.3682 40.844L91.6027 0C91.6027 0 93.6141 23.3394 88.5856 34.0367L80.5398 41.8165V34.0367C80.5398 34.0367 72.9046 38.9281 70.4826 43.7615C69.4768 47.6514 69.4768 54.4587 69.4768 54.4587C69.4768 54.4587 63.4867 52.4638 60.4254 53.4862C57.5259 54.4546 56.6939 56.6332 55.3968 59.3211C68.4711 68.0734 76.5169 78.7706 76.5169 78.7706C81.3563 88.3872 79.5341 106 79.5341 106L52.3796 80.7156V67.1009C50.869 66.6836 49.8154 66.5367 48.3567 67.1009V76.8257C46.8981 77.3899 45.7925 77.3899 44.3338 76.8257V67.1009C42.8752 66.5367 41.8215 66.6836 40.311 67.1009V80.7156L12.1508 106C12.1508 106 11.1277 88.3403 16.1737 78.7706C16.1737 78.7706 24.2194 68.0734 37.2938 59.3211C35.9966 56.6332 35.1646 54.4546 32.2652 53.4862C29.2039 52.4638 23.2136 54.4587 23.2136 54.4587C23.2136 54.4587 23.2136 47.6514 22.208 43.7615C19.786 38.9281 12.1508 34.0367 12.1508 34.0367V41.8165L4.105 34.0367C-0.923704 23.3394 0.0821173 0 0.0821173 0Z" />
            </svg>
        </div>

        <div class="agents">
            <div class="attaquant">
                <h6>SÉLECTIONNEZ UN AGENT</h6>
                <form class="agent" id="attaquant"> </form>
                <div class="display"></div>
                <div class="dead">
                    <svg width="106" height="124" viewBox="0 0 106 124" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M13.0176 31.4627C13.0176 31.4627 7.4386 42.5672 0 48.1194C0 48.1194 -9.66557e-05 70.3284 3.7193 81.4328C11.1578 92.5373 29.7544 96.2388 29.7544 96.2388V98.0896L26.0351 99.9403L37.193 124C37.193 124 38.5377 121.765 40.9122 121.224L52.9999 122.149L65.0876 121.224C67.4621 121.765 68.807 124 68.807 124L79.9649 99.9403L76.2456 98.0896V96.2388C76.2456 96.2388 94.842 92.5373 102.281 81.4328C106 70.3284 106 48.1194 106 48.1194C98.5614 42.5672 92.9825 31.4627 92.9825 31.4627V14.806C92.9825 9.25373 65.0877 0 57.6491 0V28.6866C56.7193 31.4627 53 31.4627 53 31.4627C53 31.4627 49.2807 31.4627 48.3509 28.6866V0C40.9123 2.11801e-05 13.0176 9.25373 13.0176 14.806V31.4627ZM13.0175 55.5224L46.4912 72.1791C46.4912 72.1791 42.7719 83.2836 35.3333 83.2836C27.8947 83.2836 19.5263 79.5821 16.7368 73.1045C15.8111 70.9547 15.807 61.0746 15.807 61.0746L13.0175 55.5224ZM59.5088 72.1791L92.9825 55.5224L90.193 61.0746C90.193 61.0746 90.1889 70.9547 89.2632 73.1045C86.4737 79.5821 78.1053 83.2836 70.6667 83.2836C63.2281 83.2836 59.5088 72.1791 59.5088 72.1791ZM50.2105 88.8358H52.0702V99.9403H50.2105C50.2105 99.9403 46.4912 96.994 46.4912 94.3881C46.4912 91.7821 50.2105 88.8358 50.2105 88.8358ZM55.7895 99.9403H53.9298V88.8358H55.7895C55.7895 88.8358 59.5088 91.7821 59.5088 94.3881C59.5088 96.994 55.7895 99.9403 55.7895 99.9403Z" />
                    </svg>
                </div>
            </div>

            <div class="duel">
                <div class="bouton">
                    <div><span class="box"></span>
                        <span class="svg"></span>
                    </div>
                </div>
            </div>

            <div class="defenseur">
                <h6>SÉLECTIONNEZ UN AGENT</h6>
                <form class="agent" id="defenseur"></form>
                <div class="display"></div>
                <div class="dead">
                    <svg width="106" height="124" viewBox="0 0 106 124" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M13.0176 31.4627C13.0176 31.4627 7.4386 42.5672 0 48.1194C0 48.1194 -9.66557e-05 70.3284 3.7193 81.4328C11.1578 92.5373 29.7544 96.2388 29.7544 96.2388V98.0896L26.0351 99.9403L37.193 124C37.193 124 38.5377 121.765 40.9122 121.224L52.9999 122.149L65.0876 121.224C67.4621 121.765 68.807 124 68.807 124L79.9649 99.9403L76.2456 98.0896V96.2388C76.2456 96.2388 94.842 92.5373 102.281 81.4328C106 70.3284 106 48.1194 106 48.1194C98.5614 42.5672 92.9825 31.4627 92.9825 31.4627V14.806C92.9825 9.25373 65.0877 0 57.6491 0V28.6866C56.7193 31.4627 53 31.4627 53 31.4627C53 31.4627 49.2807 31.4627 48.3509 28.6866V0C40.9123 2.11801e-05 13.0176 9.25373 13.0176 14.806V31.4627ZM13.0175 55.5224L46.4912 72.1791C46.4912 72.1791 42.7719 83.2836 35.3333 83.2836C27.8947 83.2836 19.5263 79.5821 16.7368 73.1045C15.8111 70.9547 15.807 61.0746 15.807 61.0746L13.0175 55.5224ZM59.5088 72.1791L92.9825 55.5224L90.193 61.0746C90.193 61.0746 90.1889 70.9547 89.2632 73.1045C86.4737 79.5821 78.1053 83.2836 70.6667 83.2836C63.2281 83.2836 59.5088 72.1791 59.5088 72.1791ZM50.2105 88.8358H52.0702V99.9403H50.2105C50.2105 99.9403 46.4912 96.994 46.4912 94.3881C46.4912 91.7821 50.2105 88.8358 50.2105 88.8358ZM55.7895 99.9403H53.9298V88.8358H55.7895C55.7895 88.8358 59.5088 91.7821 59.5088 94.3881C59.5088 96.994 55.7895 99.9403 55.7895 99.9403Z" />
                    </svg>
                </div>
            </div>
        </div>
    </main>
    <?php require 'footer.php'?>
    <script>
    let reload = false
    let wait = false

    function Shuffle(array) {
        for (let i = array.length - 1; i > 0; i--) {
            let j = Math.floor(Math.random() * (i + 1));
            [array[i], array[j]] = [array[j], array[i]];
        }
    }

    function Run() {
        wait = false
        let attaquant = document.querySelector("#attaquant")
        let defenseur = document.querySelector("#defenseur")
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                data = JSON.parse(this.response)
                Shuffle(data)
                document.querySelector(".attaquant").classList.remove("victory", "defeat")
                document.querySelector(".defenseur").classList.remove("victory", "defeat")
                attaquant.innerHTML = "";
                defenseur.innerHTML = "";
                document.querySelector(".duel .bouton .svg").innerHTML = `
                        <svg class="duel" width="92" height="106" viewBox="0 0 92 106"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.0821173 0L42.3224 40.844V50.5688C43.3281 52.5138 46.3453 52.5138 46.3453 52.5138C46.3453 52.5138 49.3624 52.5138 50.3681 50.5688L50.3682 40.844L91.6027 0C91.6027 0 93.6141 23.3394 88.5856 34.0367L80.5398 41.8165V34.0367C80.5398 34.0367 72.9046 38.9281 70.4826 43.7615C69.4768 47.6514 69.4768 54.4587 69.4768 54.4587C69.4768 54.4587 63.4867 52.4638 60.4254 53.4862C57.5259 54.4546 56.6939 56.6332 55.3968 59.3211C68.4711 68.0734 76.5169 78.7706 76.5169 78.7706C81.3563 88.3872 79.5341 106 79.5341 106L52.3796 80.7156V67.1009C50.869 66.6836 49.8154 66.5367 48.3567 67.1009V76.8257C46.8981 77.3899 45.7925 77.3899 44.3338 76.8257V67.1009C42.8752 66.5367 41.8215 66.6836 40.311 67.1009V80.7156L12.1508 106C12.1508 106 11.1277 88.3403 16.1737 78.7706C16.1737 78.7706 24.2194 68.0734 37.2938 59.3211C35.9966 56.6332 35.1646 54.4546 32.2652 53.4862C29.2039 52.4638 23.2136 54.4587 23.2136 54.4587C23.2136 54.4587 23.2136 47.6514 22.208 43.7615C19.786 38.9281 12.1508 34.0367 12.1508 34.0367V41.8165L4.105 34.0367C-0.923704 23.3394 0.0821173 0 0.0821173 0Z" />
                        </svg>`

                //CREATE SELECT
                data.forEach((value) => {
                    attaquant.innerHTML +=
                        `<label><input type="radio" name="agent" value='${value.id}'><span></span><img src="assets/img/${value.image}_icon.png" alt=""></label>`;
                    defenseur.innerHTML +=
                        `<label><input type="radio" name="agent" value='${value.id}'><span></span><img src="assets/img/${value.image}_icon.png" alt=""></label>`;
                })
                //DISPLAY
                SelectAgent("attaquant", data[0].id)
                document.querySelector(".attaquant [value='" + data[0].id + "']").checked = true
                SelectAgent("defenseur", data[1].id)
                document.querySelector(".defenseur [value='" + data[1].id + "']").checked = true
                //ON CHANGE
                document.querySelectorAll("form").forEach((element) => {
                    element.addEventListener("change", (agent) => {
                        SelectAgent(element.getAttribute("id"), agent.target
                            .getAttribute("value"))
                    })
                })
                wait = true
            }
        };
        xmlhttp.open("POST", "php/functions/getAll.php");
        xmlhttp.send();

        function SelectAgent(element, agent) {
            if (element == "attaquant") {
                document.querySelectorAll(".defenseur input[type='radio']").forEach((
                    radio) => {
                    radio.disabled = false
                })
                document.querySelector(".defenseur [value='" + agent + "']")
                    .disabled = true
            } else if (element == "defenseur") {
                document.querySelectorAll(".attaquant input[type='radio']").forEach((
                    radio) => {
                    radio.disabled = false
                })
                document.querySelector(".attaquant [value='" + agent + "']")
                    .disabled = true
            }
            DisplayAgent(agent, element)
        }

        function DisplayAgent(id, type) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    data = JSON.parse(this.response)
                    document.querySelector(`.${type} .display`).innerHTML =
                        `<dl>
                            <h2 class="nom">${data.nom}</h2>
                            <dt>// RÔLE
                                <h3 class="role">${data.role}</h3>
                            </dt>
                            <dt>
                                <h6>// STATISTIQUES</h6>
                                <div class="stats">
                                    <h5 class="attaque">ATTAQUE : <span>${data.attaque}</span>%</h5>
                                    <h5 class="defense">DÉFENSE : <span>${data.defense}</span>%</h5>
                                </div>
                            </dt>
                            <dt>
                                <h6>//BIOGRAPHIE</h6>
                                <p class="biographie">${data.biographie}</p>
                            </dt>
                        </dl>                        
                        <div class="pv">
                            <h4><span>${Math.round(data.pv)}</span> PV</h4>
                            <svg width="40" height="40" viewBox="0 0 110 94" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M39.8603 3.19568C23.1101 -4.3295 -5.55176 -0.84963 0.940137 38.8153C3.94773 57.1915 54.6398 94 54.6398 94C54.6398 94 103.98 56.9082 108.339 38.8153C117.554 0.573334 86.1702 -4.32949 69.4198 3.19574C66.2647 4.61318 54.64 16.7411 54.64 16.7411C54.64 16.7411 44.1365 5.11679 39.8603 3.19568ZM61.5373 39.8183C57.1492 35.3644 54.6401 25.2696 54.6401 25.2696C54.6401 25.2696 52.1311 35.3644 47.7429 39.8183C43.2317 44.3971 32.9632 46.8418 32.9632 46.8418C32.9632 46.8418 43.2102 49.3086 47.7429 53.8653C51.9071 58.0514 54.6401 67.4106 54.6401 67.4106C54.6401 67.4106 57.3732 58.0514 61.5373 53.8653C66.0701 49.3086 76.3171 46.8418 76.3171 46.8418C76.3171 46.8418 66.0486 44.3971 61.5373 39.8183Z"/>
                            </svg>
                            <span width="calc(${data.pv}/150*100)%"></span>
                        </div>
                        <img class="artwork" src="assets/img/${data.image}_artwork.png">`
                }
            };
            xmlhttp.open("POST", "php/functions/getById.php?id=" + id, true);
            xmlhttp.send();
        }

        document.querySelector(".bouton").addEventListener("click", () => {
            if (wait) {
                if (!reload) {
                    wait = false
                    reload = true
                    let attaquant, defenseur
                    let form = new FormData()

                    document.querySelectorAll(".attaquant input[type='radio']").forEach((
                        radio) => {
                        if (radio.checked == true) {
                            attaquant = radio.getAttribute("value")
                        }
                    })
                    document.querySelectorAll(".defenseur input[type='radio']").forEach((
                        radio) => {
                        if (radio.checked == true) {
                            defenseur = radio.getAttribute("value")
                        }
                    })

                    form.append('attaquant', attaquant)
                    form.append('defenseur', defenseur)
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            let data = JSON.parse(this.response)
                            let gagnant = document.querySelector("." + data.gagnant)
                            let perdant = document.querySelector("." + data.perdant)
                            gagnant.classList.add("victory")
                            perdant.classList.add("defeat")
                            gagnant.querySelector(".pv span").innerHTML = data.pv_gagnant
                            perdant.querySelector(".pv span").innerHTML = data.pv_perdant
                            document.querySelectorAll("input[type='radio']").forEach((
                                radio) => {
                                radio.disabled = true
                            })
                            document.querySelector(".duel svg").remove()
                            document.querySelector(".duel .bouton .svg").innerHTML += `
                        <svg class="duel" width="104" height="114" viewBox="0 0 104 114" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M100 64C100 75.2309 96.2189 86.1348 89.2658 94.9547C82.3128 103.775 72.5929 109.997 61.6723 112.618C50.7516 115.24 39.2663 114.109 29.067 109.407C18.8677 104.705 10.5484 96.7064 5.44968 86.6995C0.350932 76.6927 -1.23031 65.2606 0.960735 54.2455C3.15178 43.2303 8.98751 33.2736 17.5276 25.9797C26.0677 18.6858 36.8147 14.4795 48.037 14.0385C59.2593 13.5976 70.3032 16.9478 79.3893 23.5491L70.5725 35.6844C64.2123 31.0634 56.4815 28.7183 48.6259 29.027C40.7703 29.3356 33.2474 32.2801 27.2693 37.3858C21.2913 42.4915 17.2062 49.4612 15.6725 57.1718C14.1388 64.8824 15.2457 72.8849 18.8148 79.8897C22.3839 86.8945 28.2074 92.4937 35.3469 95.785C42.4864 99.0764 50.5261 99.8682 58.1706 98.0329C65.815 96.1977 72.619 91.8422 77.4861 85.6683C82.3532 79.4944 85 71.8617 85 64H100Z"/>
                            <path d="M74 0L99.9808 45H48.0192L74 0Z"/>
                        </svg>`
                            wait = true
                        }
                    };
                    xmlhttp.open("POST", "php/functions/duel.php");
                    xmlhttp.send(form);
                } else {
                    Run()
                    reload = false
                }
            }

        })
    }
    document.addEventListener("DOMContentLoaded", Run)
    </script>
</body>

</html>