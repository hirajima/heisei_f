<?php
require_once '../common/_header.php';
 ?>
 <section class="section_service">
 <div class="section_inner">
   <div class="page_sectionHead">
	 <h1 class="sectionHead_title"><span>お問い合わせ</span></h1>
   </div><!-- /.sectionHead -->
   <nav class="pankuzu">
	   <div class="pankuzu_inner">
		   <ul class="pankuzu_list">
			   <li class="pankuzu_item"><a href="/">TOP</a></li>
			   <li class="pankuzu_item">お問い合わせ</li>
		   </ul>
	   </div>
   </nav>
   <div class="contents">
	 <div class="service_contents_inner">
		 
		 <div class="container">
			 <div class="contact_backgroung">
			 	
					 <div  class="form_inner">
						 <div class="contactForm">
							 
							 <table class="contact_table" cellspacing="0">
								 <tbody>
									 <tr>
										 <th scope="row">お名前 <em class="require">必須</em></th>
										 <td><?php echo $_POST["your_name"]  ?></td>
									 </tr>
									 <tr>
										 <th scope="row">ふりがな</th>
										 <td><input type="text" name="your_furigana" id="hurigana" size="60" maxlength="120" value="<?php echo $_POST["your_furigana"]  ?>"></td>
									 </tr>
									 <tr>
										 <th scope="row">お電話番号</th>
										 <td class="tel"><?php 
										 foreach ($_POST["your_tel"]["data"] as $key => $value) {
											echo $value;
										 }
										 ?></td>
									 </tr>
									 <tr>
										 <th scope="row">メールアドレス <em class="require">必須</em></th>
										 <td><?php echo $_POST["your_email"]  ?></td>
									 </tr>
									 <tr>
										 <th scope="row">お問い合わせ内容 <em class="require">必須</em></th>
										 <td><?php echo $_POST["your_message"]  ?></td>
									 </tr>
										 </tbody>
									 </table>
									 
									 <div class="btnArea">
										 <input class="contact_form_btn" type="submit" name="submitConfirm" value="送信内容を確認する">
										 <!-- / .btnArea -->
									 </div>
									 
									 <!-- / .contactForm -->
								 </div>
							 <!-- end .mw_wp_form -->
						 </div>
						 
				</div>
		</div>
				 
	 </div>
   </div>
 </div>
 </section><!-- /.section -->
 
 
 
 
 
 
 
<?php
require_once '../common/_fotter.php';
 ?>