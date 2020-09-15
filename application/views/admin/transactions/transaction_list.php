<?php
/*
* All Transactions View
*/
$session = $this->session->userdata('username');
$currency = $this->Xin_model->currency_sign(0);
?>
<?php $system = $this->Xin_model->read_setting_info(1);?>
<?php $get_animate = $this->Xin_model->get_content_animate();?>

<div class="box <?php echo $get_animate;?>">
  <div class="box-header with-border">
    <h3 class="box-title"> <?php echo $this->lang->line('xin_list_all');?> <?php echo $this->lang->line('xin_acc_transactions');?> </h3>
  </div>
  <div class="box-body">
    <div class="box-datatable table-responsive">
      <table class="datatables-demo table table-striped table-bordered" id="xin_table">
        <input type="hidden" id="current_currency" value="<?php $curr = explode('0',$currency); echo $curr[0];?>" />
        <thead>
          <tr>
            <th><?php echo $this->lang->line('xin_e_details_date');?></th>
            <th><?php echo $this->lang->line('xin_view');?></th>
            <th><?php echo $this->lang->line('xin_acc_dr_cr');?></th>
            <th><?php echo $this->lang->line('xin_type');?></th>
            <th><?php echo $this->lang->line('xin_amount');?></th>
            <th><?php echo $this->lang->line('xin_acc_ref_no');?></th>
          </tr>
        </thead>
      </table>
    </div>
  </div>
</div>