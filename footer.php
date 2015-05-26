    <?php PC_Hooks::pc_after_opening_footer_tag(); /* Framework hook wrapper */ ?>
    <?php get_sidebar( 'footer' ); // Adds support for the four footer widget areas ?>
    <?php PC_Hooks::pc_before_closing_footer_tag(); /* Framework hook wrapper */ ?>

	</footer>
</div><!-- #body-container -->

<?php PC_Hooks::pc_after_closing_footer_tag(); /* Framework hook wrapper */ ?>
<?php wp_footer(); ?>

<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-9603226-1']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>

<!--For a sticky ad in the sidecol-->
<script type="text/javascript">
    $(document).ready(function() {
        var s = $(".sticker");
        var pos = s.position();
        $(window).scroll(function() {
            var windowpos = $(window).scrollTop();
            s.html("Distance from top:" + pos.top + "<br />Scroll position: " + windowpos);
            if (windowpos >= pos.top) {
                s.addClass("stick");
            } else {
                s.removeClass("stick");
            }
        });
    });
</script>

<style type="text/css">
    .chatwing-btn       {
        position: fixed;
        top: 140px; right: 0px;
        z-index: 100;
    }

    .chatwing-btn input {
        position: fixed;
        top: 200px; right: 0px;
        width: 40px; height:10px;
        padding: 35px 5px 5px;
        text-align: center;
        cursor: pointer;
        background: #C8C3AD url(http://www.ongoingworlds.com/images/template/chat_btn50x60.png) no-repeat center top;
        font-size: 0.85em;
        color:#666;
        z-index:1;
    }

    .chatwing-btn input:hover,
    .chatwing-btn input:active {
        background-color:#527234;
        color:#fff;
    }
</style>

<?php
/*
 * ChatWing
 */
?>

<script type="text/javascript">
    (function(d) {
        var cwjs, id='chatwing-js';  if(d.getElementById(id)) {return;}
        cwjs = d.createElement('script'); cwjs.type = 'text/javascript'; cwjs.async = true; cwjs.id = id
        cwjs.src = "//chatwing.com/code/a847be26-b61a-47ff-a2f2-a13950089ed2/popout";
        d.getElementsByTagName('head')[0].appendChild(cwjs);
    })(document);
</script>

<div id="chatwing-button-a847be26-b61a-47ff-a2f2-a13950089ed2" class="chatwing-btn" style=""></div>

</body>
</html>