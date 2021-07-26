$(document).ready(function(){
	function GetURLParameter(sParam){
		var sPageURL = window.location.search.substring(1);
		var sURLVariables = sPageURL.split('&');
		for (var i = 0; i < sURLVariables.length; i++){
			var sParameterName = sURLVariables[i].split('=');
			if (sParameterName[0] == sParam){
				return sParameterName[1];
			}
		}
	}  
   
    var code = GetURLParameter('code');

    if(typeof code !== 'undefined'){
        var codeFirstLetter = code.charAt(0);
        console.log('Code parameter exists ' + code + ' ' + codeFirstLetter);

        var promocodeWrap = $('.promocode');
        var promona = $('.promocode p .na');

        $.ajax({
            url:'https://app.psibufet.pl/api/order/couponcode/' + code,
            error: function(){
                $('.menu_dir a').removeClass('dir');
                $('#promocode').removeClass('active');
                console.log('Error while code loading :(');
            },
            success: function(){
                $.getJSON("https://app.psibufet.pl/api/order/couponcode/" + code, function (data) {
                    if (data.purpose == "MARKETING" || data.purpose == "CUSTOMER_CARE" || data.purpose == "CLIENT"){
                        promocodeWrap.addClass('active');
                        $('body').trigger('promocode-active');
                        promocodeWrap.find('.amount').html('-' + data.amount);
                        if(data.type == 'PERCENT'){
                            promocodeWrap.find('.type').html('%');
                        }
                        if(data.type == 'AMOUNT'){
                            promocodeWrap.find('.type').html('PLN');
                        }
                        if(codeFirstLetter == 2){
                            promona.html('na dwie pierwsze dostawy');
                        }
                    }			
                });
            }
        });
    }
	// var whitelist = ['',
	// 				'jak-to-dziala',
	// 				'nasze-przepisy',
	// 				'?code=' + sPageURL,
	// 				'o-nas',
	// 				'pracuj-w-psibufet',
	// 				'kontakt',
	// 				'thank-you',
	// 				'failed-payment',
	// 				'regulamin',
	// 				'regulamin.pdf',
	// 				'wolowe-love',
	// 				'jagnie-wcina',
	// 				'kurcze-pieczone',
	// 				'indyczy-kasek',
	// 				'regulamin_dla_hodowcow.pdf',
	// 				'lp',
	// 				'program-partnerski',
	// 			];

    // if (typeof sPageURL === 'undefined'){
    //     var firstletter = sPageURL;
    // }else{
    //     var firstletter = sPageURL.charAt(0);
    // }
	// if(whitelist.indexOf(sPageURL) !== -1){
	// 	console.log('This code contains existing page URL');
	// 	var code = GetURLParameter('code');

	// 	if(typeof code !== 'undefined'){
	// 		var codeFirstLetter = code.charAt(0);
	// 		console.log('Code parameter exists ' + code + codeFirstLetter);

	// 		var promocodeWrap = $('#promocode');
	// 		var promona = $('#promocode p .na');

	// 		$.ajax({
	// 			url:'https://app.psibufet.pl/api/order/couponcode/' + code,
	// 			error: function(){
	// 				$('body').removeClass('promocode');
	// 				$('.menu_dir a').removeClass('dir');
	// 				$('#promocode').removeClass('active');
	// 				console.log('Error while code loading :(');
	// 			},
	// 			success: function(){
	// 				$.getJSON("https://app.psibufet.pl/api/order/couponcode/" + code, function (data) {
	// 					if (data.purpose == "MARKETING" || data.purpose == "CUSTOMER_CARE" || data.purpose == "CLIENT"){
	// 						$('body').addClass('promocode');
	// 						$('.menu_dir a').addClass('dir');
	// 						promocodeWrap.addClass('active');
	// 						$('body').trigger('promocode-active');
	// 						promocodeWrap.find('.amount').html('-' + data.amount);
	// 						if(data.type == 'PERCENT'){
	// 							promocodeWrap.find('.type').html('%');
	// 						}
	// 						if(data.type == 'AMOUNT'){
	// 							promocodeWrap.find('.type').html('PLN');
	// 						}
	// 						if(codeFirstLetter == 2){
	// 							promona.html('na dwie pierwsze dostawy');
	// 						}
	// 					}			
	// 				});
	// 			}
	// 		});
	// 	}
	// }else{
	// 	$.ajax({
	// 		url:'https://app.psibufet.pl/api/order/couponcode/' + sPageURL,
	// 		error: function(){
	// 			window.location.replace("https://psibufet.pl/");
	// 			console.log('Error while code loading :(');
	// 		},
	// 		success: function(){
	// 			$.getJSON("https://app.psibufet.pl/api/order/couponcode/" + sPageURL, function (data) {
	// 				if (data.purpose == "CLIENT"){
	// 					window.location.replace("https://psibufet.pl/?code=" + sPageURL + '&utm_source=MGM&utm_medium=referral_link&utm_campaign=' + sPageURL + '&amount=' + data.amount + '&type=' + data.type);
	// 				}else if (data.purpose == "PARTNER"){
	// 					window.location.replace("https://psibufet.pl/?code=" + sPageURL + '&utm_source=partner&utm_medium=referral_link&utm_campaign=' + sPageURL + '&amount=' + data.amount + '&type=' + data.type);
	// 				}else if (data.purpose == "MARKETING"){
	// 					window.location.replace("https://psibufet.pl/?code=" + sPageURL + '&amount=' + data.amount + '&type=' + data.type);
	// 				}else if (data.purpose == "INFLUENCER"){
	// 					window.location.replace("https://psibufet.pl/?code=" + sPageURL + '&amount=' + data.amount + '&type=' + data.type);
	// 				}			
	// 			});
	// 			$(".dir").each(function () {
	// 				var $this = $(this);
	// 				var _href = $this.attr("href");
	// 				$this.attr("href", _href + '?code=' + sPageURL);
	// 			});
	// 		}
	// 	});
	// } 	
});