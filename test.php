<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
  <div class="row">
    <h2>Pinterest Responsive Grid</h2>

    <p>Best viewed <a href="http://bootsnipp.com/iframe/Zkk0O" target="_blank">full screen</a>
    </p>
    <hr>
    <section id="pinBoot">
        <?php
  @
     $con=mysqli_connect('localhost','root','','ouvrages');
      $sql="SELECT *FROM sous_categories";
      $res=mysqli_query($con,$sql);
      $count=mysqli_num_rows($res);
      $links=2;
      $list_class="pagination pagination-sm";
     // echo $count;
     $rowsperpage=2;
     $page=$_REQUEST['p'];
     if ($page== 0 or $page== '') {
          $page=1;
      }  
     $page=$page-1;
     $p=$page*$rowsperpage;

      $sql="SELECT*FROM sous_categories  LIMIT ".$p.",".$rowsperpage;
       $res=mysqli_query($con,$sql);
       while($row=mysqli_fetch_array($res)) { 
        
   

    ?>

      <article class="white-panel"><img src="http://i.imgur.com/sDLIAZD.png" alt="">
        <h4><a href="#"><?php echo $row['sous_categorie']; ?></a></h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </article>
    <?php } ?>

<?php

      
        $last=ceil($count/$rowsperpage);
        $start=(($page-$links)>0)? $page-$links:1;
        $end=(($page + $links)<$last)? $page + $links :$last;

        

    if ($_REQUEST['p']>1) {
        $prev_page=$_REQUEST['p']-1;
       
         echo '<button class="btn btn-default"  style="cursor:pointer;" onclick="loadData('.$prev_page.')">&laquo;</button>';
    }
    
    $check=$p+$rowsperpage;
    
    //$limit=$count/$rowsperpage;
    //$limit=ceil($limit);
    
    if($start>1){
          echo " ";
          echo '<button class="btn btn-default" style="cursor:pointer;" onclick="loadData(1)">1</button>';
          echo '<button class="btn btn-default disabled">...</button>';
    }
    for ($i=$start; $i <=$end ; $i++) { 

        if($i==$_REQUEST['p']){
            echo '<button class="btn btn-primary"><strong>'.$i."</strong></button>";
        }else{
             echo '<button class="btn btn-default" style="cursor:pointer;" onclick="loadData('.$i.')">'.$i.'</button>';
            
        }
        echo " ";
    }
   

    if($end<$last){

          echo '<button class="btn btn-default disabled">...</button>';
          echo " ";
          echo'<button class="btn btn-default" style="cursor:pointer;" onclick="loadData('.$last.')">'.$last.'</button>';
          echo " ";
        }

    echo " ";

    if ($count>$check) {
        $next_page=$_REQUEST['p']+1;
        
          echo '<button class="btn btn-default"  style="cursor:pointer;" onclick="loadData('.$next_page.')">&raquo;</button>';
          echo " ";
    }

   


  ?>


    </section>


    <hr>


  </div>


</div>
<style>


body {
 background-color:#eee;   
}    

#pinBoot {
  position: relative;
  max-width: 100%;
  width: 100%;
}
img {
  width: 100%;
  max-width: 100%;
  height: auto;
}
.white-panel {
  position: absolute;
  background: white;
  box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.3);
  padding: 10px;
}


.white-panel h1 {
  font-size: 1em;
}
.white-panel h1 a {
  color: #A92733;
}
.white-panel:hover {
  box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5);
  margin-top: -5px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
</style>
<script>
  $(document).ready(function() {
$('#pinBoot').pinterest_grid({
no_columns: 4,
padding_x: 10,
padding_y: 10,
margin_bottom: 50,
single_column_breakpoint: 700
});
});


;(function ($, window, document, undefined) {
    var pluginName = 'pinterest_grid',
        defaults = {
            padding_x: 10,
            padding_y: 10,
            no_columns: 3,
            margin_bottom: 50,
            single_column_breakpoint: 700
        },
        columns,
        $article,
        article_width;

    function Plugin(element, options) {
        this.element = element;
        this.options = $.extend({}, defaults, options) ;
        this._defaults = defaults;
        this._name = pluginName;
        this.init();
    }

    Plugin.prototype.init = function () {
        var self = this,
            resize_finish;

        $(window).resize(function() {
            clearTimeout(resize_finish);
            resize_finish = setTimeout( function () {
                self.make_layout_change(self);
            }, 11);
        });

        self.make_layout_change(self);

        setTimeout(function() {
            $(window).resize();
        }, 500);
    };

    Plugin.prototype.calculate = function (single_column_mode) {
        var self = this,
            tallest = 0,
            row = 0,
            $container = $(this.element),
            container_width = $container.width();
            $article = $(this.element).children();

        if(single_column_mode === true) {
            article_width = $container.width() - self.options.padding_x;
        } else {
            article_width = ($container.width() - self.options.padding_x * self.options.no_columns) / self.options.no_columns;
        }

        $article.each(function() {
            $(this).css('width', article_width);
        });

        columns = self.options.no_columns;

        $article.each(function(index) {
            var current_column,
                left_out = 0,
                top = 0,
                $this = $(this),
                prevAll = $this.prevAll(),
                tallest = 0;

            if(single_column_mode === false) {
                current_column = (index % columns);
            } else {
                current_column = 0;
            }

            for(var t = 0; t < columns; t++) {
                $this.removeClass('c'+t);
            }

            if(index % columns === 0) {
                row++;
            }

            $this.addClass('c' + current_column);
            $this.addClass('r' + row);

            prevAll.each(function(index) {
                if($(this).hasClass('c' + current_column)) {
                    top += $(this).outerHeight() + self.options.padding_y;
                }
            });

            if(single_column_mode === true) {
                left_out = 0;
            } else {
                left_out = (index % columns) * (article_width + self.options.padding_x);
            }

            $this.css({
                'left': left_out,
                'top' : top
            });
        });

        this.tallest($container);
        $(window).resize();
    };

    Plugin.prototype.tallest = function (_container) {
        var column_heights = [],
            largest = 0;

        for(var z = 0; z < columns; z++) {
            var temp_height = 0;
            _container.find('.c'+z).each(function() {
                temp_height += $(this).outerHeight();
            });
            column_heights[z] = temp_height;
        }

        largest = Math.max.apply(Math, column_heights);
        _container.css('height', largest + (this.options.padding_y + this.options.margin_bottom));
    };

    Plugin.prototype.make_layout_change = function (_self) {
        if($(window).width() < _self.options.single_column_breakpoint) {
            _self.calculate(true);
        } else {
            _self.calculate(false);
        }
    };

    $.fn[pluginName] = function (options) {
        return this.each(function () {
            if (!$.data(this, 'plugin_' + pluginName)) {
                $.data(this, 'plugin_' + pluginName,
                new Plugin(this, options));
            }
        });
    }

})(jQuery, window, document);
</script>