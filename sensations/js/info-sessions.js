function getInfoSessions(spot) {
	$.ajax({
		url: "https://spreadsheets.google.com/feeds/list/1eCnnsOdcwRKJ_kpx1uS-XXJoJGFSvm3l3ez2K9PpPv4/default/public/values?alt=json",
		type: 'GET',
		crossDomain: true,
		dataType: 'json'
	}).then(function(data) {
			var ligne, html, ancre;
			html = '';
			var dateheure, laDate, leSpot, leMWS, laVideo, leCommentaire, codeYoutube, vmax, v100m, distance, flotteur, voile, aileron, vent, pratique, res, trace, aile;
			for (i=data.feed.entry.length-1; i >= 0 ; i--) {
				
				ligne = data.feed.entry[i];
				leSpot = ligne.gsx$spot.$t;

				if (spot.toLowerCase().indexOf(leSpot.toLowerCase()) > -1 && leSpot != "") {											

					dateheure = ligne.gsx$date.$t;
					laDate = dateheure; //dateheure.substring(0, dateheure.search(' '));
					res = laDate.split("/");
					laDate = res[1] + '/' + res[0] + '/' + res[2];
					
					trace = ligne.gsx$tracemontre.$t;
					if (trace == "") {
						trace = ligne.gsx$tracek72.$t;
					}
					leMWS = ligne.gsx$mws.$t;
					laVideo = ligne.gsx$youtube.$t;
					leCommentaire = ligne.gsx$commentaire.$t;
					codeYoutube = laVideo.substring(laVideo.lastIndexOf('/')+1, laVideo.length);
					pratique = ligne.gsx$pratique.$t;
					vent = ligne.gsx$vent.$t;
					flotteur = ligne.gsx$flotteur.$t;
					voile = ligne.gsx$voile.$t;
					aileron = ligne.gsx$aileron.$t;
					aile = ligne.gsx$aile.$t;
					distance = ligne.gsx$distancekm.$t;
					vmax = ligne.gsx$vmaxk72noeuds.$t;
					v100m = ligne.gsx$v100mk72.$t;
					ventMini = ligne.gsx$mini.$t;
					ventMaxi = ligne.gsx$maxi.$t;
					
					ancre = laDate.replace(new RegExp('/', 'g'), '-');

					html = html + '<br><div id="' + ancre + '" class="row"><div class="col-sm-8 fond">';
					
					if (laVideo != '') {		
						html = html + '<p align="center"><div class="embed-responsive embed-responsive-16by9 ombre-image">' + 
						'<iframe width="560" height="315" src="https://www.youtube.com/embed/';
						html = html + codeYoutube + '?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></div></p>';
					}
					
					html = html + '</div><div class="visible-xs"><br></div><div class="col-sm-4"><div class="fond-table encadrement-table"><table class="info-sessions">';
					html = html + '<tr><td><a href="' + leMWS + '" target="_blank">Session</a></td><td>' + pratique + ' du ' + laDate + '</td></tr>';
					if (ventMini != '' && ventMaxi != '') {
						html = html + '</td><td>Conditions</td><td>Vent de ' + vent + ' ' + ventMini + ' à ' + ventMaxi + ' kts</td></tr>';
					}
					else {
						html = html + '</td><td>Conditions</td><td>Vent de ' + vent + '</td></tr>';
					}
					if (aile != '') {
						html = html + '<tr><td>Equipement</td><td>' + flotteur + '<br>' + voile + '<br>' + aileron + ' - aile ' + aile + '</td></tr>';
					}
					else {		
						html = html + '<tr><td>Equipement</td><td>' + flotteur + '<br>' + voile + '<br>' + aileron + '</td></tr>';
					}					if (distance != '') {
						if  (trace == '') {
							html = html + '<tr><td>Parcours</td><td>' + distance + ' km</td></tr>';
						}
						else {
							html = html + '<tr><td><a href="' + trace + '" target="_blank">Parcours</a></td><td>' + distance + ' km</td></tr>';
						}
					}
					if (vmax != '') {
						html = html + '<tr><td>VMax</td><td>' + vmax + ' kts</td></tr>';
					}
					html = html + '<tr><td>V100m</td><td>' + v100m + ' kts</td></tr>';
					if (leCommentaire != '') {
						html = html + '<tr><td colspan="2">' + leCommentaire + '</td></tr>';
					}
					html = html + '<tr><td colspan="2"><a href="' + location.pathname + '?session=' + ancre + '">#permalien</a></td></tr>';
					html = html + '</table></div></div>';
					
					html = html + '</div>';
					
					
					$('#sessions').html(html);
				}
			}
		goSession();	
	});
}

function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}

function goSession() {
	var d = getParameterByName('session');
	if (d != null) {
	    jQuery("html, body").animate({
			scrollTop : jQuery('#' + d).offset().top + 50
		}, "slow");
	}
}
	

