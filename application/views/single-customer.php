<div id="content-page" class="content-page">

<div class="container-fluid">
<div class="row">
<div class="col-md-12">
    <?php
    $except=array('id','created_on','customer_id','updated_on');
    if($customerdetails){
        ?>
        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">

        <div class="iq-card-header d-flex justify-content-between">

        <div class="iq-header-title">

            <h4 class="card-title">Customer Details</h4>

        </div>
        </div>
        <div class="iq-card-body">

        <div class="table-responsive">

        <table class="table mb-0 table-borderless">
        <?php
        foreach($customerdetails as $index=>$value)
        {
            if(!in_array($index,$except))
            {
                if($index=="bank_ac_no")
                $index="Bank A/C No";
            if($value)
            {
            ?>
            <div class="form-row p-2">
                <div class="col-6 p-1"><?php echo ucfirst(str_replace('_',' ',$index));?></div>
                <div class="col-6 p-1"><?php echo $value;?></div>
            </div>
            <?php
            }
        }
        }
        ?> </table></div></div>
    <div class="iq-card-footer text-center pb-3"><a href="<?php echo site_url('customers-list')?>" class="btn btn-primary">Go Back</a></div>
    </div> <?php
    }?>
</div>
</div>
</div>
</div>