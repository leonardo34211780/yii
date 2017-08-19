<div class="row">
    <div class="col-sm-4">
        <div class="btn-group btn-breadcrumb">
            <?php
            foreach($crumbs as $crumb){
                
                if(isset($crumb['url'])){
                    if(!isset($crumb['label'])){
                        echo '<a class="btn btn-primary btn-md" href="'.$crumb['url'].
                            '">'.'<i class="glyphicon glyphicon-'
                                .$crumb['icon'].'"></i></a>';
                    }
                    else{
                        echo '<a class="btn btn-primary btn-md" href="'.$crumb['url'].
                            '">'.$crumb['label'].'</a>';
                    }
                }
                else{
                    echo '<em class="btn btn-default btn-md disabled">'
                        .$crumb['label'].'</em>';
                }   
            }
            ?>
        </div>
        
    </div>
</div>