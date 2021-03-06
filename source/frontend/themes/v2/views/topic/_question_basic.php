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
<div class="question-basic section">
   <div class="qb-topic">
      <p>Câu hỏi<a class="qbt-hover" href="#">Khách sạn</a></p>
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
   <h3 class="qb-title"><a href="#">Xin địa chỉ trung tâm luyện thi IELTS đảm bảo, uy tín ở TP.HCM?</a></h3>
   <div class="qb-time"><span class="time-update">Cập nhật 21 giờ trước</span><a href="#">2 câu trả lời</a></div>
   <div class="qb-action">
      <div class="action-left">
         <ul>
            <li><a href="#" class="textarea-click"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Trả lời</a></li>
            <li><a href="#">Ẩn</a></li>
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
            <li class="action-follow"><a href="#">Theo dõi <span>2</span></a></li>
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
   <div class="qb-textarea">
      <textarea id="froala-editor"></textarea>
   </div>
</div>
<!-- .question-basic -->