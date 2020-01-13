<?php
require_once '../common/_header.php';
 ?>
 <section class="section_service">
 <div class="section_inner">
   <div class="page_sectionHead">
	 <h1 class="sectionHead_title"><span>お問い合わせ</span></h1>
   </div><!-- /.sectionHead -->
   <div class="contents">
	 <div class="service_contents_inner">
		 
		 <div class="container">
			 <div class="contactTel">
				 <p>お電話でのご質問も受付けております。お気軽にお問い合わせください。</p>
				 <p class="number">TEL. <strong>088-699-6648</strong></p>
				 <!-- / .contactTel -->
			 </div>
			 <div class="contact_backgroung">
				 <div class="contactInput">
					 <p>WEBからのお問い合わせは下記入力フォームに必要事項をご記入のうえ、</br>『送信内容を確認する』ボタンをクリックしてください。<br>
						 自動処理で返信メールをお送りいたします。</br>後ほど、メールまたはお電話で折り返しご連絡させて頂きます。</p>
						 <!-- / .contactInput -->
					 </div>
			 	
					 <div  class="form_inner">
					 <form method="post" action="" enctype="multipart/form-data">
						 <div class="contactForm">
							 
							 <table class="contact_table" cellspacing="0">
								 <tbody>
									 <tr>
										 <th scope="row">お名前 <em class="require">必須</em></th>
										 <td><input type="text" name="your_name" id="name" size="60" maxlength="120" value=""></td>
									 </tr>
									 <tr>
										 <th scope="row">ふりがな</th>
										 <td><input type="text" name="your_furigana" id="hurigana" size="60" maxlength="120" value=""></td>
									 </tr>
									 <tr>
										 <th scope="row">お電話番号</th>
										 <td class="tel"><span class="mwform-tel-field"><input type="text" name="your_tel[data][0]" size="6" maxlength="5" value="" data-conv-half-alphanumeric="true"> - <input type="text" name="your_tel[data][1]" size="5"
											 maxlength="4" value="" data-conv-half-alphanumeric="true"> - <input type="text" name="your_tel[data][2]" size="5" maxlength="4" value="" data-conv-half-alphanumeric="true"><input type="hidden"
											 name="your_tel[separator]" value="-"></span></td>
									 </tr>
									 <tr>
										 <th scope="row">メールアドレス <em class="require">必須</em></th>
										 <td><input type="text" name="your_email" id="email" size="60" value="" data-conv-half-alphanumeric="true"></td>
									 </tr>
									 <tr>
										 <th scope="row">メールアドレス <em class="require">確認用</em></th>
										 <td><input type="text" name="your_email_validate" id="email_validate" size="60" maxlength="120" value=""></td>
									 </tr>
									 <tr>
										 <th scope="row">お問い合わせ内容 <em class="require">必須</em></th>
										 <td><textarea name="your_message" id="message" cols="60" rows="15"></textarea></td>
									 </tr>
										 </tbody>
									 </table>
									 
									 <div class="btnArea">
										 <input class="contact_form_btn" type="submit" name="submitConfirm" value="送信内容を確認する">
										 <!-- / .btnArea -->
									 </div>
									 
									 <!-- / .contactForm -->
								 </div>
								 
							 </form>
							 <!-- end .mw_wp_form -->
						 </div>
						 
						 <div class="contactNotice">
							 <h3 class="ttl">メールが届かない方へ</h3>
							 <p>
								 迷惑メール対策等で、メールが正しく届かないことがございます。<br>
								 【@】からのメールを受信できるように設定してください。
							 </p>
							<p>
								※個人情報の取り扱いについては、<a href="/privacy.php" style="display: inline;">こちら</a>をご覧ください。
							</p>
								 <!-- / .contactNotice -->
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