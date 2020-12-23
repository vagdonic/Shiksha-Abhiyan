<div class="container-fluid pb-video-container">
    <div class="col-md-10 col-md-offset-1">
        <h3 class="text-center">Video Gallery</h3> 

                     <?php 
                       
                        $mydb->setQuery("SELECT * FROM `tbllesson` ");
                        $cur = $mydb->loadResultList();

                        foreach ($cur as $result) {  

                            if ($result->Category=='Video') {


            ?>          
                            <div class="span4"> 
                                <div class="stretch">
                                    <video    controls class="pb-video-frame">
                                      <source src="<?php echo web_root.'admin/modules/lesson/'.$result->FileLocation; ?>" type="video/mp4">
                                      <source class="pb-video-frame" src="<?php echo web_root.'admin/modules/lesson/'.$result->FileLocation; ?>" type="video/ogg"> 
                                    </video> 
                                </div>
                            </div>
                 
         
            <?php
                            }
                        } 
            ?>
 
        </div> 
    </div> 
<style>


    .stretch video {
        width: 100%;
    }

    .pb-video {
        border: 1px solid #e6e6e6;
        padding: 5px;
    }

    .pb-video:hover {
        background: #2c3e50;
    }

    .pb-video-frame {
        transition: width 2s, height 2s;
    }

        .pb-video-frame:hover {
            height: 300px;
        }

    .pb-row {
        margin-bottom: 10px;
    }
</style>
</div>




     