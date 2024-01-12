@extends('frontend.user.dashboard.user-master')
@section('push_css')
<style>
    .user-dashboard-card {
      position: relative;
      overflow: hidden;
      cursor: pointer;
    }

    .user-dashboard-card input[type="checkbox"] {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      opacity: 0;
      cursor: pointer;
      z-index: 1; /* Ensure the checkbox is clickable */
    }

    .user-dashboard-card .content {
      padding: 20px;
    }

    .user-dashboard-card:hover .content,
    .user-dashboard-card.clicked .content {
      background-color: #f8f9fa; /* Background color when the div is hovered or clicked */
    }

    .user-dashboard-card input[type="checkbox"]:checked + .content {
      background-color: #f8f9fa; /* Background color when the checkbox is checked */
    }

    .user-dashboard-card input[type="checkbox"]:checked + .content:after {
      content: '\f00c'; /* Unicode for checkmark (FontAwesome) */
      font-family: 'Font Awesome 6 Free';
      color: #28a745; /* Color of the checkmark */
      font-size: 24px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      animation: fadeIn 0.5s ease-out; /* Fade-in animation */
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }

    .checked {border:solid 2px red;background:#ffff00;}

  </style>
@endsection
@section('section')
  
        <div class="container">
          <form action="" method="post">
            <div class="row">
                   <div class="col-lg-4 mb-2 click_div">
                     <label class="user-dashboard-card">
                       <input type="checkbox" id="checkbox1" name="checkbox1" class="form-check-input select_record">
                       <div class="icon"><i class="fas fa-calendar"></i></div>
                       <div class="content">
                         <h4 class="title">Aadhar Card</h4>
                       </div>
                     </label>
               </div>
             <div class="col-lg-4 mb-2 click_div">
                 <div class="user-dashboard-card">
                     <div class="icon"><i class="fas fa-calendar"></i></div>
                     <div class="content">
                         <h4 class="title">RL</h4>
                         <input type="checkbox" id="checkbox1" name="checkbox1" class="form-check-input select_record">
                     </div>
                 </div>
             </div>
     
             <div class="col-lg-4 mb-2 click_div">
                 <div class="user-dashboard-card">
                     <div class="icon"><i class="fas fa-calendar"></i></div>
                     <div class="content">
                         <h4 class="title">10th Marksheet</h4>
                         <input type="checkbox" id="checkbox1" name="checkbox1" class="form-check-input select_record">
                     </div>
                 </div>
             </div>
             <div class="col-lg-4 mb-2 click_div">
                 <div class="user-dashboard-card">
                     <div class="icon"><i class="fas fa-calendar"></i></div>
                     <div class="content">
                         <h4 class="title">Graduation markesheet</h4>
                         <input type="checkbox" id="checkbox1" name="checkbox1" class="form-check-input select_record">
                     </div>
                 </div>
             </div>
            </div>
       
              <input type="submit" class="btn btn-primary">
        
          </form>
  </div>
@endsection

@section('scripts')
<script>
  $(document).ready(function () {
      var record_selected = []; // declare global array

      $('.click_div').on('click', ".select_record", function () {
      
          var $checkbox = $(this);
          
          if (!$('.click_div').is('.checked')) {
            alert('hello');
            $('.click_div').addClass('checked');
              $checkbox.attr('checked',true);
              
          } else {
              $checkbox.removeClass('checked');
          }

       });
  });
</script>
    
@endsection