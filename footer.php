<footer>
	<a class="to-top" href="#top"><svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></a>
	<div class="content">
		<?php get_sidebar('0'); ?>
		<div class="block">
			<?php wp_nav_menu('menu=Footer Menu 01'); ?>
		</div>
		<div class="block">
			<?php wp_nav_menu('menu=Footer Menu 02'); ?>
		</div>
		<?php get_sidebar('1'); ?>
		<?php get_sidebar('2'); ?>
	</div>
</footer>
<script>
	AOS.init( {
		easing: 'ease-out-back',
		duration: 1000,

		disable: function () {
			var maxWidth = 1580;
			return window.innerWidth < maxWidth;
		}
	} );
</script>
<?php wp_footer(); ?>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const tabContainers = document.querySelectorAll('.tabs');

    // For each tab container (instance)
    tabContainers.forEach(container => {
        const tabs = container.querySelectorAll('.tab');
        const tabPanes = container.querySelectorAll('.tab-pane');

        // Add click event for switching tabs within each container
        tabs.forEach((tab, index) => {
            tab.addEventListener("click", function() {
                // If the clicked tab is already active, close it (toggle behavior)
                if (this.classList.contains('active')) {
                    this.classList.remove('active');
                    tabPanes[index].classList.remove('active');
                } else {
                    // Remove active class from all tabs and panes in this container
                    tabs.forEach(t => t.classList.remove('active'));
                    tabPanes.forEach(pane => pane.classList.remove('active'));

                    // Add active class to the clicked tab and the corresponding pane
                    this.classList.add('active');
                    tabPanes[index].classList.add('active');
                }
            });
        });
    });
});
	
document.addEventListener("DOMContentLoaded", function() {
    const dtabContainers = document.querySelectorAll('.dtabs');

    // For each dtab container (instance)
    dtabContainers.forEach(container => {
        const dtabs = container.querySelectorAll('.dtab');
        const dtabPanes = container.querySelectorAll('.dtab-pane');

        // Add click event for switching dtabs within each container
        dtabs.forEach((dtab, index) => {
            dtab.addEventListener("click", function() {
                // Remove active class from all dtabs and panes in this container
                dtabs.forEach(t => t.classList.remove("active"));
                dtabPanes.forEach(pane => pane.classList.remove("active"));

                // Add active class to the clicked dtab and the corresponding pane
                this.classList.add("active");
                dtabPanes[index].classList.add("active");
            });
        });
    });
});
	
</script>
<script>
jQuery(".search").on("click",function(e){
e.preventDefault();
jQuery(".search-form").toggleClass("open");
});	
</script>
</body>
</html>