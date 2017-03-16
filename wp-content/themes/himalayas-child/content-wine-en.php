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
               <span>Technical Sheet</span>
            </a>
            </div>
            <?php endif; ?>
         </div>

         <div class="tg-column-5">
            <!-- VITIGNO + PARCELLE -->
            <div class="wine-meta">
               <?php
               $obj = get_field_object('vitigno');
               if($obj){ ?>
                  <div class="tg-column-2">
                     <span><?php echo $obj['label'] . ":" ?></span><br />
                     <?php echo '<i>'. $obj['value'] . '</i>' ?>
                  </div>
               <?php } ?>
               <?php
               $obj = get_field_object('parcelle');
               if($obj) { ?>
               <div class="tg-column-2">
                  <span><?php echo $obj['label'] . ":" ?></span><br />
                  <?php echo '<i>'. $obj['value'] . '</i>'; ?>
               </div>
               <?php } ?>
            </div>
            <!-- /VITIGNO + PARCELLE -->
            <!-- ALTITUDINE + RESA -->
            <div class="wine-meta">
            <?php
            $obj = get_field_object('altitude');
            if($obj) { ?>
                <div class="tg-column-2">
                  <span><?php echo $obj['label'] . ":" ?></span> <br />
                   <?php echo '<i>'. $obj['value'] . '</i>'; ?>
                </div>
            <?php } ?>
               <?php
               $obj = get_field_object('resa');
               if($obj) { ?>
                   <div class="tg-column-2">
                      <span><?php echo $obj['label']. ":" ?></span> <br />
                      <?php echo '<i>'. $obj['value'] . '</i>'; ?>
                   </div>
               <?php } ?>
            </div>
            <!-- /ALTITUDINE + RESA -->
            <!-- TERRENO + CONCIMAZIONE -->
            <div class="wine-meta">
               <?php
               $obj = get_field_object('terreno');
               if($obj) { ?>
               <div class="tg-column-2">
                  <span><?php echo $obj['label']. ":" ?></span> <br />
                  <?php echo '<i>'. $obj['value'] . '</i>'; ?>
                  <?php } ?>
               </div>
               <div class="tg-column-2">
                  <?php
                  $obj = get_field_object('concimazione');
                  if($obj) { ?>
                     <span><?php echo $obj['label']. ":" ?></span> <br />
                     <?php echo '<i>'. $obj['value'] . '</i>'; ?>
                  <?php } ?>
               </div>
            </div>
            <!-- /TERRENO + CONCIMAZIONE -->
            <!-- TRATTAMENTO + DISERBO -->
            <div class="wine-meta">
               <?php
               $obj = get_field_object('trattamenti');
               if($obj) { ?>
                  <div class="tg-column-2">
                     <span><?php echo $obj['label']. ":" ?></span> <br />
                     <?php echo '<i>'. $obj['value'] . '</i>'; ?>
                  </div>
               <?php }
               $obj = get_field_object('diserbo');
               if($obj) { ?>
                   <div class="tg-column-2">
                      <span><?php echo $obj['label']. ":" ?></span> <br />
                      <?php echo '<i>'. $obj['value'] . '</i>'; ?>
                   </div>
               <?php } ?>
            </div>
            <!-- /TRATTAMENTO + DISERBO -->
            <!-- ANNO + DENSITA -->
            <div class="wine-meta">
               <?php
               $obj = get_field_object('anno_di_impianto');
               if($obj) { ?>
                <div class="tg-column-2">
                   <span><?php echo $obj['label']. ":" ?></span> <br />
                   <?php echo '<i>'. $obj['value'] . '</i>'; ?>
                </div>
            <?php } ?>
               <?php
               $obj = get_field_object('density_en');
               if($obj && $obj['value']!= "") { ?>
                <div class="tg-column-2">
                   <span><?php echo $obj['label']. ":" ?></span> <br />
                   <?php echo '<i>'. $obj['value'] . '</i>'; ?>
                </div>
            <?php } ?>
            </div>
            <!-- /ANNO + DENSITA -->
            <!-- SISTEMA + FERMENTAZIONE -->
            <div class="wine-meta">
               <?php
               $obj = get_field_object('sistema_di_impianto');
               if($obj) { ?>
                <div class="tg-column-2">
                   <span><?php echo $obj['label']. ":" ?></span> <br />
                   <?php echo '<i>'. $obj['value'] . '</i>'; ?>
                </div>
            <?php } ?>
               <?php
               $obj = get_field_object('fermentazione');
               if($obj) { ?>
                <div class="tg-column-2">
                   <span><?php echo $obj['label']. ":" ?></span> <br />
                   <?php echo '<i>'. $obj['value'] . '</i>'; ?>
                </div>
            <?php } ?>
            </div>
            <!-- /SISTEMA + FERMENTAZIONE -->
            <!-- AFFINAMENTO -->
            <div class="wine-meta">
               <?php
               $obj = get_field_object('aging_en');
               if($obj && $obj['value'] != "") { ?>
                <div class="tg-column-2">
                   <span><?php echo $obj['label']. ":" ?></span> <br />
                   <?php echo '<i>'. $obj['value'] . '</i>'; ?>
                </div>
            <?php } ?>
            </div>
            <?php
            $obj = get_field_object('bottiglie_en');
            if($obj && $obj['value'] != "") { ?>
               <div id="bottles" class="tg-column-2">
               <span><p>
                  <b><?php echo $obj['label'] . ":"; ?></b>
                  <?php echo $obj['value']; ?></p>
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