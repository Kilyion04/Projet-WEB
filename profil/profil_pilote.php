<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="profil_pilote.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="footer.css">
        <link rel="icon" href="https://www.cesi.fr/wp-content/uploads/2018/09/cesi.png">

        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <title>CesiTonStage - Page pilote</title>
    </head>

    <body class="page_pilote">
        <?php include 'sidebar.php';
        ?>
        <section class="container_0">
            <div class="container" >
                <p style="font-weight: bold">Nom_Pilote</p>
                <p style="font-weight: bold">Description</p>
                <p style="font-weight: bold">Vos coordonnées</p>
            </div>
            
            <div class="info">
                <div class="btn-group">
                    <input type="button" value="Entreprise" id="btn-1" style="position: ;"></input>
                    <input type="button" value="Offre" id="btn-2" style="position: ;"></input>
                    <input type="button" value="Avancement" id="btn-4" style="position: ;"></input>
                    <input type="button" value="Promotion" id="btn-5" style="position: ;"></input>
                    
                    <div id="entreprise" class="formulaire" style="display: none">
                        <div class="créer_entreprise">
                            <form id="créer_entreprise">
                                <p>S'il vous plait entrez les détails de l'entreprise</p>
                                <label for="name" ><b>Nom entreprise</b></label> <br>
                                <input type="name" placeholder="Entrer nom" name="name"> <br>
                                <label for="email"><b>Entrer mail Entreprise</b></label> <br>
                                <input type="email" placeholder="Entrer mail entreprise" name="email"> <br>
                                <label for="activité"><b>Activité</b></label> <br>
                                <input type="text" placeholder="Activité" name="activité"> <br>
                                <label for="number"><b>ID entreprise</b></label> <br>
                                <input type="number" placeholder="Entrer un ID" name="nombre"> <br>
                                <input type="submit" value="Créer">
                            </form>
                        <br>
                        </div>
                        <div class="modifier_entreprise">
                            <form id="modifier_entreprise">
                                <p>S'il vous plait entrez les détails de l'entreprise à modifier</p>
                                <label for="name" ><b>Changer nom entreprise</b></label> <br>
                                <input type="name" placeholder="Entrer nom" name="name"> <br>
                                <label for="email"><b>Modifier le mail de l'entreprise</b></label> <br>
                                <input type="email" placeholder="Entrer mail entreprise" name="email"> <br>
                                <label for="activité"><b>Activité</b></label> <br>
                                <input type="texte" placeholder="Activité" name="activité"> <br>
                                <label for="number"><b>ID entreprise</b></label> <br>
                                <input type="number" placeholder="Entrer un ID" name="nombre"><br>
                                <input type="submit" value="Modifier">
                            </form>
                        <br>    
                        </div>
                        <div class="supprimer_entreprise">
                            <form id="supprimer_entreprise">
                                <p>S'il vous plait entrez l'ID de l'entreprise à supprimer</p>
                                <label for="number"><b>ID Entreprise</b></label> <br>
                                <input type="number" placeholder="Entrer un ID" name="nombre"> <br>
                                <input type="submit" value="Supprimer">
                            </form>
                        </div>
                    </div>

                    
                    <div id="offre" class="formulaire" style="display: none">
                        <div class="créer_offre">
                            <form id="créer_offre">
                                <p>S'il vous plait entrez les détails de l'offre</p>
                                <label for="name" ><b>Nom offre</b></label> <br>
                                <input type="name" placeholder="Entrer nom" name="name"> <br>
                                <label for="date"><b>Date maximale de l'offre</b></label> <br>
                                <input type="date" placeholder="Entrer durée" name="durée"> <br>
                                <label for="number"><b>Nombre d'offres</b></label> <br>
                                <input type="number" placeholder="Entrer un nombre" name="nombre"> <br>
                                <label for="number"><b>ID offres</b></label> <br>
                                <input type="number" placeholder="Entrer un ID" name="nombre"> <br>
                                <input type="submit" value="Créer">
                            </form>
                        <br>
                        </div>
                        <div class="modifier_offre">
                            <form id="modifier_offre">
                                <p>S'il vous plait entrez les détails de l'offre à modifier</p>
                                <label for="name" ><b>Changer nom offre</b></label> <br>
                                <input type="name" placeholder="Entrer nom" name="name"> <br>
                                <label for="date"><b>Modifier date maximale de l'offre</b></label> <br>
                                <input type="date" placeholder="Entrer durée" name="durée"> <br>
                                <label for="number"><b>Changer nombre d'offres</b></label> <br>
                                <input type="number" placeholder="Entrer un nombre" name="nombre"> <br>
                                <label for="number"><b>ID offres</b></label> <br>
                                <input type="number" placeholder="Entrer un ID" name="nombre"> <br>
                                <input type="submit" value="Modifier">
                            </form>
                        <br>    
                        </div>
                        <div class="supprimer_offre">
                            <form id="supprimer_offre">
                                <p>S'il vous plait entrez l'ID de l'entreprise à supprimer</p>
                                <label for="nom"><b>ID Offre</b></label> <br>
                                <input type="texte" placeholder="Entrer nom" name="offre"> <br>
                                <input type="submit" value="Supprimer">
                            </form>
                        </div>
                    </div>

                    
                    <div id="avancement" class="formulaire" style="display: none">
                        <form id="avance">
                                <label for="nom"><b>Entrez le nom d'un élève</b></label> <br>
                                <input type="texte" placeholder="Entrer nom" name="élève"> <br>
                                <label for="nom"><b>Entrez le chiffre correspondant son avancement</b></label> <br>
                                <input type="number" placeholder="Entrer un chiffre" name="étape"> <br>
                                <input type="submit" value="Valider">

                        </form>
                    </div>
                    
                    <div id="promotion" class="formulaire" style="display: none">
                        <form id="promo">
                            <label for="nom"><b>Entrez l'id à correspondant la promo</b></label> <br>
                            <input type="number" placeholder="Entrer un id" name="étape"> <br>
                            <input type="submit" value="Valider">
                        </form>
                    </div>
                </div>
            </div>

        </section>
        <footer class="text-light">
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous">
    </script>
    <table>
        <tr>
            <td>
                &#0201;cole
            </td>
            <td>
                Recherches
            </td>
            <td>
                Pour vous
            </td>
            <td>
                Webmasters
            </td>
                <td rowspan="2">
                <img src="https://agence.seva.bzh/wp-content/uploads/2020/07/logo-CESI-white.png"
                alt="Logo CESI blanc footer">
                </td>
        </tr>
        <tr>
            <td>
                <a href="cesi.fr">Site du CESI</a> <br>
                <a href="#">Accueil</a>
            </td>
            <td>
                Offres
            </td>
            <td>
                Wishlist <br>
                Profil
            </td>
            <td>
                kilyion.romary@viacesi.fr <br>
                lucas.dumont1@viacesi.fr <br>
                aymeric.petit2@viacesi.fr <br>
                maxence.arcelin@viacesi.fr
            </td>
        </tr>
        <tr colspan="5">
        <td><br>
        </td>
        </tr>
            <tfoot>
                <tr>
                    <td>
                        <img
                            src="data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHZpZXdCb3g9IjAgMCAxNzIgMTcyIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9Im5vbnplcm8iIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBzdHJva2UtbGluZWNhcD0iYnV0dCIgc3Ryb2tlLWxpbmVqb2luPSJtaXRlciIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2UtZGFzaGFycmF5PSIiIHN0cm9rZS1kYXNob2Zmc2V0PSIwIiBmb250LWZhbWlseT0ibm9uZSIgZm9udC13ZWlnaHQ9Im5vbmUiIGZvbnQtc2l6ZT0ibm9uZSIgdGV4dC1hbmNob3I9Im5vbmUiIHN0eWxlPSJtaXgtYmxlbmQtbW9kZTogbm9ybWFsIj48cGF0aCBkPSJNMCwxNzJ2LTE3MmgxNzJ2MTcyeiIgZmlsbD0ibm9uZSI+PC9wYXRoPjxnIGZpbGw9IiNmZmZmZmYiPjxwYXRoIGQ9Ik04NiwzLjQ0Yy0xLjg5OTg2LDAgLTMuNDQsMS41NDAxNCAtMy40NCwzLjQ0YzAsMS44OTk4NiAxLjU0MDE0LDMuNDQgMy40NCwzLjQ0YzEuODk5ODYsMCAzLjQ0LC0xLjU0MDE0IDMuNDQsLTMuNDRjMCwtMS44OTk4NiAtMS41NDAxNCwtMy40NCAtMy40NCwtMy40NHpNNjUuNTIxMjUsNi4xMzQyMmMtMS44OTk4NiwwIC0zLjQ0LDEuNTQwMTQgLTMuNDQsMy40NGMwLDEuODk5ODYgMS41NDAxNCwzLjQ0IDMuNDQsMy40NGMxLjg5OTg2LDAgMy40NCwtMS41NDAxNCAzLjQ0LC0zLjQ0YzAsLTEuODk5ODYgLTEuNTQwMTQsLTMuNDQgLTMuNDQsLTMuNDR6TTEwNi40Nzg3NSw2LjEzNDIyYy0xLjg5OTg2LDAgLTMuNDQsMS41NDAxNCAtMy40NCwzLjQ0YzAsMS44OTk4NiAxLjU0MDE0LDMuNDQgMy40NCwzLjQ0YzEuODk5ODYsMCAzLjQ0LC0xLjU0MDE0IDMuNDQsLTMuNDRjMCwtMS44OTk4NiAtMS41NDAxNCwtMy40NCAtMy40NCwtMy40NHpNNDYuNDQsMTQuMDM1NDdjLTEuODk5ODYsMCAtMy40NCwxLjU0MDE0IC0zLjQ0LDMuNDRjMCwxLjg5OTg2IDEuNTQwMTQsMy40NCAzLjQ0LDMuNDRjMS44OTk4NiwwIDMuNDQsLTEuNTQwMTQgMy40NCwtMy40NGMwLC0xLjg5OTg2IC0xLjU0MDE0LC0zLjQ0IC0zLjQ0LC0zLjQ0ek0xMjUuNTYsMTQuMDM1NDdjLTEuODk5ODYsMCAtMy40NCwxLjU0MDE0IC0zLjQ0LDMuNDRjMCwxLjg5OTg2IDEuNTQwMTQsMy40NCAzLjQ0LDMuNDRjMS44OTk4NiwwIDMuNDQsLTEuNTQwMTQgMy40NCwtMy40NGMwLC0xLjg5OTg2IC0xLjU0MDE0LC0zLjQ0IC0zLjQ0LC0zLjQ0ek04NiwxNy4yYy0zNy45NTY0NCwwIC02OC44LDMwLjg0MzU2IC02OC44LDY4LjhjMCwzNy45NTY0NCAzMC44NDM1Niw2OC44IDY4LjgsNjguOGMzNy45NTY0NCwwIDY4LjgsLTMwLjg0MzU2IDY4LjgsLTY4LjhjMCwtMzcuOTU2NDQgLTMwLjg0MzU2LC02OC44IC02OC44LC02OC44ek0zMC4wNTI5NywyNi42MTI5N2MtMS44OTk4NiwwIC0zLjQ0LDEuNTQwMTQgLTMuNDQsMy40NGMwLDEuODk5ODYgMS41NDAxNCwzLjQ0IDMuNDQsMy40NGMxLjg5OTg2LDAgMy40NCwtMS41NDAxNCAzLjQ0LC0zLjQ0YzAsLTEuODk5ODYgLTEuNTQwMTQsLTMuNDQgLTMuNDQsLTMuNDR6TTE0MS45NDcwMywyNi42MTI5N2MtMS44OTk4NiwwIC0zLjQ0LDEuNTQwMTQgLTMuNDQsMy40NGMwLDEuODk5ODYgMS41NDAxNCwzLjQ0IDMuNDQsMy40NGMxLjg5OTg2LDAgMy40NCwtMS41NDAxNCAzLjQ0LC0zLjQ0YzAsLTEuODk5ODYgLTEuNTQwMTQsLTMuNDQgLTMuNDQsLTMuNDR6TTY3LjQyOTM3LDI2LjkxNTMxYy0zLjEyMjIzLDYuMjMzMjQgLTUuNTA5MzcsMTQuMzIyNzQgLTUuNTA5MzcsMTYuNTE0NjljMCwzLjcxNTIgMi45MDY4LDQuNzMgOC4xNyw0LjczYzUuNDk3MTIsMCA1LjU5LDQuMjMxMiA1LjU5LDUuMTZ2MTIuMDRjMCw1LjU5IC0zLjg3LDYuODggLTYuODgsNi44OGMtOS45MDcyLDAgLTEwLjMyLDYuNjA0OCAtMTAuMzIsMTAuMzJjMCwxLjI5IC0wLjIyMzYsMy40NCAtMy4wMSwzLjQ0Yy01LjE2LDAgLTEuMzc2LC0zLjQ0IC02LjAyLC0zLjQ0aC0yLjE1Yy0yLjU4LDAgLTIuNTgsMS45OTg2NCAtMi41OCwzLjQ0YzAsMy40NCAzLjQ0LDEzLjc2IDEzLjc2LDEzLjc2aDIuNThoNS4xNmMyLjE2NzIsMCA0LjQwMzIsMC4zMDk2IDYuNDUsMi4xNWM0LjMsMy44NyA0Ljg4NDgsNC43MyA4LjYsNC43M2MzLjQ0LDAgNC43MywzLjQ5MTYgNC43Myw0LjczYzAsNi40NSAtMy41MDcxNCwxMC4wNDkwNCAtNS41MTYxLDExLjU3NjRjLTAuOTgzODQsMC43NDk5MiAtMS42ODk1MiwxLjc4MDI2IC0yLjEyOTg0LDIuOTM2MWMtMS41NjAxNCw0LjA4NDcyIC00Ljg4MDc1LDEyLjkzNjQ2IC02LjIwODEzLDIwLjQzMTcyYy00Ljc5Njg5LC0xLjA5NDk3IC05LjM2NzE0LC0yLjc1NTcyIC0xMy42NjU5NCwtNC44OTEyNXYtNS41NDI5N2MwLC02LjE5MiAtNi44OCwtMTQuNDEzNiAtNi44OCwtMjQuOTRjMCwtNi4xOTIgLTguNzAzMiwtMTEuOTAyNCAtMTEuMTgsLTEzLjc2Yy0zLjQ0Njg4LC0yLjU4Njg4IC02LjQyMjI3LC01LjU2MDkyIC04Ljg5NTYzLC0xMC4wOTgyOGMtMC4zODE4NCwtMC42OTgzMiAtMC44NzMwMSwtMS4zNTE0OSAtMS40NjQ2OSwtMS44ODEyNWwtMS4wMTQ1MywtMC45MDAzMWMtMS4yNTkwNCwtMS4xMTggLTIuODg2NTksLTEuNzQwMTUgLTQuNTY4NzUsLTEuNzQwMTVoLTAuMjIxNzJjMS40NDA4NywtMjYuMjM4NzMgMTkuMDg0MjgsLTQ4LjA5ODUyIDQzLjE3NDY5LC01NS42NDQ2OXpNMTIxLjgxNzY1LDM1LjUyODc1YzE1Ljc4MzM3LDExLjIxMzY2IDI2LjEwMjM1LDI5LjYwMzM1IDI2LjEwMjM1LDUwLjQ3MTI1YzAsMjAuNjkwMjUgLTEwLjE1MDExLDM4LjkzNTkxIC0yNS43MDU5NCw1MC4xNzU2M2MtMS41NDcwMiwtMy4zNjM3NyAtMy43MjI4OSwtOC4wNzc0NCAtNC42MzU5NCwtMTAuMjM5MzhjLTEuMTU1ODQsLTIuNzM0OCAtMS45Njc1MiwtNC42NTM2NyAtMi41ODY3MiwtNi4wNDY4OGMtMC43NTMzNiwtMS42ODU2IC0yLjEzOTM2LC0yLjk4NTQ5IC0zLjg4MzQ0LC0zLjYwMTI1Yy0zLjg5MDY0LC0xLjM2OTEyIC0xMS4zNDc5NywtNS4wNjYwNSAtMTEuMzQ3OTcsLTEzLjA4ODEzYzAsLTMuNDA1NiAxLjI5LC0xMC4zMiAxMy43NiwtMTAuMzJjOS4yODgsMCAxNy4yLC03LjIyNCAxNy4yLC0xMC4zMmMwLC01LjU2NTkyIC0xLjk3NjYsLTkuODMyMTYgLTMuMjExNTYsLTEyLjAxMzEzYy0wLjc5MTIsLTEuMzkzMiAtMi40NjM3NCwtMi4wMTcyNCAtMy45ODQyMiwtMS41MTg0NGMtMS41NzU1MiwwLjUxOTQ0IC0zLjY4ODU0LDEuMzg4MzYgLTUuNjk3NSwyLjc4MTU2Yy01LjU5MzQ0LDMuODcgLTUuMDI5MTIsMTAuNzUgLTE0LjYyNjcyLDEwLjc1Yy0xLjIzODQsMCAtMy40NCwtNi40MzI4IC0zLjQ0LC04LjZjMCwtMS43MiAyLjY0ODgsLTIuMzk3NjggNS4xNiwtMy40NGMxLjc3NTA0LC0wLjczNjE2IDEuNzIsLTEuNzIgMS43MiwtMy40NGMwLC0xLjE5MDI0IC0yLjM1NjQsLTIuODc1ODQgLTMuMDEsLTMuODdjLTAuMjU0NTYsLTAuMzg4NzIgLTAuNDIzMTIsLTAuODM5MzYgLTAuNDMsLTEuMjljLTAuMDEwMzIsLTAuNzg0MzIgMC4zODQyMSwtMS41ODA1NyAxLjA0ODEzLC0yLjA4MjgxbDcuMTIxODcsLTQuMzY3MTljMi42ODgyMywtMS42ODAxNCA4LjEzODU3LC0xNC4zNTE4NyAxMC40NDc2NSwtMTkuOTQxMjV6TTE3LjQ3NTQ3LDQzYy0xLjg5OTg2LDAgLTMuNDQsMS41NDAxNCAtMy40NCwzLjQ0YzAsMS44OTk4NiAxLjU0MDE0LDMuNDQgMy40NCwzLjQ0YzEuODk5ODYsMCAzLjQ0LC0xLjU0MDE0IDMuNDQsLTMuNDRjMCwtMS44OTk4NiAtMS41NDAxNCwtMy40NCAtMy40NCwtMy40NHpNMTU0LjUyNDUzLDQzYy0xLjg5OTg2LDAgLTMuNDQsMS41NDAxNCAtMy40NCwzLjQ0YzAsMS44OTk4NiAxLjU0MDE0LDMuNDQgMy40NCwzLjQ0YzEuODk5ODYsMCAzLjQ0LC0xLjU0MDE0IDMuNDQsLTMuNDRjMCwtMS44OTk4NiAtMS41NDAxNCwtMy40NCAtMy40NCwtMy40NHpNOS41NzQyMiw2Mi4wODEyNWMtMS44OTk4NiwwIC0zLjQ0LDEuNTQwMTQgLTMuNDQsMy40NGMwLDEuODk5ODYgMS41NDAxNCwzLjQ0IDMuNDQsMy40NGMxLjg5OTg2LDAgMy40NCwtMS41NDAxNCAzLjQ0LC0zLjQ0YzAsLTEuODk5ODYgLTEuNTQwMTQsLTMuNDQgLTMuNDQsLTMuNDR6TTE2Mi40MjU3OCw2Mi4wODEyNWMtMS44OTk4NiwwIC0zLjQ0LDEuNTQwMTQgLTMuNDQsMy40NGMwLDEuODk5ODYgMS41NDAxNCwzLjQ0IDMuNDQsMy40NGMxLjg5OTg2LDAgMy40NCwtMS41NDAxNCAzLjQ0LC0zLjQ0YzAsLTEuODk5ODYgLTEuNTQwMTQsLTMuNDQgLTMuNDQsLTMuNDR6TTYuODgsODIuNTZjLTEuODk5ODYsMCAtMy40NCwxLjU0MDE0IC0zLjQ0LDMuNDRjMCwxLjg5OTg2IDEuNTQwMTQsMy40NCAzLjQ0LDMuNDRjMS44OTk4NiwwIDMuNDQsLTEuNTQwMTQgMy40NCwtMy40NGMwLC0xLjg5OTg2IC0xLjU0MDE0LC0zLjQ0IC0zLjQ0LC0zLjQ0ek0xNjUuMTIsODIuNTZjLTEuODk5ODYsMCAtMy40NCwxLjU0MDE0IC0zLjQ0LDMuNDRjMCwxLjg5OTg2IDEuNTQwMTQsMy40NCAzLjQ0LDMuNDRjMS44OTk4NiwwIDMuNDQsLTEuNTQwMTQgMy40NCwtMy40NGMwLC0xLjg5OTg2IC0xLjU0MDE0LC0zLjQ0IC0zLjQ0LC0zLjQ0ek05LjU3NDIyLDEwMy4wMzg3NWMtMS44OTk4NiwwIC0zLjQ0LDEuNTQwMTQgLTMuNDQsMy40NGMwLDEuODk5ODYgMS41NDAxNCwzLjQ0IDMuNDQsMy40NGMxLjg5OTg2LDAgMy40NCwtMS41NDAxNCAzLjQ0LC0zLjQ0YzAsLTEuODk5ODYgLTEuNTQwMTQsLTMuNDQgLTMuNDQsLTMuNDR6TTE2Mi40MjU3OCwxMDMuMDM4NzVjLTEuODk5ODYsMCAtMy40NCwxLjU0MDE0IC0zLjQ0LDMuNDRjMCwxLjg5OTg2IDEuNTQwMTQsMy40NCAzLjQ0LDMuNDRjMS44OTk4NiwwIDMuNDQsLTEuNTQwMTQgMy40NCwtMy40NGMwLC0xLjg5OTg2IC0xLjU0MDE0LC0zLjQ0IC0zLjQ0LC0zLjQ0ek0xNy40NzU0NywxMjIuMTJjLTEuODk5ODYsMCAtMy40NCwxLjU0MDE0IC0zLjQ0LDMuNDRjMCwxLjg5OTg2IDEuNTQwMTQsMy40NCAzLjQ0LDMuNDRjMS44OTk4NiwwIDMuNDQsLTEuNTQwMTQgMy40NCwtMy40NGMwLC0xLjg5OTg2IC0xLjU0MDE0LC0zLjQ0IC0zLjQ0LC0zLjQ0ek0xNTQuNTI0NTMsMTIyLjEyYy0xLjg5OTg2LDAgLTMuNDQsMS41NDAxNCAtMy40NCwzLjQ0YzAsMS44OTk4NiAxLjU0MDE0LDMuNDQgMy40NCwzLjQ0YzEuODk5ODYsMCAzLjQ0LC0xLjU0MDE0IDMuNDQsLTMuNDRjMCwtMS44OTk4NiAtMS41NDAxNCwtMy40NCAtMy40NCwtMy40NHpNMzAuMDUyOTcsMTM4LjUwNzAzYy0xLjg5OTg2LDAgLTMuNDQsMS41NDAxNCAtMy40NCwzLjQ0YzAsMS44OTk4NiAxLjU0MDE0LDMuNDQgMy40NCwzLjQ0YzEuODk5ODYsMCAzLjQ0LC0xLjU0MDE0IDMuNDQsLTMuNDRjMCwtMS44OTk4NiAtMS41NDAxNCwtMy40NCAtMy40NCwtMy40NHpNMTQxLjk0NzAzLDEzOC41MDcwM2MtMS44OTk4NiwwIC0zLjQ0LDEuNTQwMTQgLTMuNDQsMy40NGMwLDEuODk5ODYgMS41NDAxNCwzLjQ0IDMuNDQsMy40NGMxLjg5OTg2LDAgMy40NCwtMS41NDAxNCAzLjQ0LC0zLjQ0YzAsLTEuODk5ODYgLTEuNTQwMTQsLTMuNDQgLTMuNDQsLTMuNDR6TTQ2LjQ0LDE1MS4wODQ1M2MtMS44OTk4NiwwIC0zLjQ0LDEuNTQwMTQgLTMuNDQsMy40NGMwLDEuODk5ODYgMS41NDAxNCwzLjQ0IDMuNDQsMy40NGMxLjg5OTg2LDAgMy40NCwtMS41NDAxNCAzLjQ0LC0zLjQ0YzAsLTEuODk5ODYgLTEuNTQwMTQsLTMuNDQgLTMuNDQsLTMuNDR6TTEyNS41NiwxNTEuMDg0NTNjLTEuODk5ODYsMCAtMy40NCwxLjU0MDE0IC0zLjQ0LDMuNDRjMCwxLjg5OTg2IDEuNTQwMTQsMy40NCAzLjQ0LDMuNDRjMS44OTk4NiwwIDMuNDQsLTEuNTQwMTQgMy40NCwtMy40NGMwLC0xLjg5OTg2IC0xLjU0MDE0LC0zLjQ0IC0zLjQ0LC0zLjQ0ek02NS41MjEyNSwxNTguOTg1NzhjLTEuODk5ODYsMCAtMy40NCwxLjU0MDE0IC0zLjQ0LDMuNDRjMCwxLjg5OTg2IDEuNTQwMTQsMy40NCAzLjQ0LDMuNDRjMS44OTk4NiwwIDMuNDQsLTEuNTQwMTQgMy40NCwtMy40NGMwLC0xLjg5OTg2IC0xLjU0MDE0LC0zLjQ0IC0zLjQ0LC0zLjQ0ek0xMDYuNDc4NzUsMTU4Ljk4NTc4Yy0xLjg5OTg2LDAgLTMuNDQsMS41NDAxNCAtMy40NCwzLjQ0YzAsMS44OTk4NiAxLjU0MDE0LDMuNDQgMy40NCwzLjQ0YzEuODk5ODYsMCAzLjQ0LC0xLjU0MDE0IDMuNDQsLTMuNDRjMCwtMS44OTk4NiAtMS41NDAxNCwtMy40NCAtMy40NCwtMy40NHpNODYsMTYxLjY4Yy0xLjg5OTg2LDAgLTMuNDQsMS41NDAxNCAtMy40NCwzLjQ0YzAsMS44OTk4NiAxLjU0MDE0LDMuNDQgMy40NCwzLjQ0YzEuODk5ODYsMCAzLjQ0LC0xLjU0MDE0IDMuNDQsLTMuNDRjMCwtMS44OTk4NiAtMS41NDAxNCwtMy40NCAtMy40NCwtMy40NHoiPjwvcGF0aD48L2c+PC9nPjwvc3ZnPg=="
                            alt="Logo planete language du site">
                            Français
                    </td>
                        <td>
                            Nous contacter
                        </td>
                        <td>
                            Mentions légales
                        </td>
                        <td>
                            Conditions d'utilisation
                        </td>
                        <td>
                            2022 CPI A2 INFO
                    </td>
                </tr>
            </tfoot>
        </table>
    </footer>

    <script type="text/javascript" src="bouton-profil.js"></script>
    <script type="text/javascript" src="bouton-pilote.js"></script>
    <script type="text/javascript" src="script.js"></script>
   
    </body>
</html>