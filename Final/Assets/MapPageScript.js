		$(function(){ 
		$("#my_map").gmap3({
			 map: {
				options: {
				  maxZoom: 20,
				  zoom: 14,
				  disableDefaultUI:true,
				  draggable:false,
				  scrollwheel: false,
				  zoomControl: true,
				  center:[32.97683773951448, -96.7591873150825],
				  mapTypeId: google.maps.MapTypeId.HYBRID,   
				  mapTypeControlOptions: {
					style: google.maps.MapTypeControlStyle.DROPDOWN_MENU}
				  }
			},
			  marker:{
				values:[
				  {address:"1119 Edith Cr. Richardson Tx", data:"I was born here!"}
				],
				events:{
				  mouseover: function(marker, event, context){
					var map = $(this).gmap3("get"),
					  infowindow = $(this).gmap3({get:{name:"infowindow"}});
					if (infowindow){
					  infowindow.open(map, marker);
					  infowindow.setContent(context.data);
					} else {
					  $(this).gmap3({
						infowindow:{
						  anchor:marker, 
						  options:{content: context.data}
						}
					  });
					}
				  },
				  mouseout: function(){
					var infowindow = $(this).gmap3({get:{name:"infowindow"}});
					if (infowindow){
					  infowindow.close();
					}
				  }
				}
			  }
			}); 
		});