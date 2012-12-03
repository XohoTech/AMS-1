<div class="row-fluid">
    <h2><?php echo $asset_details->title ?></h2>
    <div class="span12 form-row">

        <?php $this->load->view('records/_list'); ?>

        <div class="span9">

            <div class="span12 button-after-player">
                <button class="btn btn-large"><span class="icon-pencil"></span>Edit Instantiation</button>
                <button class="btn btn-large"><span class="icon-download-alt"></span>Edit Instantiation</button>
            </div>



            <div class="my-navbar span12">
                <div> Intellectual Content </div>
            </div>

            <div class="span12 form-row">
                <div class="span2 form-label">
                    <label><i class="icon-question-sign"></i>* Organization:</label>
                </div>
                <!--end of span3-->
                <div id="search_bar" class="span10">
                    <div class="disabled-field"> <?php echo $asset_details->organization; ?><!--end of btn_group--> 
                    </div>
                    <!--end of disabled-field--> 
                </div>
                <!--end of span9--> 
            </div>
            <div class="span12 form-row">
                <div class="span2 form-label">
                    <label><i class="icon-question-sign"></i>* Instantiation:</label>
                </div>
                <!--end of span3-->
                <div id="search_bar" class="span10">
                    <div class="disabled-field">
                        <?php
                        if ($instantiation_detail->instantiation_identifier)
                        {
                            ?>
                            <strong>Instantiation ID:</strong><br/>
                            <p><?php echo $instantiation_detail->instantiation_identifier; ?></p>
                            <br/>
                        <?php } ?>
                        <?php
                        if ($instantiation_detail->instantiation_source)
                        {
                            ?>
                            <strong>Instantiation ID Source:</strong><br/>
                            <p><?php echo $instantiation_detail->instantiation_source; ?></p>
                            <br/>
                        <?php } ?>

                    </div>
                </div>

            </div>
            <?php
            if ($instantiation_detail->media_type)
            {
                ?>
                <div class="span12 form-row">
                    <div class="span2 form-label">
                        <label><i class="icon-question-sign"></i>* Media Type:</label>
                    </div>
                    <!--end of span3-->
                    <div id="search_bar" class="span10">
                        <div class="disabled-field">

                            <strong>Instantiation ID:</strong><br/>
                            <p><?php echo $instantiation_detail->media_type; ?></p>
                            <br/>


                        </div>
                    </div>

                </div>
            <?php } ?>


            <?php
            if ($instantiation_detail->format_type && $instantiation_detail->format_type!='')
            {
                ?>
                <div class="span12 form-row">
                    <div class="span2 form-label">
                        <label><i class="icon-question-sign"></i>* Format:</label>
                    </div>
                    <!--end of span3-->
                    <div id="search_bar" class="span10">
                        <div class="disabled-field">
                            <?php
                            if ($instantiation_detail->format_type)
                            {
                                ?>
                                <strong>Format Type:</strong><br/>
                                <p><?php echo $instantiation_detail->format_type; ?></p>
                                <br/>
                            <?php } ?>
                            <?php
                            if ($instantiation_detail->format_name)
                            {
                                ?>
                                <strong>Format Name:</strong><br/>
                                <p><?php echo $instantiation_detail->format_name; ?></p>
                                <br/>
                            <?php } ?>

                        </div>
                    </div>

                </div>
            <?php } ?>
        </div>
    </div>
</div>