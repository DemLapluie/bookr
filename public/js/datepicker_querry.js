$( function() {
    $( "#recherche_jour" ).datepicker({
        altField: "#datepicker",
        closeText: 'Fermer',
        prevText: 'Précédent',
        nextText: 'Suivant',
        currentText: 'Aujourd\'hui',
        monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
        monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
        dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
        dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
        dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
        weekHeader: 'Sem.',
        dateFormat: 'yy-mm-dd',
        minDate:0
    });
} );

$("#recherche_jour").attr("autocomplete", "off");



/*function JourDate() {

               var annee = (document.getElementById("datepicker").value).substring(0, 4);
               var mois = (document.getElementById("datepicker").value).substring(5, 7);
               var jour = (document.getElementById("datepicker").value).substring(8, 10);
               var dateJour = annee+","+mois+","+jour;
               var d = new Date(dateJour);
               var n;
               switch (d.getDay()) {
                   case 0: n = 'Dimanche'; break;
                   case 1: n = 'Lundi'; break;
                   case 2: n = 'Mardi'; break;
                   case 3: n = 'Mercredi'; break;
                   case 4: n = 'Jeudi'; break;
                   case 5: n = 'Vendredi'; break;
                   case 6: n = 'Samedi';  break;
                   default: n='jour non disponible';
               }
               document.getElementById("demo").innerHTML = n;
           }*/