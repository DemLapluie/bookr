/*--------Javascript--------*/

if ($("#profil_prestataire_jour_0").is(":checked")) {
    document.getElementById("horaire-lundi").style.visibility = "visible";
    document.getElementById("horaire-lundi").style.display = "table-row";
}
if ($("#profil_prestataire_jour_1").is(":checked")) {
    document.getElementById("horaire-mardi").style.visibility = "visible";
    document.getElementById("horaire-mardi").style.display = "table-row";
}
if ($("#profil_prestataire_jour_2").is(":checked")) {
    document.getElementById("horaire-mercredi").style.visibility = "visible";
    document.getElementById("horaire-mercredi").style.display = "table-row"
}
if ($("#profil_prestataire_jour_3").is(":checked")) {
    document.getElementById("horaire-jeudi").style.visibility = "visible";
    document.getElementById("horaire-jeudi").style.display = "table-row"
}
if ($("#profil_prestataire_jour_4").is(":checked")) {
    document.getElementById("horaire-vendredi").style.visibility = "visible";
    document.getElementById("horaire-vendredi").style.display = "table-row"
}
if ($("#profil_prestataire_jour_5").is(":checked")) {
    document.getElementById("horaire-samedi").style.visibility = "visible";
    document.getElementById("horaire-samedi").style.display = "table-row"
}
if ($("#profil_prestataire_jour_6").is(":checked")) {
    document.getElementById("horaire-dimanche").style.visibility = "visible";
    document.getElementById("horaire-dimanche").style.display = "table-row"
}

$("#profil_prestataire_jour_0").click(function(){ afficherHorraire(); });
$("#profil_prestataire_jour_1").click(function(){ afficherHorraire(); });
$("#profil_prestataire_jour_2").click(function(){ afficherHorraire(); });
$("#profil_prestataire_jour_3").click(function(){ afficherHorraire(); });
$("#profil_prestataire_jour_4").click(function(){ afficherHorraire(); });
$("#profil_prestataire_jour_5").click(function(){ afficherHorraire(); });
$("#profil_prestataire_jour_6").click(function(){ afficherHorraire(); });

$("#inscription_prestataire_jour_0").parent().append("<div id='add'></div>");
$("#inscription_prestataire_jour_1").parent().append("<div id='add1'></div>");
$("#inscription_prestataire_jour_2").parent().append("<div id='add2'></div>");
$("#inscription_prestataire_jour_3").parent().append("<div id='add3'></div>");
$("#inscription_prestataire_jour_4").parent().append("<div id='add4'></div>");
$("#inscription_prestataire_jour_5").parent().append("<div id='add5'></div>");
$("#inscription_prestataire_jour_6").parent().append("<div id='add6'></div>");


function afficherHorraire()
{
    if ($("#profil_prestataire_jour_0").is(":checked")) {
        /*document.getElementById("add").style.height = "auto";
        document.getElementById("add").append(document.getElementById("horaire-lundi"));*/
        document.getElementById("horaire-lundi").style.visibility = "visible";
        document.getElementById("horaire-lundi").style.display = "table-row";
    }
    if (!$("#profil_prestataire_jour_0").is(":checked")) {
        document.getElementById("horaire-lundi").style.visibility = "hidden";
        document.getElementById("horaire-lundi").style.height = "0";
        document.getElementById("horaire-lundi").style.display = "none";
    }

    if ($("#profil_prestataire_jour_1").is(":checked")) {
        /*document.getElementById("add1").style.height = "auto";
        document.getElementById("add1").append(document.getElementById("horaire-mardi"));*/
        document.getElementById("horaire-mardi").style.visibility = "visible";
        document.getElementById("horaire-mardi").style.display = "table-row";
    }
    if (!$("#profil_prestataire_jour_1").is(":checked")) {
        document.getElementById("horaire-mardi").style.visibility = "hidden";
        document.getElementById("horaire-mardi").style.display = "none";
        /*document.getElementById("add1").style.height = "0";*/
    }

    if ($("#profil_prestataire_jour_2").is(":checked")) {
        /*document.getElementById("add2").style.height = "auto";
        document.getElementById("add2").append(document.getElementById("horaire-mercredi"));*/
        document.getElementById("horaire-mercredi").style.visibility = "visible";
        document.getElementById("horaire-mercredi").style.display = "table-row"
    }
    if (!$("#profil_prestataire_jour_2").is(":checked")) {
        document.getElementById("horaire-mercredi").style.visibility = "hidden";
        document.getElementById("horaire-mercredi").style.display = "none";
        /*document.getElementById("add2").style.height = "0";*/
    }

    if ($("#profil_prestataire_jour_3").is(":checked")) {
        /*document.getElementById("add2").style.height = "auto";
        document.getElementById("add2").append(document.getElementById("horaire-mercredi"));*/
        document.getElementById("horaire-jeudi").style.visibility = "visible";
        document.getElementById("horaire-jeudi").style.display = "table-row"
    }
    if (!$("#profil_prestataire_jour_3").is(":checked")) {
        document.getElementById("horaire-jeudi").style.visibility = "hidden";
        document.getElementById("horaire-jeudi").style.display = "none";
        /*document.getElementById("add2").style.height = "0";*/
    }

    if ($("#profil_prestataire_jour_4").is(":checked")) {
        /*document.getElementById("add2").style.height = "auto";
        document.getElementById("add2").append(document.getElementById("horaire-mercredi"));*/
        document.getElementById("horaire-vendredi").style.visibility = "visible";
        document.getElementById("horaire-vendredi").style.display = "table-row"
    }
    if (!$("#profil_prestataire_jour_4").is(":checked")) {
        document.getElementById("horaire-vendredi").style.visibility = "hidden";
        document.getElementById("horaire-vendredi").style.display = "none";
        /*document.getElementById("add2").style.height = "0";*/
    }

    if ($("#profil_prestataire_jour_5").is(":checked")) {
        /*document.getElementById("add2").style.height = "auto";
        document.getElementById("add2").append(document.getElementById("horaire-mercredi"));*/
        document.getElementById("horaire-samedi").style.visibility = "visible";
        document.getElementById("horaire-samedi").style.display = "table-row"
    }
    if (!$("#profil_prestataire_jour_5").is(":checked")) {
        document.getElementById("horaire-samedi").style.visibility = "hidden";
        document.getElementById("horaire-samedi").style.display = "none";
        /*document.getElementById("add2").style.height = "0";*/
    }

    if ($("#profil_prestataire_jour_6").is(":checked")) {
        /*document.getElementById("add2").style.height = "auto";
        document.getElementById("add2").append(document.getElementById("horaire-mercredi"));*/
        document.getElementById("horaire-dimanche").style.visibility = "visible";
        document.getElementById("horaire-dimanche").style.display = "table-row"
    }
    if (!$("#profil_prestataire_jour_6").is(":checked")) {
        document.getElementById("horaire-dimanche").style.visibility = "hidden";
        document.getElementById("horaire-dimanche").style.display = "none";
        /*document.getElementById("add2").style.height = "0";*/
    }
}