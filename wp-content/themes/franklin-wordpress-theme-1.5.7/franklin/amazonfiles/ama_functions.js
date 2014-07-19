$(document).ready(function() {
  var globalRequest = 0;

	$('#search').bind('keyup', function(event) {
		if (event.keyCode == 13) {
			searchAction();
		}
	});

	$('#search-link').bind('click', function(event) {
		searchAction();
	});

	var searchAction = function() {
		var value = $('#search').val();
		var cat = $('#category').val();
		var country = $('#country').val();
		var page = $('#page').val();
		
		var track = value + " - " + cat + " - " + country;
		
		var resultContainer = $('#results');

		if (value.length < 3 && globalRequest == 1) {
			return;
		}

		//_gaq.push(['_trackEvent', 'Search', track]);

		globalRequest = 1;
		$("#add-link").hide();
		$.ajax({
			  url: themepath+"/amazonfiles/search.php",
			  dataType: 'json',
			  type: 'GET',
			  data: "q="+value+"&category="+cat+"&country="+country+"&page="+page,
			  beforeSend: function() {
            	$('#ajaxprocessing').show();
				
				},
				complete: function() {
					$('#ajaxprocessing').hide();
				},
			  success: function(data){
				globalRequest = 0;
				resultContainer.fadeOut('fast', function() {
					resultContainer.html('');
					var i=0;
					for (var x in data) {
						
						if (!data[x].price)
							data[x].price = 'kA';

						if (!data[x].img)
							data[x].img = 'assets/images/no.gif';

						var html = '<div class="res-container">';
						html += '<h2><a href="'+data[x].url+'" target="_blank">'+data[x].Title+'</a></h2>';
						html += '<img src="'+data[x].img+'">';
						html += '<h3>Price: '+data[x].price+'</h3>';
						/*html += '<div style="display:none" class="amazontitle">'+data[x].Title+'</div>';
						html += '<div style="display:none" class="amazonurl">'+data[x].url+'</div>';
						html += '<div style="display:none" class="amazonimg">'+data[x].img+'</div>';
						html += '<div style="display:none" class="amazonprice">'+data[x].price+'</div>';*/
						html += '<input type="hidden" value="' + data[x].Title + '" style="display:none" name="amazontitle[]" class="amazontitle" />';
						html += '<input type="hidden" value="' + data[x].url + '" style="display:none" name="amazonurl[]" class="amazonurl" />';
						html += '<input type="hidden" value="' + data[x].img + '" style="display:none" name="amazonimg[]" class="amazonimg" />';
						html += '<input type="hidden" value="' + data[x].price + '" style="display:none" name="amazonprice[]" class="amazonprice" />';
						html += '<input class="amazonadd" value="' + i + '" type="checkbox" name="amazonadd[]"> Select to add in database';
						html += '</div>';
						i = i +1;
						
						resultContainer.append(html);
						$("#add-link").show();
					}

					resultContainer.fadeIn('fast');
				});

			  }
			});
	};
	var addtodatabase = function(){
		var count = 0;
		var jsonProducts = [];
		$('.res-container').each(function(index, element) {
			if($(this).find('.amazonadd').attr('checked')=='checked')
			{
				jsonProducts.push({
					"title": $(this).find('.amazontitle').text(),
					"url": $(this).find('.amazonurl').text(),
					"img": $(this).find('.amazonimg').text(),
					"price": $(this).find('.amazonprice').text(),
				});
				count++;
			}
		});
		if(count==0)
		{
			alert("Please select products to upload!");
		}
		else
		{
			jQuery.ajax({
				url: themepath+"/amazonfiles/addproducts.php",
				type: 'post',
				data: JSON.stringify(jsonProducts),
				/*contentType: "application/json; charset=utf-8",*/
				dataType: "html", // used for return data type
				/*traditional: true,*/
				beforeSend: function() {
					$('#ajaxprocessingproduct').show();
				},
				complete: function() {
					$('#ajaxprocessingproduct').hide();
				},
				success: function(response) {
					//alert(response);
					//alert(response);
					//alert($.parseJSON(response));
					alert(response);
					/*$.each(response, function(i,item) {
						
					});*/
				},
			   error: function(XMLHttpRequest, textStatus, errorThrown) {
					alert(errorThrown + ' - ' + textStatus);
			   }            
			});
		}
	}
	$('#add-link').bind('click', function(event) {
		addtodatabase();
	});
});