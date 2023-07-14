
</div>
    <div class="maindiv divD">
        <form class="search" action="search.php" method="GET">
            <input type="text" class="input_search" placeholder="Search" name="search">
        </form>
        
        <div class="tendance">
            <h2>France Trends</h2>
            <?php 
            $c=1;
            $d=11;
            while($c < $d){?>
                <div>
                    <p class='trend'>Trend N°<?php echo $c; ?></p> 
                    <p>*************</p>
                </div>
            <?php $c=$c+1; }?>
        </div>
    </div>