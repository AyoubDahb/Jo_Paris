<!-- /views/partials/cookie_banner.php -->
<div id="cookie-banner" class="cookie-banner">
    <p>Nous utilisons des cookies pour améliorer votre expérience sur notre site.</p>
    <button onclick="acceptCookies()">Accepter</button>
    <button onclick="refuseCookies()">Refuser</button>
</div>

<style>
    .cookie-banner {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 15px;
        background-color: rgba(0, 0, 0, 0.8);
        color: white;
        text-align: center;
        z-index: 9999;
    }

    .cookie-banner button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        font-size: 1rem;
        margin: 0 10px;
    }

    .cookie-banner button:hover {
        background-color: #45a049;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Afficher le bandeau si l'utilisateur n'a pas encore accepté ou refusé les cookies
        if (!getCookie("cookies_accepted") && !getCookie("cookies_refused")) {
            document.getElementById("cookie-banner").style.display = "block";
        } else {
            document.getElementById("cookie-banner").style.display = "none";
        }
    });

    // Fonction pour obtenir la valeur d'un cookie
    function getCookie(name) {
        let match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
        return match ? match[2] : null;
    }

    // Fonction pour accepter les cookies
    function acceptCookies() {
        document.cookie = "cookies_accepted=true; path=/; max-age=" + 60 * 60 * 24 * 365; // Cookie qui dure 1 an
        document.getElementById("cookie-banner").style.display = "none";
    }

    // Fonction pour refuser les cookies
    function refuseCookies() {
        document.cookie = "cookies_refused=true; path=/; max-age=" + 60 * 60 * 24 * 365; // Cookie qui dure 1 an
        document.getElementById("cookie-banner").style.display = "none";
    }
</script>