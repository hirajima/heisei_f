<?php get_header() ?>
<div class="section_service">
  <div class="section_inner">
    <div class="page_sectionHead">
      <h1 class="sectionHead_title"><span><?php the_title(); ?></span></h1>
    </div>
    <?php get_template_part("template-parts/breadcrumbs"); ?>
    <div class="editor">
          <div class="editor_inner">

        <div class="contents">
          <div class="guidebook_contents_inner">
            <div class="nyuguide content-box">
    			<h2 class="service_title"><span class="service_title_text">徳島県の入居ガイドです。</span></h2>
                          <div class="clear"></div>
                          <div class="order-jp">ヤ行</div>
                          <table class="guide_table">
                              <tbody><tr>
                                  <th class="city-name">区市町村名</th>
                                  <th class="city-gov">役所住所</th>
                                  <th class="link-btn">HP</th>
                                  <th class="link-btn">転入</th>
                                  <th class="link-btn">学校</th>
                                  <th class="link-btn">ゴミ</th>
                                  <th class="link-btn">回収日</th>
                                  <th class="link-btn">防災</th>
                                  <th class="link-btn">申請書</th>
                              </tr>

                              <tr>
                                  <td class="city-name">吉野川市</td>
                                  <td class="city-gov">吉野川市鴨島町鴨島115番地1 </td>
                                  <td class="link-btn">

                                    <a href="http://www.city.yoshinogawa.lg.jp/" target="_blank" rel="noopener"><img loading="lazy" src="/assets/images/document_icon.png" alt="吉野川市ホームページ" width="15" height="16"></a>

                                  </td>
                                  <td class="link-btn">

                                      <a href="http://www.city.yoshinogawa.lg.jp/docs/2010100600039/" target="_blank" rel="noopener"><img loading="lazy" src="/assets/images/document_icon.png" alt="吉野川市転入について" width="15" height="16"></a>

                                  </td>
                                  <td class="link-btn">
                                    <img loading="lazy" src="/assets/images/document_icon_link_off.png" alt="吉野川市学校について" width="15" height="16">

                                  </td>
                                  <td class="link-btn">

                                      <a href="http://www.city.yoshinogawa.lg.jp/category/bunya/kurashi/gomi/" target="_blank" rel="noopener"><img loading="lazy" src="/assets/images/document_icon.png" alt="吉野川市ゴミについて" width="15" height="16"></a>

                                  </td>
                                  <td class="link-btn">

                                      <a href="http://www.city.yoshinogawa.lg.jp/docs/2018032800039/" target="_blank" rel="noopener"><img loading="lazy" src="/assets/images/document_icon.png" alt="吉野川市回収日について" width="15" height="16"></a>

                                  </td>
                                  <td class="link-btn">

                                      <a href="http://www.city.yoshinogawa.lg.jp/category/bunya/anshin/" target="_blank" rel="noopener"><img loading="lazy" src="/assets/images/document_icon.png" alt="吉野川市防災について" width="15" height="16"></a>

                                  </td>
                                  <td class="link-btn">

                                      <a href="http://www.city.yoshinogawa.lg.jp/category/zokusei/kyoka/" target="_blank" rel="noopener"><img loading="lazy" src="/assets/images/document_icon.png" alt="吉野川市申請書について" width="15" height="16"></a>

                                  </td>
                              </tr>

                          </tbody></table>
                      </div>
            </div>
          </div>
          </div>
        </div>
  </div>
</div>

<h1>記事一覧</h1>
<hr>

<?php
if (have_posts()):while(have_posts()):the_post();
 ?>
<h2>
  <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
</h2>
<section>

  <p>作成日時:<?php the_time('Y年n月j日') ?></p>
  <a href="<?php echo get_permalink(); ?>"><?php the_excerpt(); ?></a>
</section>
<hr>
<?php endwhile; endif; ?>

<p>test</p>
<?php
$args = [
  "screen_reader_text" => "",
  "mid_size" => 5,
  // "type" => "list"
];
the_posts_pagination($args);
 ?>
<p>test</p>
<?php get_footer() ?>
