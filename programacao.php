<?php
/**
* Template Name: Programação
 */

get_header(); ?>

<link href='<?php bloginfo('template_directory'); ?>/programacao/core/main.css' rel='stylesheet' />
<link href='<?php bloginfo('template_directory'); ?>/programacao/daygrid/main.css' rel='stylesheet' />
<link href='<?php bloginfo('template_directory'); ?>/programacao/list/main.css' rel='stylesheet' />
<script src='<?php bloginfo('template_directory'); ?>/programacao/core/main.js'></script>
<script src='<?php bloginfo('template_directory'); ?>/programacao/interaction/main.js'></script>
<script src='<?php bloginfo('template_directory'); ?>/programacao/daygrid/main.js'></script>
<script src='<?php bloginfo('template_directory'); ?>/programacao/list/main.js'></script>
<script src='<?php bloginfo('template_directory'); ?>/programacao/google-calendar/main.js'></script>
<script src='<?php bloginfo('template_directory'); ?>/programacao/core/locales/pt-br.js'></script>
<script src='<?php bloginfo('template_directory'); ?>/programacao/core/locales-all.js'></script>
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {

      plugins: [ 'interaction', 'dayGrid', 'list', 'googleCalendar' ],

      header: {
        left: 'prev,next',
        center: 'title',
        right: 'dayGridMonth,dayGridWeek,dayGridDay,timeGridWeek,timeGridDay'
      },
		
		 locale: 'pt-br',

      displayEventTime: false, // don't show the time column in list view

      // THIS KEY WON'T WORK IN PRODUCTION!!!
      // To make your own Google API key, follow the directions here:
      // http://fullcalendar.io/docs/google_calendar/
      googleCalendarApiKey: 'AIzaSyDcnW6WejpTOCffshGDDb4neIrXVUA1EAE',

      // US Holidays
      events: 'en.usa#holiday@group.v.calendar.google.com',

      eventClick: function(arg) {
        // opens events in a popup window
        window.open(arg.event.url, 'google-calendar-event', 'width=700,height=600');

        arg.jsEvent.preventDefault() // don't navigate in main tab
      },

      loading: function(bool) {
        document.getElementById('loading').style.display =
          bool ? 'block' : 'none';
      }

    });

    calendar.render();
  });

</script>

<style>
  #loading {
    display: none;
    position: absolute;
    top: 10px;
    right: 10px;
  }

  #calendar {
    max-width: auto;
    margin: 0 auto;
  }

</style>

	<section id="primary" class="content-area col-sm-12">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
			
			<div id='loading'>loading...</div>
			<div id='calendar'></div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();