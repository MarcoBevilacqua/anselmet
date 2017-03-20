<?php
/**
 * The template used for displaying page content.
 *
 * @package ThemeGrill
 * @subpackage Himalayas
 * @since Himalayas 1.0
 */
?>
<li>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>
         style="border-bottom:none;padding-bottom: 0;">
   <?php do_action( 'himalayas_before_post_content' ); ?>

   <div class="entry-content">
      <div class="tg-container">
            <?php
            the_title(
                '<div style="text-align:center;margin-bottom: 10px;">
                    <h1 class="entry-title">', '</h1></div>' ); ?>
         <div style="text-align: center;margin-bottom: 10px;"><?php the_content();?></div>
         <div class="post-img tg-column-4">
            <div><?php the_post_thumbnail('himalayas-wine')?></div>
            <?php if(get_field('scheda')) :
               $arr = get_field('scheda'); ?>
            <div class="wine-pdf">
            <a href="<?php echo $arr['url']; ?>" target="_blank" title="scheda tecnica">
               <span>Scheda Tecnica</span>
            </a>
            </div>
            <?php endif; ?>
         </div>

         <div class="tg-column-5">
            <!-- VITIGNO + PARCELLE -->
            <div class="wine-meta">
               <?php if(get_field('vitigno')) { ?>
                  <div class="tg-column-2">
                     <span>Vitigno:</span><br />
                     <?php echo '<i>'. get_field('vitigno') . '</i>' ?>
                  </div>
               <?php } ?>
               <?php if(get_field('parcelle')) { ?>
               <div class="tg-column-2">
                  <span>Parcelle:</span><br />
                  <?php echo '<i>'. get_field('parcelle') . '</i>'; ?>
               </div>
               <?php } ?>
            </div>
            <!-- /VITIGNO + PARCELLE -->
            <!-- ALTITUDINE + RESA -->
            <div class="wine-meta">
            <?php if(get_field('altitudine')) { ?>
                <div class="tg-column-2">
                  <span>Altitudine:</span> <br />
                     <?php echo '<i>' .  get_field('altitudine') . '</i>'; ?>
                </div>
            <?php } ?>
               <?php if(get_field('resa')) { ?>
                   <div class="tg-column-2">
                      <span>Resa per Ettaro:</span><br />
                      <?php echo '<i>' . get_field('resa') . '</i>'; ?>
                   </div>
               <?php } ?>
            </div>
            <!-- /ALTITUDINE + RESA -->
            <!-- TERRENO + CONCIMAZIONE -->
            <div class="wine-meta">
               <?php if(get_field('terreno')) { ?>
               <div class="tg-column-2">
                  <span>Terreno:</span><br />
                  <?php echo '<i>' . get_field('terreno') . '</i>'; ?>
                  <?php } ?>
               </div>
               <div class="tg-column-2">
                  <?php if(get_field('concimazione')) { ?>
                     <span>Concimazione:</span> <br />
                        <?php echo '<i>' . get_field('concimazione') . '</i>'; ?>
                  <?php } ?>
               </div>
            </div>
            <!-- /TERRENO + CONCIMAZIONE -->
            <!-- TRATTAMENTO + DISERBO -->
            <div class="wine-meta">
               <?php if(get_field('trattamenti')) { ?>
                  <div class="tg-column-2">
                     <span>Trattamenti:</span><br />
                     <?php echo '<i>' . get_field('trattamenti') . '</i>'; ?>
                  </div>
               <?php } ?>
               <?php if(get_field('diserbo')) { ?>
                   <div class="tg-column-2">
                      <span>Diserbo:</span><br />
                      <?php echo '<i>' . get_field('diserbo') . '</i>'; ?>
                   </div>
               <?php }?>
            </div>
            <!-- /TRATTAMENTO + DISERBO -->
            <!-- ANNO + DENSITA -->
            <div class="wine-meta">
            <?php if(get_field('anno')) { ?>
                <div class="tg-column-2">
                   <span>Anno di impianto:</span><br />
                   <?php echo '<i>' . get_field('anno') . '</i>'; ?>
                </div>
            <?php }
            if(get_field('densita')) { ?>
                <div class="tg-column-2">
                   <span>Densit&agrave; di impianto:</span><br />
                   <?php echo '<i>' . get_field('densita') . '</i>'; ?>
                </div>
            <?php } ?>
            </div>
            <!-- /ANNO + DENSITA -->
            <!-- SISTEMA + FERMENTAZIONE -->
            <div class="wine-meta">
            <?php if(get_field('sistema')) { ?>
                <div class="tg-column-2">
                   <span>Sistema di impianto:</span><br />
                   <?php echo '<i>' . get_field('sistema') . '</i>'; ?>
                </div>
            <?php }
            if(get_field('fermentazione')) { ?>
                <div class="tg-column-2">
                   <span>Fermentazione:</span><br />
                   <?php echo '<i>' . get_field('fermentazione') . '</i>'; ?>
                </div>
            <?php } ?>
            </div>
            <!-- /SISTEMA + FERMENTAZIONE -->
            <!-- AFFINAMENTO -->
            <div class="wine-meta">
            <?php if(get_field('affinamento')) { ?>
                <div class="tg-column-2">
                   <span>Affinamento:</span><br />
                   <?php echo '<i>' . get_field('affinamento') . '</i>'; ?>
                </div>
            <?php } ?>
            </div>
            <?php if(get_field('bottiglie'))
            { ?>
               <div id="bottles" class="tg-column-2">
               <span><p>
                  <b>Bottiglie (2016)</b>
                  <?php echo trim(get_field('bottiglie')); ?></p>
               </span>
               </div>
            <?php } ?>

            <!-- /end column -->
         </div>
      </div>
   </div>

   <?php do_action( 'himalayas_after_post_content' ); ?>
</article>
</li>