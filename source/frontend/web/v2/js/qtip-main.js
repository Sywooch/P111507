var LoadingDots = '<div class="LoadingDots small"><img src="/v2/images/loading-ajax.gif" style="height:50px;width:auto"></div>';
	function do_qtip_profile_user(){
        $('.profilesUserHover').each(function() {
            $(this).qtip({
                content: {
                     title: false,
                     text: function(event, api) {
                        var dta = {
                            id: $(this).attr('data-ajax')
                        };
						
                        $.ajax({ 
                            url: '/ajax/tooltip-profiles-user',
                            type: 'POST',
                            data: dta
                        }).done(function(html) {
                            api.set('content.text', html);
                        }).fail(function(xhr, status, error) {
                            api.set('content.text', status + ': ' + error);
                        });
                       return LoadingDots;
                    }
                },
                position: {
                    viewport: $(window),
                    my: 'top left',
                    at: 'bottom left'
                },
                style: 'qtip-bootstrap qtip-326',
                //show: 'click',
                //hide: 'click',
                hide: {
                    fixed: true,
                    delay:300
                },
            });

        });
    }
	function do_qtip_profile_topic(){
        $('.topicHover').each(function() {
            $(this).qtip({
                content: {
                     title: false,
                     text: function(event, api) {
                        var dta = {
                            id: $(this).attr('data-ajax')
                        };
                        $.ajax({ 
                            url: '/ajax/tooltip-topic',
                            type: 'POST',
                            data: dta
                        }).done(function(html) {
                            api.set('content.text', html);
                        }).fail(function(xhr, status, error) {
                            api.set('content.text', status + ': ' + error);
                        });
                       return LoadingDots;
                    }
                },
                position: {
                    viewport: $(window),
                    my: 'top left',
                    at: 'bottom left'
                },
                style: 'qtip-bootstrap qtip-326',
                //show: 'click',
                //hide: 'click',
                hide: {
                    fixed: true,
                    delay:300
                },
            });

        });
    }
    
(function( $ ){
    do_qtip_profile_user();
	do_qtip_profile_topic();
})( jQuery );