<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DUALITY</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/control.css">
</head>

<body>
    <?php require 'header.php'?>
    <div class="background">
        <svg width="124" height="92" viewBox="0 0 124 92" xmlns="http://www.w3.org/2000/svg">
            <path d="M4 0H54L36 18.1978H4V0Z" />
            <path
                d="M32 42.4615C32 51.3952 24.8366 58.6374 16 58.6374C7.16344 58.6374 0 51.3952 0 42.4615C0 33.5279 7.16344 26.2857 16 26.2857C24.8366 26.2857 32 33.5279 32 42.4615Z" />
            <path
                d="M124 75.8242C124 84.7578 116.837 92 108 92C99.1634 92 92 84.7578 92 75.8242C92 66.8905 99.1634 59.6483 108 59.6483C116.837 59.6483 124 66.8905 124 75.8242Z" />
            <path d="M121 51.5604L71 51.5604L89 33.3626L121 33.3626V51.5604Z" />
            <path d="M4 66.7253H95V84.9231H4V66.7253Z" />
            <path d="M75 0H121V18.1978H83L49.5 51.5604H29V33.3626H42.5L75 0Z" />
        </svg>
    </div>
    <main>
        <h1>TABLEAU DE BORD</h1>
        <div style="overflow-x: scroll;">

            <table>
                <thead>
                    <tr>
                        <th>NOM</th>
                        <th>RATIO</th>
                        <th>VICTOIRES</th>
                        <th>DÉFAITES</th>
                        <th>ATTAQUE</th>
                        <th>DÉFENSE</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>

            <div class="confirmation">
                <img src="" alt="" srcset="">
                <h6>Voulez-vous vraiment supprimer <span></span> ?</h6>
                <div class="bouton active">
                    <div><span class="box"></span><span class="text">SUPPRIMER</span></div>
                </div>
                <div class="quit">
                    <div></div>
                </div>
            </div>
        </div>
        <a class="bouton active create" href="create.php">
            <div><span class="box"></span><span class="text">CRÉER UN AGENT</span></div>
        </a>
    </main>

    <?php require 'footer.php'?>

    <script>
    function Run() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                data = JSON.parse(this.response)
                data = Object.values(data).sort(function(a, b) {
                    return b.ratio - a.ratio
                })

                data.forEach((value) => {
                    document.querySelector("table tbody").innerHTML +=
                        `<tr>
                            <td><img src="assets/img/${value.image}_icon.png" alt=""><span>${value.nom}</span></td>
                            <td>${value.ratio}</td>
                            <td>${value.victoires}</td>
                            <td>${value.defaites}</td>
                            <td>${value.attaque}%</td>
                            <td>${value.defense}%</td>
                            <td>
                                <svg class='edit' id='${value.id}' height='26' viewBox="0 0 23 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="14" height="3" fill="#578eeb"/>
                                    <rect y="5" width="14" height="3" fill="#578eeb"/>
                                    <rect y="10" width="10" height="3" fill="#578eeb"/>
                                    <path d="M11 15L17.5 8.5L20.5 11.5L14 18H11V15Z" fill="#578eeb"/>
                                    <path d="M18 8.00001C18 8.00001 19.7564 5.75644 21.5 7.50001C23.2436 9.24358 21 11 21 11L18 8.00001Z" fill="#578eeb"/>
                                </svg>                
                            </td>
                            <td>
                                <svg class='delete' id='${value.id}' width='28' height='26' viewBox="0 0 16 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.5 5.5H13.5V18.3787L12.3787 19.5H3.62132L2.5 18.3787V5.5Z" stroke="#FF4655" stroke-width="3"/>
                                    <path d="M0 1H5V0H11V1H16V3H0V1Z" fill="#FF4655"/>
                                </svg>
                            </td>
                        </tr>`
                })
                document.querySelectorAll(".edit").forEach((agent) => {
                    agent.addEventListener("click", () => {
                        let id = agent.getAttribute("id")
                        window.location.replace("edit.php?id=" + id)
                    })
                })

                document.querySelectorAll(".delete").forEach((agent) => {
                    agent.addEventListener("click", () => {
                        let id = agent.getAttribute("id")
                        let info = agent.parentElement.parentElement.firstElementChild
                        let image = info.firstElementChild.getAttribute("src")
                        let nom = info.lastElementChild.innerHTML
                        confirmation = document.querySelector(".confirmation")
                        confirmation.querySelector("img").setAttribute("src", image)
                        confirmation.querySelector("span").innerHTML = nom
                        confirmation.classList.add("active")
                        confirmation.querySelector(".bouton").addEventListener("click", () => {
                            var xmlhttp = new XMLHttpRequest();
                            xmlhttp.onreadystatechange = function() {
                                if (this.readyState == 4 && this.status == 200) {
                                    agent.parentElement.parentElement.remove()
                                    confirmation.classList.remove("active")
                                }
                            };
                            xmlhttp.open("POST", "php/functions/delete.php?id=" + id, true);
                            xmlhttp.send();

                        })
                        confirmation.querySelector(".quit").addEventListener("click", () => {
                            confirmation.classList.remove("active")
                        })


                    })
                })
            }
        };
        xmlhttp.open("POST", "php/functions/getAll.php");
        xmlhttp.send();
    }
    document.addEventListener("DOMContentLoaded", Run)
    </script>
</body>

</html>