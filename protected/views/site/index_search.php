<div class="row">
    <div class="col-10 col-center">
             <div class="panel">
<div class="span10 pull-right">
    <div class="filters collapse">
        <div class="intro-filter clearfix filters-section"
       data-behavior="tooltip"
       data-position="left"
       title="Trip">

    <h6 class="filter-label col-3">Filter</h6>

    <form class="form-horizontal trip-form">

      <i class="icon icon-arrow-right icon-gray"></i>

      <input name="checkin"
             type="text"
             class="checkin input-medium"
             placeholder="Check in">

      <input name="checkout"
             type="text"
             class="checkout input-medium"
             placeholder="Check out">

      <div class="select input-medium">
        <select name="guests"
                class="guest-select"
                data-prefill="">
          <option value="1">1 Guest</option>
<option value="2">2 Guests</option>
<option value="3">3 Guests</option>
<option value="4">4 Guests</option>
<option value="5">5 Guests</option>
<option value="6">6 Guests</option>
<option value="7">7 Guests</option>
<option value="8">8 Guests</option>
<option value="9">9 Guests</option>
<option value="10">10 Guests</option>
<option value="11">11 Guests</option>
<option value="12">12 Guests</option>
<option value="13">13 Guests</option>
<option value="14">14 Guests</option>
<option value="15">15 Guests</option>
<option value="16">16+ Guests</option>
        </select>
      </div>

    </form>

  </div>

  

  

  

  
    </div>
    
    <div class="sidebar-header-placeholder"></div>
    
            
        <?php 
        
        $this->widget('zii.widgets.CListView', array(
            'dataProvider'=>$dataProvider,
            'itemView'=>'_view',
        )); ?>
    
  </div>

</div>
