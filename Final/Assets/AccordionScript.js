  $(function() {
    $( "#accordion" )
      .accordion({
        header: "> div > h3",
		collapsible: true,
		heightStyle: "content"
      })
      .sortable({
        axis: "y",
        handle: "h3",
        stop: function( event, ui ) {
          ui.item.children( "h3" ).triggerHandler( "focusout" );
        }
      });
  });
	!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];
	if(!d.getElementById(id)){js=d.createElement(s);
	js.id=id;js.src="//platform.twitter.com/widgets.js";
	fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
