var LoadingDots = ' <div class="LoadingDots small"><div class="dot first"></div><div class="dot second"></div><div class="dot third"></div></div>';
function do_qtip_menu_feed(){
        $('.has-qtip-menu-feed').each(function() {
            $(this).qtip({
                content: {
                     title: false,
                     text: function(event, api) {
                        var data_action         = 'tooltip_menu_feed';
                        var data_user_id        = 0;

                        var dta = {
                            data_user_id: data_user_id,
                            action: data_action
                        };
                        $.ajax({ 
                            url: '/ajax/tooltip-menu-feed',
                            type: 'POST',
                            data: dta
                        }).done(function(html) {
                            api.set('content.text', html);
                        }).fail(function(xhr, status, error) {
                            api.set('content.text', status + ': ' + error);
                        });
                       return ' <div class="LoadingDots small"><div class="dot first"></div><div class="dot second"></div><div class="dot third"></div></div>';
                    }
                },
                events: {
                    show: function(event, api) {
                        $('.sidebar-left-home').addClass('is_editing');
                        $('.edit-menu-feed').addClass('edit-menu-feed-done');
                        $('.edit-menu-feed').text('Done');
                        $('.remove-feed').show();
                    }
                },
                position: {
                     viewport: $(window),
                    my: 'top left',
                    at: 'center right',
                    adjust: {
                        x: 20,
                        y:-10
                    }
                },
                style: 'qtip-bootstrap qtip-326 qtip-bg-gray',
                show: 'click',
                hide: 'click',
                // hide: {
                //     fixed: true,
                //     delay: 300
                // },
            });

            return false;
        });
    }
    //DINHTIN FIX IT
    function do_qtip_profile(){
        $('.has-qtip-profile').each(function() {
            $(this).qtip({
                content: {
                     title: false,
                     text: function(event, api) {
                        var data_action         = 'tooltip_profile';
                        var data_user_id        = 0;

                        var dta = {
                            data_user_id: data_user_id,
                            action: data_action,
                            id: $(this).attr('data-ajax')
                        };
                        $.ajax({ 
                            url: '/ajax/tooltip-profile',
                            type: 'POST',
                            data: dta
                        }).done(function(html) {
                            api.set('content.text', html);
                        }).fail(function(xhr, status, error) {
                            api.set('content.text', status + ': ' + error);
                        });
                       return ' <div class="LoadingDots small"><div class="dot first"></div><div class="dot second"></div><div class="dot third"></div></div>';
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
                    delay: 300
                },
            });

        });
    }
    function do_qtip_cat(){
        $('.has-qtip-cat').each(function() {
            $(this).qtip({
                content: {
                     title: false,
                     text: function(event, api) {
                        var data_action   = 'tooltip_cat';
                        var data_cat      = $(this).attr('data-cat');

                        var dta = {
                            cat: data_cat,
                            action: data_action
                        };
                        $.ajax({ 
                            url: '/ajax/tooltip-cat',
                            type: 'POST',
                            data: dta
                        }).done(function(html) {
                            api.set('content.text', html);
                        }).fail(function(xhr, status, error) {
                            api.set('content.text', status + ': ' + error);
                        });
                       return ' <div class="LoadingDots small"><div class="dot first"></div><div class="dot second"></div><div class="dot third"></div></div>';
                    }
                },
                cache: false,
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
                    delay: 300
                },
            });
        });
    }
    function do_qtip_menu_action(){
        $('.has-qtip-menu-action').each(function() {
            $(this).qtip({
                content: {
                     title: false,
                     text: function(event, api) {
                        var data_action   = 'tooltip_menu_actions';
                        var data_feed_id  = 0;
                        var dta = {
                            feed_id : data_feed_id,
                            action  : data_action
                        };
                        $.ajax({ 
                            url: '/ajax/menu-action',
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
                style: 'qtip-bootstrap',
                show: 'click',
                //hide: 'click',
                hide: {
                    fixed: true,
                    delay: 300
                },
            });


        });
    }
    function do_qtip_menu_share(){
        $('.has-qtip-menu-share').each(function() {
            $(this).qtip({
                content: {
                     title: false,
                     text: function(event, api) {
                        var data_action   = 'tooltip_menu_share';
                        var data_feed_id  = 0;
                        var dta = {
                            feed_id : data_feed_id,
                            action  : data_action
                        };
                        $.ajax({ 
                            url: 'ajax.php',
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
                style: 'qtip-bootstrap',
                show: 'click',
                //hide: 'click',
                hide: {
                    fixed: true,
                    delay: 300
                },
            });


        });
    }
    function do_qtip_menu_embed(){
        $('.has-qtip-menu-embed').each(function() {
            $(this).qtip({
                content: {
                     title: false,
                     text: function(event, api) {
                        var data_action   = 'tooltip_menu_embed';
                        var data_feed_id  = 0;
                        var dta = {
                            feed_id : data_feed_id,
                            action  : data_action
                        };
                        $.ajax({ 
                            url: 'ajax.php',
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
                style: 'qtip-bootstrap',
                show: 'click',
                //hide: 'click',
                hide: {
                    fixed: true,
                    delay: 300
                },
            });


        });
    }
    
(function( $ ){
    do_qtip_cat();
    do_qtip_profile();
    do_qtip_menu_action();
    do_qtip_menu_feed();
    do_qtip_menu_share();
    do_qtip_menu_embed();
})( jQuery );