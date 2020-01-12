<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <title>平成不動産</title>
    <link rel="stylesheet" type="text/css" href="assets/styles/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="assets/styles/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/styles/slick-theme.css">
    <link rel="stylesheet" href="assets/styles/perfect-scrollbar.css" />
    <link rel="stylesheet" type="text/css" href="assets/styles/styles.css">
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/backup-common.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/perfect-scrollbar.js"></script>
  </head>
  <body>
    <header class="gHeader">
      <div class="gHeader_inner">
        <figure class="gHeader_logo"><a href="/"><img src="assets/images/logo.png" alt="LOGO"></a></figure>
        <nav class="gNav">
          <div class="gNav_inner">
            <ul class="gNav_list">
              <li class="gNav_item"><a href="/">TOP</a></li>
              <li class="gNav_item"><a href="/about/">SERVICE</a></li>
              <li class="gNav_item"><a href="/result/">最新物件情報</a></li>
              <li class="gNav_item"><a href="/result/">入居ガイド</a></li>
              <li class="gNav_item"><a href="/contact/">会社案内</a></li>
            </ul>
          </div>
        </nav><!-- /.gNav -->
        <div class="gHeader_contact">
          <div class="gHeader_contact_inner">
            <a href="">お問い合わせ</a>
          </div>
        </div>
      </div>
    </header>
    <header class="sp-gHeader">
      <div class="sp-gHeader_inner">
        <figure class="sp-gHeader_logo"><a href="/"><img src="assets/images/logo.png" alt="LOGO"></a></figure>
        <div class="toggle"><a href="#">menu</a></div>
        <nav class="gNav">
          <div class="gNav_inner">
            <ul class="gNav_list">
              <li class="gNav_item"><a href="/">TOP</a></li>
              <li class="gNav_item"><a href="/about/">SERVICE</a></li>
              <li class="gNav_item"><a href="/result/">最新物件情報</a></li>
              <li class="gNav_item"><a href="/contact/">入居ガイド</a></li>
              <li class="gNav_item"><a href="/contact/">会社案内</a></li>
            </ul>
          </div>
        </nav><!-- /.gNav -->
        <!-- <div class="gHeader_contact"><a href="">Contact</a></div> -->
      </div>
    </header>
    <section class="top">
      <div class="background">
          <div class="top-main">
            <h3 class="main-title-1">松茂町の不動産・賃貸物件について、ご相談ください。</h3>
            <div class="main-title-2">
              <h4 class="main-title-2-text">誠実な対応を心掛けます。</h4>
            </div>
          </div>
      </div>
    </section><!-- /.section -->
    <section class="section">
      <div class="section_inner">
        <div class="sectionHead">
          <h1 class="sectionHead_title"><span>ABOUT</span></h1>
        </div><!-- /.sectionHead -->
        <div class="contents">
          <div class="contents_inner">
              <div class="about">
                <p style="line-height: 1.5;">
                    弊社は、平成２年に設立された不動産会社です。 </br>
                    不動産に関する様々な情報とサービス提供に取り組み、企画開発から設計、施工、販売</br>
                    さらにアフターサービスにいたるまで、皆様方のご要望にお応えしております。 是非一度ご利用ください。</br>
                </p>
              </div>
            </div>
          </div>
        </div><!-- /.newsList -->
      </div>
      </section><!-- /.section -->
      <section class="section_service">
      <div class="section_inner">
        <div class="sectionHead">
          <h1 class="sectionHead_title"><span>Service</span></h1>
        </div><!-- /.sectionHead -->
        <div class="contents">
          <div class="contents_inner">
              <ul class="contents_list">
                <li class="contents_item">
                  <a href="#tabs-1" >
                    <figure class="contents_img">
                      <img src="assets/images/rent.png" alt="コンテンツ画像">
                      <div class="black_cover"><span class="contents_title">賃貸仲介業</span></div>
                    </figure>
                  </a>
                </li>
                <li class="contents_item">
                  <a href="#tabs-2">
                    <figure class="contents_img">
                      <img src="assets/images/sales.png" alt="コンテンツ画像">
                      <div class="black_cover"><span class="contents_title">土地売買業</span></div>
                    </figure>
                  </a>
                </li>
                <li class="contents_item">
                  <a href="#tabs-3">
                    <figure class="contents_img">
                      <img src="assets/images/house.png" alt="コンテンツ画像">
                      <div class="black_cover"><span class="contents_title">中古戸建買取業</span></div>
                    </figure>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div><!-- /.newsList -->
      </div>
      </section><!-- /.section -->
      <section class="newssection">
        <div class="newssection_inner">
          <div class="sectionHead">
            <h1 class="sectionHead_title">News</h1>
          </div><!-- /.sectionHead -->
          <div class="news">
            <div class="news_inner">
              <ul class="news_list">
                    <a class="news_contents" href="news/detail?id=<%= news.id %>" >
                        <p class="news_date">2019/09/02</p>
                        <p class="news_label">お知らせ</p>
                        <p class="news_title">ホームページを公開しました。</p>
                    </a>
                  </li><!-- /.news_item -->
              </ul>
            </div>
          </div><!-- /.newsList -->
          <div class="btns">
            <div class="btns_item"><a href="/news/" class="btn btn-blueLight btn-arrowBlue btn-mid">○○○○の一覧へ</a></div>
          </div>
        </div>
      </section><!-- /.section -->
  <footer class="footer">
     <div class="footer_inner">
       <div class="footer_row">
         <div class="footer_logo">
           <figure class="gfotter_logo"><a href="/"><img src="assets/images/logo_kuro.png" alt="LOGO"></a></figure>
         </div>
         <ul>
           <li class="footer_item">徳島県板野郡松茂町中喜来字南張3-3</li>
           <li class="footer_item">TEL 088-699-6648</li>
           <li class="footer_item">FAX 088-699-6648</li>
         </ul>
         <ul>
           <li class="footer_item">営業時間 7:30～16:15</li>
           <li class="footer_item">定休日 月曜日 金曜日</li>
           <li class="footer_item">徳島県知事免許(8)1938</li>
         </ul>
         <ul>
           <li class="footer_item">個人情報の取扱いについて</li>
           <li class="footer_item">免責事項</li>
         </ul>

       </div>
       <div class="copyright">
         <span class="copyright_text">copyright (c)  all rights reserved.</span>
       </div>
     </div>
    </footer><!-- /.gFooter -->
  </body>
</html>