jQuery(document).ready(function () {

    // jQuery('#project').keyup(function () {
    jQuery(document).on('keyup focusin', '#project', function () {
        let searchValue = jQuery(this).val();
        if (searchValue.length > 2) {
            jQuery('.show-while-type').hide();
            jQuery('.show-while-ajax').show();
            jQuery.ajax({
                url: signflow_child_AjaxObject.ajax_url,
                type: 'POST',
                dataType: 'JSON',
                data: {
                    action: 'signFlowAppSearchwithAjax',
                    searchValue: searchValue
                },
                success: function (data) {
                    let html = '<ul id="ui-id-1" tabindex="0" class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front">';
                    jQuery.each(data, function (index, value) {
                        html = html + '<li class="ui-menu-item"><a href="' + value.link + '"><div id="ui-id-2" tabindex="-1" class="ui-menu-item-wrapper"><img src="' + value.icon + '"><span class="wish-name">' + value.label + '</span></div></a></li><br>';
                    });
                    html = html + '</ul>';
                    jQuery(".we-search-result").html(html);

                    jQuery('.show-while-ajax').hide();
                    jQuery('.show-while-type').show();

                }
            });
        } else {
            jQuery(".we-search-result").html('');
        }

    });



    jQuery(document).on('click', function (e) {
        if (jQuery(e.target).closest(".navbar-form").length === 0) {
            jQuery('.show-while-ajax').hide();
            jQuery('.show-while-type').show();
            jQuery(".we-search-result").html('');
        }
    });

    jQuery(function ($) {
        let tagslug = jQuery('.tagslug').text();
        let pageNumber = 1;
        jQuery(document).on("click", ".show-post", function () {
            pageNumber = 2;
            $('.show-post').hide();
            loadPost();
        });
        jQuery(document).on("click", ".more-post", function () {
            $(".more-post").hide(); // Disable the button, temp.
            loadPost();
        });


        function loadPost() {

            jQuery.ajax({
                //ajax request
                type: "POST",
                url: signflow_child_AjaxObject.ajax_url,
                data: {
                    action: "load_more_posts",
                    pageNumber: pageNumber,
                    tagslug: tagslug,
                },
                success: function (data) {
                    jQuery(".load_more_posts").append(data);
                    pageNumber++;
                },
                error: function (errorThrown) {
                    console.log(errorThrown);
                },
            });
        }
    });
});