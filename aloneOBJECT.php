class Stock{
  var $chn;

  function dup($x){
    return 2*$x;
  }

  contructor Stock($str){
    $this.chn = $str;
  }
}

var $s = new Stock("chn init");
echo $s->dup(1);
