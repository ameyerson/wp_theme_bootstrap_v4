// ===================================
// Begin hero.js
// ===================================
'use strict';

/* global Modernizr */

function scaleVideo() {

    if ($(window).width() > 1024) {

        var $video = $('#hero-video video'),
            $container = $('#hero-video'),
            videoRatio = $video.data('ratio'),
            divRatio = $container.width() / $container.height(),
            videoHeight = false,
            containerHeight = false,
            diffHeight = false,
            deltaHeight = false,
            diffWidth = false,
            deltaWidth = false;

         // console.log(videoRatio);
         // console.log(divRatio);

        if (divRatio > videoRatio) {
            // console.log('width');

            //center center
            videoHeight = $video.height();
            containerHeight = $container.height();

            $video.css({
                'max-width' : 'none',
                'max-height' : 'none'
            });

            diffHeight = videoHeight - containerHeight;
            deltaHeight = -(diffHeight / 2);

            // console.log(diffHeight);
            // console.log(deltaHeight);

            $video.css({
                'width': '100%',
                'height': 'auto',
                'top': deltaHeight,
                'bottom': 'auto',
                'left': 0,
                'right': 0
            });

        } else {
            // console.log('height');

            //center center
            diffWidth = $video.width() - $container.width();
            deltaWidth = -(diffWidth / 2);

            $video.css({
                'max-width' : 'none',
                'max-height' : 'none'
            });

            // console.log(diffWidth);
            // console.log(deltaWidth);

            $video.css({
                'width': 'auto',
                'height': '100%',
                'top': 0,
                'bottom': 0,
                'left': deltaWidth,
                'right': 'auto'
            });
        }

    }

} //function scaleVideo()

$(document).ready(function() {

    var $video = false,
        mp4 = false,
        ogg = false,
        webm = false,
        poster = false,
        videoMarkup = false,
        videoRatio = false;


    if ($('#hero-video').length > 0) { 

        if (($(window).width() > 1024) && (!($('html')).hasClass('no-backgroundsize'))) {

            $video = $('#hero-video');

            mp4 = $video.data('mp4');
            ogg = $video.data('ogg');
            webm = $video.data('webm');
            poster = $video.data('poster');


            videoMarkup = '<video autoplay preload loop id="video1" class="video-js vjs-default-skin" poster="' + poster + '" data-setup="">';
            if (mp4 !== '') {
                videoMarkup += '<source src="' + mp4 + '" type="video/mp4" />';
            }
            if (ogg !== '') {
                videoMarkup += '<source src="' + ogg + '" type="video/ogg" />';
            }
            if (webm !== '') {
                videoMarkup += '<source src="' + webm + '" type="video/webm" />';
            }
            videoMarkup += '<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>';
            videoMarkup += '</video>';

            $video.append(videoMarkup);

            $('#hero-video video').on('loadedmetadata', function() {
                $video.css('opacity',1);
            });


            if ( ! Modernizr.objectfit ) {
                //IE

                console.log('ie');

                $('#hero-video video').on('loadedmetadata', function() {
                    videoRatio = this.videoWidth / this.videoHeight;
                    $(this).data('ratio', videoRatio);
                    scaleVideo();
                });

                $(window).resize(function(){
                    scaleVideo();
                });

            }
        }
    }
});