<?php global $wp_query; ?>
<div class="translators-main-profile layout1">
  <div class="profile-banner">
    <div class="image-holder">
      <div class="image-item" style="background-image: url(<?php _e(imgfolder('ptp-banner-1.png')); ?>);"></div>
    </div>
  </div>
  <div class="box-holder">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="box-inner">
            <div class="box-layout top-layout">
              <div class="tl-section-top">
                <div class="left">
                  <?php
                    $image_colors = array("bg1","bg2","bg3","bg4","bg5"); shuffle($image_colors);
                    $active_states = array("ACTIVE NOW", "ACTIVE: 30 MIN AGO", "ACTIVE: 15 MIN AGO", "ACTIVE: 45 MIN AGO"); shuffle($active_states);
                  ?>
                  <div class="t-image">
                    <div class="image-holder">
                      <div class="image-item <?php _e($image_colors[0]); ?>">
                        <div class="cm"><span class="initials">AP</span></div>
                        <div class="cm sh"></div>
                      </div>
                    </div>
                  </div>
                  <div class="t-details">
                    <div class="name">Aaron P.</div>
                    <div class="active-state <?php echo $active_states[0] == "ACTIVE NOW"? "active" : ""; ?>"><?php _e($active_states[0]); ?></div>
                    <div class="member-since">Gengo member since October 2012</div>
                  </div>
                </div>
                <div class="right">
                  <div class="t-links">
                    <?php $shareUrl = home_url().'/hire/profile/'.$wp_query->query_vars['translator_id']; ?>
                    <div class="social-media-share">
                      <span>SHARE THIS ON YOUR</span>
                      <a href="http://www.facebook.com/sharer.php?u=<?php _e($shareUrl); ?>" class="fb-xfbml-parse-ignore" target="_blank"><i class="fab fa-facebook-f"></i></a>
                      <a href="https://twitter.com/intent/tweet?url=<?php _e($shareUrl); ?>&text=Gengo%20Translators%20Profile%20-%20Aaron%20P.&via=nngroup" target="_blank"><i class="fab fa-twitter"></i></a>
                      <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php _e($shareUrl); ?>&title=Gengo%20Translators%20Profile%20-%20Aaron%20P." target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="share-url">
                      <input type="text" value="<?php _e($shareUrl); ?>" readonly="readonly" placeholder="<?php _e($shareUrl); ?>">
                    </div>
                    <div class="copy-url">
                      <span class="copied-notice"><?php _e('Link copied to clipboard'); ?></span>
                      <button class="copy-btn"><?php _e('COPY LINK'); ?></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tl-section-bottom">
                <div class="medals">
                  <div class="m-icon">
                    <div class="ptp-icons trophy"></div>
                  </div>
                  <div class="m-details">
                    <div class="heading">TOP SCORER</div>
                    <div class="detail">Awarded to translators who got 8.5 - 10 score from language specialists.</div>
                  </div>
                </div>
                <div class="medals">
                  <div class="m-icon">
                    <div class="ptp-icons pro"></div>
                  </div>
                  <div class="m-details">
                    <div class="heading">PRO TRANSLATOR</div>
                    <div class="detail">Translators with knowledge on a specific topic area.</div>
                  </div>
                </div>
                <div class="medals">
                  <div class="m-icon">
                    <div class="ptp-icons gsmith"></div>
                  </div>
                  <div class="m-details">
                    <div class="heading">GENGO WORDSMITH</div>
                    <div class="detail">Awarded for translators with more than 500,000 words.</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="box-layout summary-layout">
              <div class="sl-section-summary">
                <div class="heading">Summary</div>
                <div class="details">I’ve been a Gengo translator since October 2012. I’m an expert for translating Danish to English (British) and English (British) to Danish. Since 2012, I've accomplished 48 jobs, passed 25 GoChecks from language specialists, and gained the top scorer badge.</div>
              </div>
              <div class="sl-section-pairs">
                <div class="heading"><i class="ptp-icon langpair"></i><span>Language pairs</span></div>
                <?php for ($a=0; $a < 2; $a++) { ?>
                  <div class="lp-item">
                    <div class="lps">
                      <?php if($a == 0) { ?>
                        <span class="from">Danish</span>
                        <span class="arrow"></span>
                        <span class="to">English (British)</span>
                        <div class="words">starts from <strong>$0.10 per word</strong></div>
                      <?php } else {  ?>
                        <span class="from">English (British)</span>
                        <span class="arrow"></span>
                        <span class="to">Danish</span>
                        <div class="words">starts from <strong>$0.10 per word</strong></div>
                      <?php } ?>
                    </div>
                    <div class="score">
                      <span class="text">SCORE:</span>
                      <span class="counts">
                        <span class="bars">
                          <?php
                            $total = 8.8;
                            $whole = floor($total);
                            $deci = preg_replace('/[0.,]/', '', ($total - $whole));
                          ?>
                          <?php for ($i=1; $i < 11; $i++) {
                            $f = ($whole >= $i) ? " fl" : "";
                            $h = (($whole + 1) == $i) ? " val val-$deci" : "";
                            ?>
                            <span class="bar-item bar-<?php _e("$i$f$h"); ?>"></span>
                          <?php } ?>
                        </span>
                        <span class="counts-detail">8.8 out of 10</span>
                      </span>
                    </div>
                  </div>
                <?php } ?>
              </div>
              <div class="sl-section-details">
                <div class="details-group">
                  <div class="details-item d-gocheck">
                    <div class="heading"><i class="ptp-icon gocheck"></i><span>Number of GoChecks</span></div>
                    <div class="details">25 GoChecks</div>
                    <div class="info-box"><i class="fas fa-info-circle"></i><div>GoCheck is Gengo’s translation scoring system that ranges from 0 (lowest) to 10 (highest). Reviews are carried out by Language Specialists</div></div>
                  </div>
                  <div class="details-item d-tat hidden">
                    <div class="heading"><i class="ptp-icon tat"></i>Turn-around time between submission and output</div>
                    <div class="details">50 minutes average time</div>
                  </div>
                  <div class="details-item d-watch hidden">
                    <div class="heading"><i class="ptp-icon watch"></i>Time translating per 100 characters</div>
                    <div class="details">1 minute</div>
                  </div>
                  <div class="details-item d-char">
                    <div class="heading"><i class="ptp-icon char"></i>Number of characters translated</div>
                    <div class="details">295 characters</div>
                  </div>
                  <div class="details-item d-jobs">
                    <div class="heading"><i class="ptp-icon jobs"></i>Number of jobs translated</div>
                    <div class="details">48 jobs</div>
                  </div>
                  <div class="details-item d-customers">
                    <div class="heading"><i class="ptp-icon customers"></i>Number of customers worked with</div>
                    <div class="details">30 customers</div>
                  </div>
                  <div class="details-item d-lastjob">
                    <div class="heading"><i class="ptp-icon lastjob"></i>Last translated job</div>
                    <div class="details">May 23, 2018</div>
                  </div>
                  <div class="details-item d-null"></div>
                </div>
              </div>
            </div>

            <!-- Remove this area -->
            <div class="box-layout hire-layout hidden">
              <div class="hire-box text-layout">Hire from our amazing pool of translators.</div>
              <div class="hire-box image-layout">
                <div class="image-holder">
                  <div class="image-item" style="background-image: url(<?php _e(imgfolder('ptp_icons/trans1.png')); ?>)"></div>
                  <div class="image-item" style="background-image: url(<?php _e(imgfolder('ptp_icons/trans2.png')); ?>)"></div>
                  <div class="image-item" style="background-image: url(<?php _e(imgfolder('ptp_icons/trans3.png')); ?>)"></div>
                  <div class="image-item" style="background-image: url(<?php _e(imgfolder('ptp_icons/trans4.png')); ?>)"></div>
                </div>
              </div>
              <div class="hire-box link-layout">
                <a href="#">ORDER NOW</a>
              </div>
            </div>
            <div class="box-layout summary-layout hidden">
              <div class="heading">Summary</div>
              <div class="details">I’ve been a Gengo translator since October 2012. I’m an expert for translating Danish to English (British) and English (British) to Danish. Accomplished <strong>48 jobs</strong> since 2012 and passed <strong>25 GoChecks</strong> from language specialists gaining the <strong>top scorer</strong> badge.</div>
            </div>
            <div class="box-layout details-layout hidden">
              <div class="language-pairs-holder">
                <div class="heading"><i class="ptp-icon langpairs"></i><span>Language pairs</span></div>
                <?php for ($a=0; $a < 2; $a++) { ?>
                  <div class="lp-item">
                    <div class="lps">
                      <?php if($a == 0) { ?>
                        <span class="from">Danish</span>
                        <span class="arrow"></span>
                        <span class="to">English (British)</span>
                        <div class="words">starts from <strong>$0.10 per word</strong></div>
                      <?php } else {  ?>
                        <span class="from">English (British)</span>
                        <span class="arrow"></span>
                        <span class="to">Danish</span>
                        <div class="words">starts from <strong>$0.10 per word</strong></div>
                      <?php } ?>
                    </div>
                    <div class="score">
                      <span class="text">SCORE:</span>
                      <span class="bars">
                        <?php
                          $total = 8.8;
                          $whole = floor($total);
                          $deci = preg_replace('/[0.,]/', '', ($total - $whole));
                        ?>
                        <?php for ($i=1; $i < 11; $i++) {
                          $f = ($whole >= $i) ? " fl" : "";
                          $h = (($whole + 1) == $i) ? " val val-$deci" : "";
                          ?>
                          <span class="bar-item bar-<?php _e("$i$f$h"); ?>"></span>
                        <?php } ?>
                      </span>
                      <span class="counts">8.8 out of 10</span>
                    </div>
                  </div>
                <?php } ?>
              </div>
              <div class="details-group">
                <div class="details-item d-gocheck">
                  <div class="heading"><i class="ptp-icon gocheck"></i>Number of GoChecks</div>
                  <div class="details">25 GoChecks</div>
                  <div class="info-box"><i class="fas fa-info-circle"></i><div>GoCheck is Gengo’s translation scoring system that ranges from 0 (lowest) to 10 (highest). Reviews are carried out by Language Specialists</div></div>
                </div>
                <div class="details-item d-tat">
                  <div class="heading"><i class="ptp-icon tat"></i>Turn-around time between submission and output</div>
                  <div class="details">50 minutes average time</div>
                </div>
                <div class="details-item d-watch">
                  <div class="heading"><i class="ptp-icon watch"></i>Time translating per 100 characters</div>
                  <div class="details">1 minute</div>
                </div>
                <div class="details-item d-char">
                  <div class="heading"><i class="ptp-icon char"></i>Number of characters translated</div>
                  <div class="details">295 characters</div>
                </div>
                <div class="details-item d-jobs">
                  <div class="heading"><i class="ptp-icon jobs"></i>Number of jobs translated</div>
                  <div class="details">48 jobs</div>
                </div>
                <div class="details-item d-customers">
                  <div class="heading"><i class="ptp-icon customers"></i>Number of customers worked with</div>
                  <div class="details">30 customers</div>
                </div>
                <div class="details-item d-lastjob">
                  <div class="heading"><i class="ptp-icon lastjob"></i>Last translated job</div>
                  <div class="details">May 23, 2018</div>
                </div>
                <div class="details-item d-null"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="translators-holder">
    <div class="heading"><div class="heading-container"><?php _e('Hire from our amazing pool of translators'); ?></div></div>
    <div class="translator-images">
      <div class="translator-overflow">
        <div class="t-center">
          <?php for ($i=1; $i < 16; $i++) { ?>
            <div class="t-image">
              <div class="t-inner image-<?php _e($i); ?>" style="background-image: url(<?php _e(get_stylesheet_directory_uri().'/images/common/ptp_icons/trans'.$i.'.png'); ?>)"></div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
    <div class="button-holder">
      <a href="#"><?php _e('ORDER NOW'); ?></a>
    </div>
  </div>
</div>
