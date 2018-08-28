
$("#inscription_prestataire_jour_0").click(function(){ afficherHorraire(); });
$("#inscription_prestataire_jour_1").click(function(){ afficherHorraire(); });
$("#inscription_prestataire_jour_2").click(function(){ afficherHorraire(); });
$("#inscription_prestataire_jour_3").click(function(){ afficherHorraire(); });
$("#inscription_prestataire_jour_4").click(function(){ afficherHorraire(); });
$("#inscription_prestataire_jour_5").click(function(){ afficherHorraire(); });
$("#inscription_prestataire_jour_6").click(function(){ afficherHorraire(); });

$("#inscription_prestataire_jour_0").parent().append("<div id='add'></div>");
$("#inscription_prestataire_jour_1").parent().append("<div id='add1'></div>");
$("#inscription_prestataire_jour_2").parent().append("<div id='add2'></div>");
$("#inscription_prestataire_jour_3").parent().append("<div id='add3'></div>");
$("#inscription_prestataire_jour_4").parent().append("<div id='add4'></div>");
$("#inscription_prestataire_jour_5").parent().append("<div id='add5'></div>");
$("#inscription_prestataire_jour_6").parent().append("<div id='add6'></div>");


function afficherHorraire()
{
    if ($("#inscription_prestataire_jour_0").is(":checked")) {
        document.getElementById("add").style.height = "auto";
        document.getElementById("add").append(document.getElementById("horraire-lundi"));
        document.getElementById("horraire-lundi").style.visibility = "visible";
    }
    if (!$("#inscription_prestataire_jour_0").is(":checked")) {
        document.getElementById("horraire-lundi").style.visibility = "hidden";
        document.getElementById("add").style.height = "0";
    }

    if ($("#inscription_prestataire_jour_1").is(":checked")) {
        document.getElementById("add1").style.height = "auto";
        document.getElementById("add1").append(document.getElementById("horraire-mardi"));
        document.getElementById("horraire-mardi").style.visibility = "visible";
    }
    if (!$("#inscription_prestataire_jour_1").is(":checked")) {
        document.getElementById("horraire-mardi").style.visibility = "hidden";
        document.getElementById("add1").style.height = "0";
    }

    if ($("#inscription_prestataire_jour_2").is(":checked")) {
        document.getElementById("add2").style.height = "auto";
        document.getElementById("add2").append(document.getElementById("horraire-mercredi"));
        document.getElementById("horraire-mercredi").style.visibility = "visible";
    }
    if (!$("#inscription_prestataire_jour_2").is(":checked")) {
        document.getElementById("horraire-mercredi").style.visibility = "hidden";
        document.getElementById("add2").style.height = "0";
    }

    if ($("#inscription_prestataire_jour_3").is(":checked")) {
        document.getElementById("add3").style.height = "auto";
        document.getElementById("add3").append(document.getElementById("horraire-jeudi"));
        document.getElementById("horraire-jeudi").style.visibility = "visible";
    }
    if (!$("#inscription_prestataire_jour_3").is(":checked")) {
        document.getElementById("horraire-jeudi").style.visibility = "hidden";
        document.getElementById("add3").style.height = "0";
    }

    if ($("#inscription_prestataire_jour_4").is(":checked")) {
        document.getElementById("add4").style.height = "auto";
        document.getElementById("add4").append(document.getElementById("horraire-vendredi"));
        document.getElementById("horraire-vendredi").style.visibility = "visible";
    }
    if (!$("#inscription_prestataire_jour_4").is(":checked")) {
        document.getElementById("horraire-vendredi").style.visibility = "hidden";
        document.getElementById("add4").style.height = "0";
    }

    if ($("#inscription_prestataire_jour_5").is(":checked")) {
        document.getElementById("add5").style.height = "auto";
        document.getElementById("add5").append(document.getElementById("horraire-samedi"));
        document.getElementById("horraire-samedi").style.visibility = "visible";
    }
    if (!$("#inscription_prestataire_jour_5").is(":checked")) {
        document.getElementById("horraire-samedi").style.visibility = "hidden";
        document.getElementById("add5").style.height = "0";
    }

    if ($("#inscription_prestataire_jour_6").is(":checked")) {
        document.getElementById("add6").style.height = "auto";
        document.getElementById("add6").append(document.getElementById("horraire-dimanche"));
        document.getElementById("horraire-dimanche").style.visibility = "visible";
    }
    if (!$("#inscription_prestataire_jour_6").is(":checked")) {
        document.getElementById("horraire-dimanche").style.visibility = "hidden";
        document.getElementById("add6").style.height = "0";
    }
}