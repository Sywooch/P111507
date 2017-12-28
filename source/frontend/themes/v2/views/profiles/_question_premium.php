<?php
    use yii\helpers\Html;
    use yii\helpers\Url;
    use frontend\widget\WidgetShareSocial;
    use yii\helpers\HtmlPurifier;

    $base_url = $this->theme->baseUrl;
    $total_comment = count($model->comments);
    $total_vote = count($model->votes);
   // $voted = cuser()->votedQuestion($model->id);
?>
<div class="question-premium section">
   <div class="qp-topic">
      <p>Câu trả lời<a href="#" class="qp-hover">Khách sạn</a></p>
      <div class="profile">
         <div class="profile-content">
            <div class="profile-title">
               <a href="#"><img src="<?=$base_url?>/images/profile-cat.png" alt=""></a>
               <div class="profile-name"><a href="#">Khách sạn</a></div>
            </div>
            <div class="profile-info">
               <p>Following recent terror attacks, the mayor's office has released a 59-point plan to lure tourists back to Paris, and the city is investing millions of euros into its ...</p>
            </div>
         </div>
         <div class="profile-track">
            <div class="connect-track"><a href="#"><i class="nc-icon-outline users_add-29"></i> Theo dõi | 136k</a></div>
            <a class="on-notice" href="#">Thêm vào yêu thích</a>
         </div>
      </div>
   </div>
   <h3 class="qp-title"><a href="#">Xin địa chỉ homestay tại thành phố Đà Lạt?</a></h3>
   <div class="qp-author">
      <a href="#" class="qp-ava"><img src="<?=$base_url?>/images/ava-qp.png" alt=""></a>
      <div class="author-info">
         <p class="info-top"><a href="#">soianchay</a>, Designer tại SpaceLab</p>
         <div class="profile">
            <div class="profile-content">
               <div class="profile-title">
                  <a href="#"><img src="<?=$base_url?>/images/connect-ava-02.png" alt=""></a>
                  <div class="profile-name"><a href="#">Sói Ăn Chay</a></div>
               </div>
               <div class="profile-info">
                  <ul>
                     <li><i class="fa fa-briefcase" aria-hidden="true"></i>Làm việc tại SpaceLab</li>
                     <li><i class="fa fa-graduation-cap" aria-hidden="true"></i>Từng học tại Đại học FPT</li>
                     <li><i class="fa fa-home" aria-hidden="true"></i>Sống tại Vinh</li>
                     <li><i class="fa fa-eye" aria-hidden="true"></i>57.8k lượt xem câu hỏi - 1.6k trong tháng này</li>
                  </ul>
               </div>
            </div>
            <div class="profile-track">
               <div class="connect-track"><a href="#"><i class="nc-icon-outline users_add-29"></i> Theo dõi | 136k</a></div>
               <a class="on-notice" href="#">Nhận thông báo</a>
            </div>
         </div>
         <p class="info-bottom">Được yêu thích bởi <a href="#">Nguyễn Xuân Trường</a>, Designer tại Riseup Agency</p>
      </div>
   </div>
   <div class="qp-content">
      <div class="qp-text">
         <p>Tất tần tật những Hostel, Homestay đẹp ở Đà Lạt cho các bạn mê khám phá, lánh xa trung tâm Đà Lạt để thưởng thức thiên nhiên trong lành nè! Nếu có dịp đi Đà Lạt thì phải tham khảo bài viết này nhé. Đa phần các hostel và homestay bạn phải đặt phòng trước 1 - 2 tháng để có chỗ ở ưng ý nhất nhé.</p>
         <p>Tại Beepub có tổng cộng hai dạng phòng cơ bản đó là phòng Dorm (phòng ngủ chung với nhiều người) và phòng đơn...
		 <a href="#" class="qp-readmore">(Xem thêm)</a></p>
      </div>
		<div>
			<?php if(!empty($model->answer->images)):?>
				<p><a href="#" class="qp-readmore"><img src="<?=$model->answer->images?>" alt=""></a></p>
			<?php endif;?>
		</div>
   </div>
   <div class="qp-full-content">
      <div class="qp-text">
         <p>TP.HCM là một thành phố rộng lớn nhưng không hẳn là một thành phố thơ mộng với nhiều địa điểm lãng mạn thích hợp cho những buổi hẹn hò. Foody sẽ đưa ra một vài gợi ý thú vị nhất cho những cặp đôi cho buổi hò hẹn sắp tới, giúp các bạn có thể tùy ý lựa chọn địa điểm sao cho phù hợp với túi tiền của mình.</p>
         <p>Các bạn có thể screenshot màn hình lại để dành trong điện thoại, rãnh rỗi cùng người yêu hẹn hò 2 người nè.</p>
         <h4>1. Cafe/ Nhà hàng trên cao</h4>
         <p>Nếu quá chán ngán với cảnh đông đúc nhộn nhịp của trung tâm Sài Gòn và muốn “chạy” xa khỏi cái không khí ấy, những quán cà phê trên tòa nhà chọc trời ở Sài Gòn quả là gợi ý đáng để thử phải không nào.</p>
         <img src="<?=$base_url?>/images/full-content.jpg" alt="">
         <p>Những quán cà phê này ở tít trên cao nên gió mát lồng lộng và không khí vô cùng thoáng mát, lại có thể ngắm toàn cảnh thành phố lung linh về đêm. Duy có điểm cần lưu ý là chi phí hò hẹn ở những nơi này khá là tốn kém (khoảng 500.000 VND trở lên). Ảnh: Chill Sky Bar</p>
         <h4>2. Rooftop Pool Bar</h4>
         <p>Bạn có bao giờ tưởng tượng đang nằm thong thả bên dòng nước mát lạnh, bên cạnh là ly nước yêu thích của mình không? Hay nhìn những người yêu thương đang nô đùa dưới nước, ta lại thưởng thức ly cafe bên hồ? Hoặc chỉ đơn giản là nhìn dòng nước chảy, yên tĩnh và khoáng đãng để ta có thể thả hồn theo dòng nước, cuốn đi mọi mệt mỏi, buồn phiền, suy tư của cuộc sống.</p>
         <h4>3. Nhà hàng/ cafe ven sông</h4>
         <p>Bạn có muốn thưởng thức những bữa tối lãng mạng bên bờ sông Sài Gòn? Hay chỉ đơn giản là ngắm hòang hôn trên sông bên ly cafe sữa đá quen thuộc? Hãy thử khám phá những địa điểm hẹn hò lãng mạng bên sông được khá nhiều người yêu thích ở sài Gòn.</p>
      </div>
   </div>
   <div class="qp-action">
      <div class="action-left">
         <ul>
            <li><a class="like-btn" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>Yêu thích | <span class="like-number">16</span></a></li>
            <li class="action-report">
               <a href="#">Báo cáo</a>
               <div class="report-bg"></div>
               <div class="report-popup">
                  <div class="report-title">
                     <h3>Báo cáo vi phạm</h3>
                     <i class="nc-icon-outline ui-2_small-remove"></i>
                  </div>
                  <div class="report-content">
                     <form action="#">
                        <label for="r1">
                        <input type="radio" name="report" id="r1">Nội dung này gây khó chịu hoặc không thú vị
                        </label>
                        <label for="r2">
                        <input type="radio" name="report" id="r2">Tôi nghĩ nội dung này không nên xuất hiện trên Quickrep
                        </label>
                        <label for="r3">
                        <input type="radio" name="report" id="r3">Quấy rối: Phân biệt hoặc đối nghịch với một người hoặc một nhóm
                        </label>
                        <label for="r4">
                        <input type="radio" name="report" id="r4">Đó là nội dung spam
                        </label>
                     </form>
                  </div>
                  <div class="report-bottom">
                     <div class="report-model">
                        <a href="#" class="report-cancel">Hủy bỏ</a>
                        <a href="#" class="report-send">Gửi báo cáo</a>
                     </div>
                  </div>
               </div>
            </li>
            <li class="action-follow"><a href="#">Theo dõi <span>1</span></a></li>
         </ul>
      </div>
      <div class="action-right">
         <ul>
            <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-share-square-o" aria-hidden="true"></i></a></li>
         </ul>
      </div>
   </div>
   <div class="comment-previews">
      <div class="comment-item">
         <img src="<?=$base_url?>/images/ava-comment-02.png" alt="">
         <div class="comment-info">
            <h4 class="comment-name">Sói Ăn Chay</h4>
            <div class="comment-para">
               <p>Phố đi bộ được xem là trung tâm giải trí quận 1 hiện nay, xung quanh phố đi bộ là hàng chục quán cafe và các món ăn vặt phục vụ đúng nhu cầu của giới trẻ.</p>
            </div>
         </div>
      </div>
      <div class="more-comment">
         <p>3 more comments from Nguyễn Xuân Trường</p>
      </div>
   </div>
   <div class="qp-comment">
      <img src="<?=$base_url?>/images/ava-comment.png" alt="">
      <form action="#">
         <input type="text" placeholder="Viết bình luận của bạn...">
         <input type="submit" value="Bình luận">
      </form>
      <div class="comment-content">
         <div class="comment-item">
            <a href="#"><img src="<?=$base_url?>/images/ava-comment-01.png" alt=""></a>
            <div class="comment-info">
               <h4 class="comment-name"><a href="#">Nguyễn Xuân Trường</a></h4>
               <div class="comment-time"><span class="time">8 giờ trước</span><span class="like">6 yêu thích</span></div>
               <div class="comment-para">
                  <p>Giữa sông nước mênh mông, Boat House nổi lên như một ốc đảo xinh đẹp, gần gũi với thiên nhiên. Nhà hàng tọa lạc ngay bên sông Sài Gòn trong khuôn viên khu biệt thự Thảo Điền, An Phú, là điểm hẹn hò lý tưởng cho những ai yêu thích cảnh sông nước, thiên nhiên.</p>
               </div>
               <div class="comment-action">
                  <ul>
                     <li><a href="#" class="sub-reply-click">Trả lời</a></li>
                     <li><a href="#">Yêu thích</a></li>
                     <li><a href="#">Theo dõi</a></li>
                     <li><a href="#">Báo cáo</a></li>
                  </ul>
               </div>
               <div class="sub-reply-comment">
                  <img src="<?=$base_url?>/images/ava-comment.png" alt="">
                  <form action="#">
                     <input type="text" placeholder="Viết bình luận của bạn...">
                     <input type="submit" value="Bình luận">
                  </form>
               </div>
            </div>
            <div class="sub-comment comment-content">
               <div class="comment-item">
                  <a href="#"><img src="<?=$base_url?>/images/ava-comment-02.png" alt=""></a>
                  <div class="comment-info">
                     <h4 class="comment-name"><a href="#">Ken</a></h4>
                     <div class="comment-time"><span class="time">1 giờ trước</span><span class="like">9 yêu thích</span></div>
                     <div class="comment-para">
                        <p>Phố đi bộ được xem là trung tâm giải trí quận 1 hiện nay, xung quanh phố đi bộ là hàng chục quán cafe và các món ăn vặt phục vụ đúng nhu cầu của giới trẻ.</p>
                     </div>
                     <div class="comment-action">
                        <ul>
                           <li><a href="#" class="sub-reply-click">Trả lời</a></li>
                           <li><a href="#">Yêu thích</a></li>
                           <li><a href="#">Theo dõi</a></li>
                           <li><a href="#">Báo cáo</a></li>
                        </ul>
                     </div>
                     <div class="sub-reply-comment">
                        <img src="<?=$base_url?>/images/ava-comment.png" alt="">
                        <form action="#">
                           <input type="text" placeholder="Viết bình luận của bạn...">
                           <input type="submit" value="Bình luận">
                        </form>
                     </div>
                  </div>
                  <div class="sub-comment comment-content">
                     <div class="comment-item">
                        <a href="#"><img src="<?=$base_url?>/images/ava-comment-01.png" alt=""></a>
                        <div class="comment-info">
                           <h4 class="comment-name"><a href="#">Gấu</a></h4>
                           <div class="comment-time"><span class="time">10 giờ trước</span><span class="like">15 yêu thích</span></div>
                           <div class="comment-para">
                              <p>Phố đi bộ được xem là trung tâm giải trí quận 1 hiện nay, xung quanh phố đi bộ là hàng chục quán cafe và các món ăn vặt phục vụ đúng nhu cầu của giới trẻ.</p>
                           </div>
                           <div class="comment-action">
                              <ul>
                                 <li><a href="#" class="sub-reply-click">Trả lời</a></li>
                                 <li><a href="#">Yêu thích</a></li>
                                 <li><a href="#">Theo dõi</a></li>
                                 <li><a href="#">Báo cáo</a></li>
                              </ul>
                           </div>
                           <div class="sub-reply-comment">
                              <img src="<?=$base_url?>/images/ava-comment.png" alt="">
                              <form action="#">
                                 <input type="text" placeholder="Viết bình luận của bạn...">
                                 <input type="submit" value="Bình luận">
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="comment-item">
            <a href="#"><img src="<?=$base_url?>/images/ava-comment-02.png" alt=""></a>
            <div class="comment-info">
               <h4 class="comment-name"><a href="#">Sói Ăn Chay</a></h4>
				<div class="comment-time">
					<span class="time">12 giờ trước</span>
					<span class="like">19 yêu thích</span>
				</div>
               <div class="comment-para">
                  <p>Phố đi bộ được xem là trung tâm giải trí quận 1 hiện nay, xung quanh phố đi bộ là hàng chục quán cafe và các món ăn vặt phục vụ đúng nhu cầu của giới trẻ.</p>
               </div>
               <div class="comment-action">
                  <ul>
                     <li><a href="#" class="sub-reply-click">Trả lời</a></li>
                     <li><a href="#">Yêu thích</a></li>
                     <li><a href="#">Theo dõi</a></li>
                     <li><a href="#">Báo cáo</a></li>
                  </ul>
               </div>
               <div class="sub-reply-comment">
                  <img src="<?=$base_url?>/images/ava-comment.png" alt="">
                  <form action="#">
                     <input type="text" placeholder="Viết bình luận của bạn...">
                     <input type="submit" value="Bình luận">
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- .question-premium -->