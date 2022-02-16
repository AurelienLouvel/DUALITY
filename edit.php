<?php
require 'php/init.php';
if(isset($_GET["id"])){    
    $id = htmlspecialchars($_GET["id"]);
    $agent = $manager->getById($id);
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DUALITY</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/form.css">
</head>

<body>
    <?php require 'header.php'?>
    <main>
        <form>
            <div class="section">
                <input type="text" id="nom" oninput="this.value = this.value.toUpperCase()"
                    value="<?php echo $agent->getNom()?>" placeholder="<?php echo $agent->getNom()?>">
            </div>
            <div class="other">
                <div class="form">
                    <div class="section">
                        <h6>// RÔLE</h6>
                        <div class="role">
                            <div class="dropdown">
                                <div class="selected">
                                    <span></span><svg viewBox="0 0 20 20">
                                        <path d="M6.3 3l3.6 3.5m4.5 3.5l-8.2 7" pathLength="1"></path>
                                    </svg>
                                </div>
                                <input type="hidden" id="role" value="DUELLISTE" attaque="100" defense="0">
                                <div class="options">
                                    <span attaque="100" defense="0">DUELLISTE</span>
                                    <span attaque="75" defense="25">INITIATEUR</span>
                                    <span attaque="0" defense="100">SENTINELLE</span>
                                    <span attaque="25" defense="75">CONTRÔLEUR</span>
                                </div>
                            </div>
                            <div class="stats">
                                <h5 class="attaque">ATTAQUE : <span>100</span>%</h5>
                                <h5 class="defense">DÉFENSE : <span>0</span>%</h5>
                            </div>
                        </div>
                    </div>
                    <div class="section bio">
                        <h6>// BIOGRAPHIE</h6>
                        <textarea id="biographie" cols="60" rows="6"><?php echo $agent->getBiographie()?></textarea>
                    </div>
                </div>
                <div class="section">
                    <h6>// IMAGE</h6>
                    <div class="agent">
                        <label>
                            <input type="radio" name="agent" value="Astra"><span></span><img
                                src="assets/img/Astra_icon.png" alt="">
                        </label>
                        <label>
                            <input type="radio" name="agent" value="Breach"><span></span><img
                                src="assets/img/Breach_icon.png" alt="">
                        </label>
                        <label>
                            <input type="radio" name="agent" value="Brimstone"><span></span><img
                                src="assets/img/Brimstone_icon.png" alt="">
                        </label>
                        <label>
                            <input type="radio" name="agent" value="Chamber"><span></span><img
                                src="assets/img/Chamber_icon.png" alt="">
                        </label>
                        <label>
                            <input type="radio" name="agent" value="Cypher"><span></span><img
                                src="assets/img/Cypher_icon.png" alt="">
                        </label>
                        <label>
                            <input type="radio" name="agent" value="Jett"><span></span><img
                                src="assets/img/Jett_icon.png" alt="">
                        </label>
                        <label>
                            <input type="radio" name="agent" value="KAYO"><span></span><img
                                src="assets/img/KAYO_icon.png" alt="">
                        </label>
                        <label>
                            <input type="radio" name="agent" value="Killjoy"><span></span><img
                                src="assets/img/Killjoy_icon.png" alt="">
                        </label>
                        <label>
                            <input type="radio" name="agent" value="Neon"><span></span><img
                                src="assets/img/Neon_icon.png" alt="">
                        </label>
                        <label>
                            <input type="radio" name="agent" value="Omen"><span></span><img
                                src="assets/img/Omen_icon.png" alt="">
                        </label>
                        <label>
                            <input type="radio" name="agent" value="Phoenix"><span></span><img
                                src="assets/img/Phoenix_icon.png" alt="">
                        </label>
                        <label>
                            <input type="radio" name="agent" value="Raze"><span></span><img
                                src="assets/img/Raze_icon.png" alt="">
                        </label>
                        <label>
                            <input type="radio" name="agent" value="Reyna"><span></span><img
                                src="assets/img/Reyna_icon.png" alt="">
                        </label>
                        <label>
                            <input type="radio" name="agent" value="Sage"><span></span><img
                                src="assets/img/Sage_icon.png" alt="">
                        </label>
                        <label>
                            <input type="radio" name="agent" value="Skye"><span></span><img
                                src="assets/img/Skye_icon.png" alt="">
                        </label>
                        <label>
                            <input type="radio" name="agent" value="Sova"><span></span><img
                                src="assets/img/Sova_icon.png" alt="">
                        </label>
                        <label>
                            <input type="radio" name="agent" value="Viper"><span></span><img
                                src="assets/img/Viper_icon.png" alt="">
                        </label>
                        <label>
                            <input type="radio" name="agent" value="Yoru"><span></span><img
                                src="assets/img/Yoru_icon.png" alt="">
                        </label>
                    </div>
                </div>
            </div>
        </form>

        <a class="bouton active">
            <div><span class="box"></span><span class="text">ENREGISTRER</span></div>
        </a>

    </main>
    <?php require 'footer.php'?>

    <script src="js/form.js"></script>

    <script>
    function Run() {
        let role = "<?php echo $agent->getRole()?>";
        let getattaque = <?php echo $agent->getAttaque()?>;
        let getdefense = <?php echo $agent->getDefense()?>;
        let image = "<?php echo $agent->getImage()?>";
        let selected = document.querySelector(".dropdown .selected span");


        document.querySelector('[src="assets/img/' + image + '_icon.png"]').parentElement.querySelector(
            "input").checked = true


        selected.innerHTML = role;
        selected.setAttribute("value", role);
        option.forEach((e) => {
            e.classList.remove("hidden");
            if (e.innerHTML == role) {
                console.log(role)
                e.classList.add("hidden");
            }
        });
        input.setAttribute("value", role);
        input.setAttribute("attaque", getattaque);
        input.setAttribute("defense", getdefense);
        attaque.innerHTML = getattaque
        defense.innerHTML = getdefense;

        document.querySelector(".bouton").addEventListener("click", (event) => {
            let form = new FormData()
            form.append('id', <?php echo $agent->getId()?>)
            form.append('nom', nom.value)
            form.append('role', document.querySelector('#role').value)
            form.append('biographie', document.querySelector('#biographie').value)
            form.append('image', image)
            form.append('attaque', document.querySelector('#role').getAttribute("attaque"))
            form.append('defense', document.querySelector('#role').getAttribute("defense"))

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    window.location.replace('control.php')
                }
            };
            xmlhttp.open("POST", "php/functions/edit.php", true);
            xmlhttp.send(form);
        })
    }
    document.addEventListener("DOMContentLoaded", Run)
    </script>

</body>

</html>