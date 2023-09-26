<?php
/**
 * BLOCK: Accordion
 *
 * @package jjrod
 */
?>

<?php if( have_rows('acc_container') ): ?>
    
    <div class="acc_container">

    <?php while( have_rows('acc_container') ): the_row();  ?>

        <div class="acc_item">
            <div class="acc_item_question">

                <p class="mb0"><?php if( get_sub_field('acc_item_question') ): ?><?php the_sub_field('acc_item_question'); ?><?php endif; ?></p>

                <svg class="svg-inline--fa" aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="currentColor" d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 192H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H224V480c0 17.7 14.3 32 32 32s32-14.3 32-32V288l192 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-192 0 0-192z"/>
                </svg>

            </div>
            
            <div class="acc_item_answer">

                <?php if( get_sub_field('acc_item_answer') ): ?><?php the_sub_field('acc_item_answer'); ?><?php endif; ?>
            </div>

        </div><!-- acc_item -->

    <?php endwhile; ?>

    </div><!-- acc_container -->

<?php endif; ?>


<script>
jQuery(document).ready(function($) {


    // Accordion
        $(function() {
            var Accordion = function(el, multiple) {
                this.el = el || {};
                this.multiple = multiple || false;

                // Variables privadas
                var links = this.el.find('.acc_item_question');
                // Evento
                links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
            }

            Accordion.prototype.dropdown = function(e) {
                var $el = e.data.el;
                    $this = $(this),
                    $next = $this.next();

                $next.slideToggle();
                $this.parent().toggleClass('open_acc');

                if (!e.data.multiple) {
                    $el.find('.acc_item_answer').not($next).slideUp().parent().removeClass('open_acc');
                };
            }

            var accordion = new Accordion($('.acc_container'), false);
        });


}); // jQuery(document).ready(function($) END

</script>
